@extends('layout', ['title'=> 'Home'])

@section('page-content')
<div style="width:80%; margin:auto;">
    <br><br><br><br>
    <h1>Your order amount is ৳{{$total}}</h1><br>
    <h2 style="color:#FB5849">Choose a payment method</h2><br>

    <input type="radio" id="cod" name="payment" value="cod">
    <label for="cod"><img style="max-width:150px;" src="{{ asset('assets/images/cod.png')}}"></label><br><br>

    <input type="radio" id="online" name="payment" value="online">
    <label for="online"><img style="max-width:150px;" src="{{ asset('assets/images/bkash.png')}}"></label><br><br>

    @if (Auth::check())

    {{-- COD Form --}}
    <div id="cod-section" style="display:none;">
        <form method="post" action="{{route('mails.shipped', $total)}}">
            @csrf
            <input class="btn btn-success" type="submit" value="Place Order (Cash on Delivery)">
        </form>
    </div>

    {{-- Online Payment Form --}}
    <div id="online-section" style="display:none;">
        <?php Session::put('total',$total); ?>
        <form method="POST" action="/pay-via-ajax">
            @csrf
            <div style="margin-bottom:10px;">
                <label><strong>Your Delivery Address:</strong></label><br>
                <input type="text" name="address" class="form-control"
                    style="width:400px; padding:8px; border:1px solid #ccc; border-radius:4px;"
                    placeholder="Enter your full delivery address" required>
            </div>
            <button class="btn btn-success" type="submit">Pay Now with SSLCommerz</button>
        </form>
    </div>

    @else
    <div id="cod-section" style="display:none;">
        <a href="/login"><input class="btn btn-success" type="submit" value="Log in to Order"></a>
    </div>
    <div id="online-section" style="display:none;">
        <a href="/login"><input class="btn btn-success" type="submit" value="Log in to Pay"></a>
    </div>
    @endif

</div>

<script>
    document.querySelectorAll('input[name="payment"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            document.getElementById('cod-section').style.display = 'none';
            document.getElementById('online-section').style.display = 'none';
            if (this.value === 'cod') {
                document.getElementById('cod-section').style.display = 'block';
            } else if (this.value === 'online') {
                document.getElementById('online-section').style.display = 'block';
            }
        });
    });
</script>

@endsection