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
        <div class="container">
            <h1 class="checkout-heading stylish-heading">Checkout</h1>
            <div class="checkout-section">
                <div>
                    <form action="{{route('thankyou')}}" method="POST" id="payment-form">
                    {{csrf_field()}}
                        <h2>Billing Address</h2>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{auth()->user()->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="">
                        </div>
                        <div class="form-group">
                            <label for="area">Area</label>
                            <input type="text" class="form-control" id="area" name="area" value="">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="">
                        </div>
                        <input type="hidden" class="form-control" id="subtotal" name="subtotal" value="{{Cart::subtotal()}}">
                        <input type="hidden" class="form-control" id="tax" name="tax" value="{{Cart::tax()}}">
                        <input type="hidden" class="form-control" id="total" name="total" value="{{Cart::total()}}">
                        <h5>You will be charged on delivery. Make sure to keep the money with you.</h5>
                        <h5>Happy Shopping.</h5>
                        <br>
                        <button type="submit" class="button-primary full-width">Complete Order</button>
                    </form>
                </div>
                <div class="checkout-table-container">
                    <h2>Your Order</h2>
                    <div class="checkout-table">
                        @foreach(Cart::content() as $item)
                        <div class="checkout-table-row">
                            <div class="checkout-table-row-left">
                                <img src="{{asset('image/products/'.$item->model->slug.'.jpg')}}" alt="item" class="checkout-table-img" style="width:70px;">
                                <div class="checkout-item-details">
                                    <div class="checkout-table-item" >{{$item->model->name}}</div>
                                    <div class="checkout-table-description">{{$item->model->details}}</div>
                                    <div class="checkout-table-price" >{{$item->model->price}}</div>
                                </div>
                            </div>
                            <div class="checkout-table-row-right">
                                <div class="checkout-table-quantity">{{$item->qty}}</div>
                            </div> 
                        </div>
                        @endforeach
                    </div>
                    <div class="checkout-totals">
                        <div class="checkout-totals-left">
                            Subtotal <br>
                            <!-- Discout <br> -->
                             Tax<br>
                            <span class="checkout-totals total">Total</span>
                        </div>
                        <div class="checkout-totals-right">
                            {{Cart::subtotal()}} Taka <br>
                            <!-- 2 <br> -->
                            {{Cart::tax()}} Taka<br>
                            <span class="checkout-totals-total">{{Cart::total()}} Taka</span>
                        </div>
                    </div>
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

