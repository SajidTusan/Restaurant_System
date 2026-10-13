<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;
use Auth;
use Session;

class SslCommerzPaymentController extends Controller
{
    public function exampleEasyCheckout()
    {
        return view('exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('exampleHosted');
    }

    public function index(Request $request)
    {
        $total = Session::get('total');
        $invoice = Session::get('invoice');

        $post_data = array();
        $post_data['total_amount'] = $total;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $invoice;

        Session::put('address', $request->address);

        $post_data['cus_name'] = Auth::user()->name;
        $post_data['cus_email'] = Auth::user()->email;
        $post_data['cus_add1'] = $request->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "Dhaka";
        $post_data['cus_state'] = "Dhaka";
        $post_data['cus_postcode'] = "1000";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = Auth::user()->phone;
        $post_data['cus_fax'] = "";

        $post_data['ship_name'] = Auth::user()->name;
        $post_data['ship_add1'] = $request->address;
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Food Order";
        $post_data['product_category'] = "Food";
        $post_data['product_profile'] = "general";

        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        Session::put('address', $post_data['cus_add1']);

        $sslc = new SslCommerzNotification();
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    public function payViaAjax(Request $request)
    {
        $total = Session::get('total');
        $invoice = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 8);

        Session::put('invoice', $invoice);

        $post_data = array();
        $post_data['total_amount'] = $total;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $invoice;

        $post_data['cus_name'] = Auth::user()->name;
        $post_data['cus_email'] = Auth::user()->email;
        $post_data['cus_add1'] = $request->address ?? 'Dhaka, Bangladesh';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "Dhaka";
        $post_data['cus_state'] = "Dhaka";
        $post_data['cus_postcode'] = "1000";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = Auth::user()->phone ?? '01700000000';
        $post_data['cus_fax'] = "";

        $post_data['ship_name'] = Auth::user()->name;
        $post_data['ship_add1'] = $request->address ?? 'Dhaka';
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Food Order";
        $post_data['product_category'] = "Food";
        $post_data['product_profile'] = "general";

        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        Session::put('address', $post_data['cus_add1']);

        DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $invoice,
                'currency' => $post_data['currency']
            ]);

        // Use 'hosted' mode — directly redirects to SSLCommerz gateway page
        $sslc = new SslCommerzNotification();
        $sslc->makePayment($post_data, 'hosted');
    }

    public function success(Request $request)
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $data = array();
        $invoice = Session::get('invoice');

        $data['shipping_address'] = Session::get('address');
        $data['product_order'] = "yes";
        $data['invoice_no'] = $invoice;
        $data['pay_method'] = "Online Payment";
        $data['delivery_time'] = "3 hours";
        $data['purchase_date'] = date("Y-m-d");

        DB::table('carts')
            ->where('user_id', Auth::user()->id)
            ->where('product_order', 'no')
            ->update($data);

        session()->flash('success', 'Payment Successful! Your order has been placed.');
        return redirect('/');
    }

    public function fail(Request $request)
    {
        return view('failurepay');
    }

    public function cancel(Request $request)
    {
        return view('failurepay');
    }

    public function ipn(Request $request)
    {
        if ($request->input('tran_id')) {
            $tran_id = $request->input('tran_id');

            $order_details = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount')->first();

            if ($order_details->status == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
                if ($validation == TRUE) {
                    DB::table('orders')->where('transaction_id', $tran_id)->update(['status' => 'Processing']);
                    echo "Transaction is successfully Completed";
                } else {
                    DB::table('orders')->where('transaction_id', $tran_id)->update(['status' => 'Failed']);
                    echo "Validation Fail";
                }
            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
                echo "Transaction is already successfully Completed";
            } else {
                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }
}