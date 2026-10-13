@extends('layout', ['title'=> 'Home'])

@section('page-content')

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h3>MidwayCafe</h3>
                            <h4>THE BEST EXPERIENCE</h4>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation"><h2>Make A Reservation</h2></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">

                        @foreach($banners as $banner)
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/'.$banner->image)}}" alt="">
                            </div>
                          </div>

                        @endforeach
                          <!-- // Item -->
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                        @foreach($about_us as $a_us)
                            <h6>About Us</h6>
                            <h2>{{  $a_us->title  }}</h2>
                        </div>
                        <p>{{  $a_us->description  }}</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('assets/images/'.$a_us->image1)}}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/'.$a_us->image2)}}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/'.$a_us->image3)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="{{  $a_us->youtube_link    }}" target="_blank"> <i class="fa fa-play"></i></a>
                            <img src="{{ asset('assets/images/'.$a_us->vd_image)}}" alt="">

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    {{-- ===== FIFA World Cup 2026 Promo Section ===== --}}
{{-- Add this BEFORE the Menu section in home.blade.php --}}
{{-- Find: <!-- ***** Menu Area Starts ***** --> --}}
{{-- Paste this entire block RIGHT ABOVE that line --}}

<section id="worldcup-promo" style="padding: 60px 0; overflow: hidden; position: relative; background: linear-gradient(135deg, #0F6E56 0%, #1D9E75 40%, #0C447C 100%);">

    {{-- Background circles --}}
    <div style="position:absolute; top:-60px; right:-60px; width:350px; height:350px; background:rgba(250,199,117,0.08); border-radius:50%; pointer-events:none;"></div>
    <div style="position:absolute; bottom:-80px; left:80px; width:250px; height:250px; background:rgba(255,255,255,0.05); border-radius:50%; pointer-events:none;"></div>
    <div style="position:absolute; top:40px; left:45%; width:120px; height:120px; background:rgba(250,199,117,0.06); border-radius:50%; pointer-events:none;"></div>

    <div class="container" style="position:relative; z-index:1;">
        <div class="row align-items-center">

            {{-- Left Content --}}
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">

                {{-- Badge --}}
                <div style="display:inline-flex; align-items:center; gap:8px; background:#FAC775; padding:6px 16px; border-radius:30px; margin-bottom:20px;">
                    <i class="fa fa-trophy" style="color:#412402; font-size:13px;"></i>
                    <span style="color:#412402; font-size:11px; letter-spacing:2px; text-transform:uppercase; font-weight:700;">FIFA World Cup 2026</span>
                </div>

                {{-- Headline --}}
                <h2 style="color:#fff; font-size:38px; font-weight:900; line-height:1.2; margin-bottom:14px; font-family:'Dancing Script', cursive;">
                    Watch the Match,<br>
                    <span style="color:#FAC775; font-style:italic;">Feast Like a Champion!</span>
                </h2>

                {{-- Description --}}
                <p style="color:#9FE1CB; font-size:16px; line-height:1.8; margin-bottom:24px; max-width:480px;">
                    Order any combo meal during match hours and enjoy exclusive World Cup deals. Every bite, a celebration! 🍽️⚽
                </p>

                {{-- Buttons --}}
                <div style="display:flex; gap:14px; align-items:center; flex-wrap:wrap;">
                    <a href="#menu" style="background:#FAC775; color:#412402; padding:13px 30px; border-radius:4px; font-size:14px; font-weight:700; text-decoration:none; display:inline-block; transition:all 0.3s;" onmouseover="this.style.background='#EF9F27'" onmouseout="this.style.background='#FAC775'">
                        🏆 Grab the Offer
                    </a>
                    <a href="#menu" style="color:#fff; font-size:14px; font-weight:600; border-bottom:2px solid rgba(255,255,255,0.5); padding-bottom:3px; text-decoration:none; transition:all 0.3s;" onmouseover="this.style.borderColor='#FAC775'; this.style.color='#FAC775'" onmouseout="this.style.borderColor='rgba(255,255,255,0.5)'; this.style.color='#fff'">
                        View Full Menu →
                    </a>
                </div>

                {{-- Bottom info bar --}}
                <div style="margin-top:28px; padding-top:20px; border-top:1px solid rgba(255,255,255,0.15); display:flex; gap:24px; flex-wrap:wrap;">
                    <div style="display:flex; align-items:center; gap:8px;">
                        <i class="fa fa-clock-o" style="color:#FAC775; font-size:14px;"></i>
                        <span style="color:#9FE1CB; font-size:13px;">Valid all match days</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:8px;">
                        <i class="fa fa-phone" style="color:#FAC775; font-size:14px;"></i>
                        <span style="color:#9FE1CB; font-size:13px;">Order via website or call</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:8px;">
                        <i class="fa fa-map-marker" style="color:#FAC775; font-size:14px;"></i>
                        <span style="color:#9FE1CB; font-size:13px;">Noddapara, Dhaka</span>
                    </div>
                </div>

            </div>

            {{-- Right Offer Cards --}}
            <div class="col-lg-5 col-md-12">
                <div style="display:flex; flex-direction:column; gap:14px;">

                    {{-- Offer 1 --}}
                    <div style="background:#FAC775; border-radius:10px; padding:18px 22px; display:flex; align-items:center; gap:16px; box-shadow:0 8px 25px rgba(0,0,0,0.15);">
                        <div style="width:55px; height:55px; background:#412402; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <i class="fa fa-percent" style="color:#FAC775; font-size:22px;"></i>
                        </div>
                        <div>
                            <div style="color:#412402; font-size:24px; font-weight:900; line-height:1;">20% OFF</div>
                            <div style="color:#633806; font-size:14px; margin-top:3px; font-weight:600;">All combo meals during matches</div>
                        </div>
                    </div>

                    {{-- Offer 2 --}}
                    <div style="background:rgba(255,255,255,0.12); border:1.5px solid rgba(255,255,255,0.25); border-radius:10px; padding:18px 22px; display:flex; align-items:center; gap:16px;">
                        <div style="width:55px; height:55px; background:rgba(250,199,117,0.2); border:2px solid #FAC775; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <i class="fa fa-glass" style="color:#FAC775; font-size:22px;"></i>
                        </div>
                        <div>
                            <div style="color:#fff; font-size:22px; font-weight:900; line-height:1;">Free Drink</div>
                            <div style="color:#9FE1CB; font-size:14px; margin-top:3px;">With every order ৳500 or above</div>
                        </div>
                    </div>

                    {{-- Offer 3 --}}
                    <div style="background:rgba(255,255,255,0.12); border:1.5px solid rgba(255,255,255,0.25); border-radius:10px; padding:18px 22px; display:flex; align-items:center; gap:16px;">
                        <div style="width:55px; height:55px; background:rgba(250,199,117,0.2); border:2px solid #FAC775; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <i class="fa fa-calendar" style="color:#FAC775; font-size:22px;"></i>
                        </div>
                        <div>
                            <div style="color:#fff; font-size:22px; font-weight:900; line-height:1;">June – July 2026</div>
                            <div style="color:#9FE1CB; font-size:14px; margin-top:3px;">All World Cup match days</div>
                        </div>
                    </div>

                    {{-- Limited Time Badge --}}
                    <div style="text-align:center; margin-top:4px;">
                        <span style="display:inline-flex; align-items:center; gap:8px; background:rgba(226,75,74,0.25); border:1.5px solid rgba(240,153,123,0.5); padding:7px 18px; border-radius:30px;">
                            <i class="fa fa-bolt" style="color:#F09977; font-size:13px;"></i>
                            <span style="color:#F09977; font-size:12px; font-weight:700; letter-spacing:1.5px; text-transform:uppercase;">Limited Time Only</span>
                        </span>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>
{{-- ===== End World Cup Promo Section ===== --}}

     <!-- ***** Menu Area Starts ***** -->
     <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Midway Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                  
                                          <li><a href='#tabs-1'><img src="{{ asset('assets/images/tab-icon-01.png')}}" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="{{ asset('assets/images/tab-icon-02.png')}}" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="{{ asset('assets/images/tab-icon-03.png')}}" alt="">Dinner</a></a></li>
                                      
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="text-align:center;" class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">

                                        @foreach($breakfast as $item)

                                        <?php

                            
                                        $total_rate=DB::table('rates')->where('product_id',$item->id)
                                        ->sum('star_value');


                                        $total_voter=DB::table('rates')->where('product_id',$item->id)
                                        ->count();

                                        if($total_voter>0)
                                        {

                                            $per_rate=$total_rate/$total_voter;

                                        }
                                        else
                                        {

                                            $per_rate=0;


                                        }

                                        $per_rate=number_format($per_rate, 1);


                                        $whole = floor($per_rate);      // 1
                                        $fraction = $per_rate - $whole

                                        ?>

                                        @if($item->id %2 ==0)
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/'.$item->image)}}" alt="">
                                                            <h4>{{ $item->name }}</h4>
                                                            <p>{{  $item->description }}</p>
                                                            <div class="price">
                                                                <h6>৳{{  $item->price }}</h6>
                                                            </div>
                                                            <span class="product_rating">
                                                        @for($i=1;$i<=$whole;$i++)

                                                            <i class="fa fa-star "></i>

                                                            @endfor

                                                            @if($fraction!=0)

                                                            <i class="fa fa-star-half"></i>

                                                            @endif
                                                                
                                                                
                                                            <span class="rating_avg">({{  $per_rate}})</span>
                                    </span>
                            <br>
                                                        </div>
                                                    </div>
                                                
                                                </div>      
                                            </div>
                                        </div>
                                        @endif

                                        @endforeach
                                        @foreach($breakfast as $item)


                                        <?php

                            
                                        $total_rate=DB::table('rates')->where('product_id',$item->id)
                                        ->sum('star_value');


                                        $total_voter=DB::table('rates')->where('product_id',$item->id)
                                        ->count();

                                        if($total_voter>0)
                                        {

                                            $per_rate=$total_rate/$total_voter;

                                        }
                                        else
                                        {

                                            $per_rate=0;


                                        }

                                        $per_rate=number_format($per_rate, 1);


                                        $whole = floor($per_rate);      // 1
                                        $fraction = $per_rate - $whole

                                        ?>

                                        @if($item->id %2 !=0)
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/'.$item->image)}}" alt="">
                                                            <h4>{{ $item->name }}</h4>
                                                            <p>{{  $item->description }}</p>
                                                            <div class="price">
                                                                <h6>৳{{  $item->price }}</h6>
                                                            </div>
                                                            <span class="product_rating">
                                                        @for($i=1;$i<=$whole;$i++)

                                                            <i class="fa fa-star "></i>

                                                            @endfor

                                                            @if($fraction!=0)

                                                            <i class="fa fa-star-half"></i>

                                                            @endif
                                                                
                                                                
                                                            <span class="rating_avg">({{  $per_rate}})</span>
                                    </span>
                            <br>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @endforeach
                                        
                                      
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                    @foreach($lunch as $item)


                                    <?php

                            
                                        $total_rate=DB::table('rates')->where('product_id',$item->id)
                                        ->sum('star_value');


                                        $total_voter=DB::table('rates')->where('product_id',$item->id)
                                        ->count();

                                        if($total_voter>0)
                                        {

                                            $per_rate=$total_rate/$total_voter;

                                        }
                                        else
                                        {

                                            $per_rate=0;


                                        }

                                        $per_rate=number_format($per_rate, 1);


                                        $whole = floor($per_rate);      // 1
                                        $fraction = $per_rate - $whole

                                        ?>

                                        @if($item->id %2 ==0)
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/'.$item->image)}}" alt="">
                                                            <h4>{{ $item->name }}</h4>
                                                            <p>{{  $item->description }}</p>
                                                            <div class="price">
                                                                <h6>৳{{  $item->price }}</h6>
                                                            </div>
                                                            <span class="product_rating">
                                                        @for($i=1;$i<=$whole;$i++)

                                                            <i class="fa fa-star "></i>

                                                            @endfor

                                                            @if($fraction!=0)

                                                            <i class="fa fa-star-half"></i>

                                                            @endif
                                                                
                                                                
                                                            <span class="rating_avg">({{  $per_rate}})</span>
                                    </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>      
                                            </div>
                                        </div>
                                        @endif

                                    @endforeach
                                    @foreach($lunch as $item)

                                    <?php

                            
                                        $total_rate=DB::table('rates')->where('product_id',$item->id)
                                        ->sum('star_value');


                                        $total_voter=DB::table('rates')->where('product_id',$item->id)
                                        ->count();

                                        if($total_voter>0)
                                        {

                                            $per_rate=$total_rate/$total_voter;

                                        }
                                        else
                                        {

                                            $per_rate=0;


                                        }

                                        $per_rate=number_format($per_rate, 1);


                                        $whole = floor($per_rate);      // 1
                                        $fraction = $per_rate - $whole

                                        ?>

                                        @if($item->id %2 !=0)
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/'.$item->image)}}" alt="">
                                                            <h4>{{ $item->name }}</h4>
                                                            <p>{{  $item->description }}</p>
                                                            <div class="price">
                                                                <h6>৳{{  $item->price }}</h6>
                                                            </div>
                                                            <span class="product_rating">
                                                        @for($i=1;$i<=$whole;$i++)

                                                            <i class="fa fa-star "></i>

                                                            @endfor

                                                            @if($fraction!=0)

                                                            <i class="fa fa-star-half"></i>

                                                            @endif
                                                                
                                                                
                                                            <span class="rating_avg">({{  $per_rate}})</span>
                                    </span>
                            <br>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                    @endforeach
                                      
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                    @foreach($dinner as $item)


                                    <?php

                            
                                        $total_rate=DB::table('rates')->where('product_id',$item->id)
                                        ->sum('star_value');


                                        $total_voter=DB::table('rates')->where('product_id',$item->id)
                                        ->count();

                                        if($total_voter>0)
                                        {

                                            $per_rate=$total_rate/$total_voter;

                                        }
                                        else
                                        {

                                            $per_rate=0;


                                        }

                                        $per_rate=number_format($per_rate, 1);


                                        $whole = floor($per_rate);      // 1
                                        $fraction = $per_rate - $whole

                                        ?>

                                        @if($item->id %2 ==0)
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/'.$item->image)}}" alt="">
                                                            <h4>{{ $item->name }}</h4>
                                                            <p>{{  $item->description }}</p>
                                                            <div class="price">
                                                                <h6>৳{{  $item->price }}</h6>
                                                            </div>
                                                            <span class="product_rating">
                                                        @for($i=1;$i<=$whole;$i++)

                                                            <i class="fa fa-star "></i>

                                                            @endfor

                                                            @if($fraction!=0)

                                                            <i class="fa fa-star-half"></i>

                                                            @endif
                                                                
                                                                
                                                            <span class="rating_avg">({{  $per_rate}})</span>
                                    </span>
                            <br>
                                  
                                                        </div>
                                                    </div>
                                                
                                                </div>      
                                            </div>
                                        </div>
                                        @endif

                                        @endforeach
                                        @foreach($dinner as $item)


                                        <?php

                            
                                        $total_rate=DB::table('rates')->where('product_id',$item->id)
                                        ->sum('star_value');


                                        $total_voter=DB::table('rates')->where('product_id',$item->id)
                                        ->count();

                                        if($total_voter>0)
                                        {

                                            $per_rate=$total_rate/$total_voter;

                                        }
                                        else
                                        {

                                            $per_rate=0;


                                        }

                                        $per_rate=number_format($per_rate, 1);


                                        $whole = floor($per_rate);      // 1
                                        $fraction = $per_rate - $whole

                                        ?>

                                        @if($item->id %2 !=0)
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/'.$item->image)}}" alt="">
                                                            <h4>{{ $item->name }}</h4>
                                                            <p>{{  $item->description }}</p>
                                                            <div class="price">
                                                                <h6>৳{{  $item->price }}</h6>
                                                            </div>
                                                            <span class="product_rating">
                                                        @for($i=1;$i<=$whole;$i++)

                                                            <i class="fa fa-star "></i>

                                                            @endfor

                                                            @if($fraction!=0)

                                                            <i class="fa fa-star-half"></i>

                                                            @endif
                                                                
                                                                
                                                            <span class="rating_avg">({{  $per_rate}})</span>
                                    </span>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                    @endforeach
                                     
                                    </div>
                                </article>   
                            </section>
                            <br>
                            <a href="/menu"><input style="color:#fff; background-color:#FB5849; font-size:20px;"
                            class="btn" type="submit" value="Browse All"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
<!-- ***** Menu Area Starts ***** -->
<section class="section"  id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading" >
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel" >
                  
                    @foreach($menu as $product)
                   
                    <div class="item">

                    <?php
                        $img=$product->image;
                    ?>
                        <div class='card' style="background-image: url({{asset('assets/images/'.$img)}})"> 

                            <div class="price"><h6>৳{{ $product->price }}</h6>
                            @if($product->available!="Stock")
                            <h4 style="">Out Of Stock</h4> 

                            @endif
                        
                        </div>
                        <?php

                            
                            $total_rate=DB::table('rates')->where('product_id',$product->id)
                            ->sum('star_value');


                            $total_voter=DB::table('rates')->where('product_id',$product->id)
                            ->count();

                            if($total_voter>0)
                            {

                                $per_rate=$total_rate/$total_voter;

                            }
                            else
                            {

                                $per_rate=0;


                            }

                            $per_rate=number_format($per_rate, 1);


                            $whole = floor($per_rate);      // 1
                            $fraction = $per_rate - $whole

                        ?>
                            <div class='info'>
                              <h1 class='title'>{{ $product->name }}</h1>
                              <p class='description'>{{ $product->description  }}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section" >
                                  <span class="product_rating">
                                  @for($i=1;$i<=$whole;$i++)

                                    <i class="fa fa-star "></i>

                                    @endfor

                                    @if($fraction!=0)

                                    <i class="fa fa-star-half"></i>

                                    @endif
                                        
                                        
                                    <span class="rating_avg">({{  $per_rate}})</span>
            </span>
      <br>
                                   <a href="/rate/{{ $product->id }}" style="color:blue;">Rate this</a>
                                  <p>Quantity: </p>
                                @if($product->available=="Stock")
                                  <form method="post" action="{{route('cart.store',$product->id)}}">
                                     @csrf
                                  <input type="number" name="number" style="width:50px;" id="myNumber" value="1">
                                    <input type="submit" class="btn btn-success" value="Add Chart">
                                  </form>
                                @endif

                                @if($product->available!="Stock")
                                  <form method="post" action="{{route('cart.store',$product->id)}}">
                                     @csrf
                                  <input type="number" name="number" style="width:50px;" id="myNumber" value="1">
                                    <input type="submit" class="btn btn-success" disabled value="Add Chart">
                                  </form>
                                @endif
                                </div>
                              </div>
                              
                            </div>
                        </div>
                    </div>
                   
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
          
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
           
            <div class="row">
                @foreach($chefs as $chef)
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="{{ $chef->facebook_link  }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $chef->twitter_link  }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ $chef->instragram_link  }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="{{ asset('assets/images/'.$chef->image)}}" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>{{ $chef->name  }}</h4>
                            <span>{{ $chef->job_title  }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p>Members of Midway Dine are always active to response your call.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">01919163957</a>
									<br><a href="#"></a>
									</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="tanim2002.nub@gmail.com">tanim.cse2002@gmail.com</a><br>
									<a href="tanim.nub@gmail.com">tanim.csenub@gmail.com</a><br>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="/reserve/confirm" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Table Reservation</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="number-guests" name="no_guest" id="number-guests">
                                    <option value="number-guests">Number Of Guests</option>
                                    <option name="1" id="1">1</option>
                                    <option name="2" id="2">2</option>
                                    <option name="3" id="3">3</option>
                                    <option name="4" id="4">4</option>
                                    <option name="5" id="5">5</option>
                                    <option name="6" id="6">6</option>
                                    <option name="7" id="7">7</option>
                                    <option name="8" id="8">8</option>
                                    <option name="9" id="9">9</option>
                                    <option name="10" id="10">10</option>
                                    <option name="11" id="11">11</option>
                                    <option name="12" id="12">12</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="time" name="time" id="time">
                                    <option value="time">Time</option>
                                    <option name="Breakfast" id="Breakfast">Breakfast</option>
                                    <option name="Lunch" id="Lunch">Lunch</option>
                                    <option name="Dinner" id="Dinner">Dinner</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

   
    
   @endsection