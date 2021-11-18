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
                    <li><a href=""style="color:white;">About</a></li>
                    <li><a href="/cart"style="color:white;">Cart <span class="cart-count">
                    @if (Cart::instance('default')->count() >0)
                        <span> ({{Cart::instance('default')->count()}})</span>
                    @endif
                    </a></li>
                    @guest
                    <li><a href="{{route('register')}}" style="color:white;">Sign Up</a></li>
                    <li><a href="{{route('login')}}" style="color:white;">Login</a></li>
                    @else
                    <li>
                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                    <form action="{{route('logout')}}" id="logout-form" method="POST" style="display:none;">
                        {{csrf_field()}}
                    </form>
                    @endguest
                    
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
                    <img src="image/main image.jpg" style="width:1050px; border-radius:10px;" alt="hero image">
                </div>
            </div>
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Bakery Shop</h1>
                <p class="section-description"style="margin:50px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                
            
            <div class="products text-container">
                @foreach($products as $product)
                <div class="product">
                    <a href="{{route('layout.product',$product->slug)}}"><img src="{{asset('image/products/'.$product->slug.'.jpg')}}" alt=""></a>
                    <a href="{{route('layout.product',$product->slug)}}"><span class="product-name">{{$product->name}}</span></a>
                    <div class="product-price">{{$product->price}}</div>
                </div>

                @endforeach
            </div>
            <div class="text-center button-container">
                <a href="/shop" class="button">View more products</a>
            </div>
        
        </div>
        </div>
        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">About our shop</h1>
                <p class="section-description" >Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
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



        