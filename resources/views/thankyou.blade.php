<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bakery Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="/css/main.css">
        
    </head>
    <body>
        
        <header>
            <div class="top-nav container" style="display: flex;justify-content: space-between;padding: 40px 0;">
                <div class="logo" style="font-weight:bold;font-size:20px;"><a href="/" style="color:white;">Home</a></div>
                <ul style="display:flex;text-transparent:uppercase;justify-content: space-between;width: 40%;">
                    <li><a href="/shop"style="color:white;">Shop</a></li>
                    <li><a href=""\style="color:white;">About</a></li>
                    <li><a href="/cart"style="color:white;">Cart <span class="cart-count">
                        @if (Cart::instance('default')->count() >0)
                        <span> ({{Cart::instance('default')->count()}})</span>
                        @endif
                    </a>
                    </li>
                </ul>
            </div>

            <div class="hero container">
                <div class="hero-copy">
                    <h1 style="font-size:52px;margin-top:50px;">Bakery Shop</h1>
                    <p style="margin:40px 0 60px;">An online bakery shop</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Button 1</a>
                        <a href="#" class="button button-white">Button 2</a>
                    </div>
                </div>
                <div class="hero-image" style="padding-left:60px;">
                    <img src="image/main image.jpg" style="width:1050px;" alt="hero image">
                </div>
            </div>
        </header>
        <div class="thank-you-section">
            <br>
            <br>
            <h1>Thank you for <br> Your Order!</h1>
            <p>A confirmation email was sent</p>
            <br>
            <div>
                <a href="{{ url('/') }}" class="button">Home Page</a>
                <br>
                <br>
            </div>
        </div>
        <div class="might-like-section">
            <div class="container">
                <h2>You Might Also Like..</h2>
                <div class="might-like-grid">
                    @foreach($mightAlsoLike as $product)
                        <a href="{{route('layout.product',$product->slug)}}" class="might-like-product">
                            <img src="{{asset('image/products/'.$product->slug.'.jpg')}}" alt="">
                            <div class="might-like-product-name">{{$product->name}}</div>
                            <div class="might-like-product-price">{{$product->price}}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <footer>
            <div class="footer-content container">
                <div class="made-with">Made <i class="fa fa-heart">By Faias Satter</i></div>
                <ul>
                    <li>Follow Me :</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>