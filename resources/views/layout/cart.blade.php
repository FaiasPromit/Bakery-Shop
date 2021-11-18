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

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        
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
        <div class="cart-section container">
        <div>
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Cart::count() > 0)
            <h2>{{Cart::count()}} item(s) in Shopping Cart</h2>


            <div class="cart-table">
            @foreach(Cart::content() as $item)
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href=" {{route('layout.product',$item->model->slug)}}"><img src="{{asset('image/products/'.$item->model->slug.'.jpg') }}" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href=" {{route('layout.product',$item->model->slug)}}">  {{$item->model->name}}</a></div>
                            <div class="cart-table-description">{{$item->model->details}}</div>
                        </div>
                    </div>
            
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <button type="submit" class="Button">Remove</button>
                            </form>


                        </div>
                        <div>
                        <!-- data-productquantity="10" -->
                            <select class="quantity" data-id="{{ $item->rowId }}" >
                                                                    <option {{$item->qty ==1 ? 'selected':''}}>1</option>
                                                                    <option {{$item->qty ==2 ? 'selected':''}}>2</option>
                                                                    <option {{$item->qty ==3 ? 'selected':''}}>3</option>
                                                                    <option {{$item->qty ==4 ? 'selected':''}}>4</option>
                                                                    <option {{$item->qty ==5 ? 'selected':''}}>5</option>
                            </select>
                        </div>
                        <div>{{$item->subtotal}} Taka</div>
                    </div>
                </div> <!-- end cart-table-row -->
            @endforeach
                
            </div> <!-- end cart-table -->

            
                <a href="#" class="have-code">Have a Code?</a>

                <div class="have-code-container">
                    <form action="https://laravelecommerceexample.ca/coupon" method="POST">
                        <input type="hidden" name="_token" value="S35jzNgDcuxmS0S4zU3WPBwuxbQ4Si6BMWesjRhK">
                        <input type="text" name="coupon_code" id="coupon_code">
                        <button type="submit" class="button button-plain">Apply</button>
                    </form>
                </div> <!-- end have-code-container -->
            
            <div class="cart-totals">
                <div class="cart-totals-left">
                    Shipping will be charged 40 Taka inside Dhaka and 110 Taka Outside Dhaka.
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        Tax (10%)<br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        {{Cart::subtotal()}} Taka<br>
                        {{Cart::tax()}} Taka<br>
                        <span class="cart-totals-total">{{Cart::total()}} Taka</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="{{route('layout.shop')}}" class="button">Continue Shopping</a>
                <a href="{{route('checkout')}}" class="button">Proceed to Checkout</a>
            </div>

            @else
                <h3>No items in Cart</h3>
                <div class="cart-buttons">
                    <a href="{{route('layout.shop')}}" class="button">Continue Shopping</a>
                </div>
                
            @endif
            <h3></h3>

            
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

        <script src="{{asset('js/app.js')}}"></script>
        <script>
            (function(){
                const classname = document.querySelectorAll('.quantity')
                
                Array.from(classname).forEach(function(element) {
                    element.addEventListener('change',function() {
                        const id = element.getAttribute('data-id')
                        
                        axios.patch(`/cart/${id}`, {
                            quantity: this.value,
                        })
                        .then(function (response) {
                            window.location.href ='{{route('layout.cart')}}'
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                        // alert('changed');
                    })
                })
            })();
        </script>
        <footer>
            <div class="footer-content container">
                <div class="made-with">Made <i>By Faias Satter</i></div>
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