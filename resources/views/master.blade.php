<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <meta name="description" content="Bootstrap template for you store - E-Commerce Bootstrap Template">
    <meta name="keywords" content="unistore, e-commerce bootstrap template, premium e-commerce bootstrap template, premium bootstrap template, bootstrap template, e-commerce, bootstrap template, sunrise digital">
    <meta name="author" content="Sunrise Digital">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/carousel-recommendation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/ionicons-2.0.1/css/ionicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    @if(request()->is('catalog'))
    <div class="cart" data-toggle="inactive">
      <div class="label">
        <i class="ion-bag"></i> 7
      </div>

      <div class="overlay"></div>

      <div class="window">
        <div class="title">
          <button type="button" class="close"><i class="ion-android-close"></i></button>
          <h1 class="h3 info">Shopping cart</h1>
        </div>

        <div class="content">

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="../assets/img/products/chrome-book-11.jpg" alt="HP Chromebook 11"/>
              </a>
            </div>
            <div class="media-body">
              <h2 class="h4 media-heading">HP Chromebook 11</h2>
              <label>Laptops</label>
              <p class="price">$199.99</p>
            </div>
            <div class="controls">
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="minus"><i class="ion-minus-round"></i></button>
                </span>
                <input type="text" class="form-control input-sm" placeholder="Qty" value="1" readonly="">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="plus"><i class="ion-plus-round"></i></button>
                </span>
              </div><!-- /input-group -->

              <a href="#remove"> <i class="ion-trash-b"></i> Remove </a>
            </div>
          </div>

        </div>

        <div class="checkout container-fluid">
          <div class="row">
            <div class="col-xs-3 col-sm-2">
              <div>
                <p>Subtotal:</p>
                <h3 class="h4">Total:</h3>
              </div>
            </div>
            <div class="col-xs-3 col-sm-4">
              <div class="total">
                <p>$1 200</p>
                <h3 class="h4">$1 200</h3>
              </div>
            </div>

            <div class="col-xs-6 col-sm-6">
              <a class="btn btn-primary" href="../checkout/"> Checkout order </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"> <i class="ion-cube"></i> Unistore</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="{{ (request()->is('/')?'active':'') }}"><a href="{{ url('/') }}">Home</a></li>
              <li class="{{ (request()->is('catalog')?'active':'') }}"><a href="{{ route('catalog.page') }}">Catalog</a></li>
              <li class="{{ (request()->is('our-blog')?'active':'') }}"><a href="{{ route('blog.page') }}">Blog</a></li>
              <li class="{{ (request()->is('gallery')?'active':'') }}"><a href="{{ route('gallery.page') }}">Gallery</a></li>
              <li class="{{ (request()->is('contact-us')?'active':'') }}"><a href="{{ route('contact.page') }}">Contacts</a></li>
              <li class="dropdown">
                <a href="./catalog/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('cart.page') }}">Cart</a></li>
                  <li><a href="{{ route('checkout.page') }}">Checkout</a></li>
                  <li><a href="{{ route('faq.page') }}">FAQ</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="{{ (request()->is('customer/login') ? 'active':'') }}"><a href="{{ route('login.page') }}"> <i class="ion-android-person"></i> Login </a></li>
              <li class="{{ (request()->is('customer/signup') ? 'active':'') }}"><a href="{{ route('signup.page') }}"> Sign Up</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

@yield('content')
    <footer>
        <div class="about">
          <div class="container">
            <div class="row">
              <hr class="offset-md">
  
              <div class="col-xs-6 col-sm-3">
                <div class="item">
                  <i class="ion-ios-telephone-outline"></i>
                  <h1>24/7 free <br> <span>support</span></h1>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3">
                <div class="item">
                  <i class="ion-ios-star-outline"></i>
                  <h1>Low price <br> <span>guarantee</span></h1>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3">
                <div class="item">
                  <i class="ion-ios-gear-outline"></i>
                  <h1> Manufacturer’s <br> <span>warranty</span></h1>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3">
                <div class="item">
                  <i class="ion-ios-loop"></i>
                  <h1> Full refund <br> <span>guarantee</span> </h1>
                </div>
              </div>
  
              <hr class="offset-md">
            </div>
          </div>
        </div>
  
        <div class="subscribe">
          <div class="container align-center">
              <hr class="offset-md">
  
              <h1 class="h3 upp">Join our newsletter</h1>
              <p>Get more information and receive special discounts for our products.</p>
              <hr class="offset-sm">
  
              <form action="index.php" method="post">
                <div class="input-group">
                  <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary"> Subscribe <i class="ion-android-send"></i> </button>
                  </span>
                </div><!-- /input-group -->
              </form>
              <hr class="offset-lg">
              <hr class="offset-md">
  
              <div class="social">
                <a href="#"><i class="ion-social-facebook"></i></a>
                <a href="#"><i class="ion-social-twitter"></i></a>
                <a href="#"><i class="ion-social-googleplus-outline"></i></a>
                <a href="#"><i class="ion-social-instagram-outline"></i></a>
                <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                <a href="#"><i class="ion-social-youtube-outline"></i></a>
              </div>
  
  
              <hr class="offset-md">
              <hr class="offset-md">
          </div>
        </div>
  
  
        <div class="container">
          <hr class="offset-md">
  
          <div class="row menu">
            <div class="col-sm-3 col-md-2">
              <h1 class="h4">Information <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>
  
              <div class="list-group">
                <a href="#" class="list-group-item">About</a>
                <a href="#" class="list-group-item">Terms</a>
                <a href="#" class="list-group-item">How to order</a>
                <a href="#" class="list-group-item">Delivery</a>
              </div>
            </div>
            <div class="col-sm-3 col-md-2">
              <h1 class="h4">Products <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>
  
              <div class="list-group">
                <a href="#" class="list-group-item">Laptops</a>
                <a href="#" class="list-group-item">Tablets</a>
                <a href="#" class="list-group-item">Servers</a>
              </div>
            </div>
            <div class="col-sm-3 col-md-2">
              <h1 class="h4">Support <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>
  
              <div class="list-group">
                <a href="#" class="list-group-item">Returns</a>
                <a href="#" class="list-group-item">FAQ</a>
                <a href="#" class="list-group-item">Contacts</a>
              </div>
            </div>
            <div class="col-sm-3 col-md-2">
              <h1 class="h4">Location</h1>
  
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Language
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#English"> <img src="assets/img/flags/gb.png" alt="Eng"/> English</a></li>
                  <li><a href="#Spanish"> <img src="assets/img/flags/es.png" alt="Spa"/> Spanish</a></li>
                  <li><a href="#Deutch"> <img src="assets/img/flags/de.png" alt="De"/> Deutch</a></li>
                  <li><a href="#French"> <img src="assets/img/flags/fr.png" alt="Fr"/> French</a></li>
                </ul>
              </div>
              <hr class="offset-xs">
  
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Currency
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><a href="#Euro"><i class="ion-social-euro"></i> Euro</a></li>
                  <li><a href="#Dollar"><i class="ion-social-usd"></i> Dollar</a></li>
                  <li><a href="#Yen"><i class="ion-social-yen"></i> Yen</a></li>
                  <li><a href="#Bitcoin"><i class="ion-social-bitcoin"></i> Bitcoin</a></li>
                </ul>
              </div>
  
            </div>
            <div class="col-sm-3 col-md-3 col-md-offset-1 align-right hidden-sm hidden-xs">
              <h1 class="h4">Unistore, Inc.</h1>
  
                <address>
                  1305 Market Street, Suite 800<br>
                  San Francisco, CA 94102<br>
                  <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
  
                <address>
                  <strong>Support</strong><br>
                  <a href="mailto:#">sup@example.com</a>
                </address>
  
            </div>
          </div>
        </div>
  
        <hr>
  
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-9 payments">
              <p>Pay your order in the most convenient way</p>
  
              <div class="payment-icons">
                <img src="assets/img/payments/paypal.svg" alt="paypal">
                <img src="assets/img/payments/visa.svg" alt="visa">
                <img src="assets/img/payments/master-card.svg" alt="mc">
                <img src="assets/img/payments/discover.svg" alt="discover">
                <img src="assets/img/payments/american-express.svg" alt="ae">
              </div>
              <br>
  
            </div>
            <div class="col-sm-4 col-md-3 align-right align-center-xs">
              <hr class="offset-sm hidden-sm">
              <hr class="offset-sm">
              <p>Unistore Pro © 2016 <br> Designed By <a href="http://sunrise.ru.com/" target="_blank">Sunrise Digital</a></p>
              <hr class="offset-lg visible-xs">
            </div>
          </div>
        </div>
      </footer>
  
      <!-- Modal -->
      <div class="modal fade" id="Modal-ForgotPassword" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6">
                    <h4 class="modal-title">Forgot Your Password?</h4>
                    <br>
  
                    <form class="join" action="index.php" method="post">
                      <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                      <br>
  
                      <button type="submit" class="btn btn-primary btn-sm">Continue</button>
                      <a href="#Sign-In" data-action="Sign-In">Back ></a>
                    </form>
                  </div>
                  <div class="col-sm-6">
                    <br><br>
                    <p>
                      Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
  
      <div class="modal fade" id="Modal-Gallery" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
              <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
  
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="{{ asset('assets/js/jquery-latest.min.js') }}"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/core.js') }}"></script>
      <script src="{{ asset('assets/js/carousel.js') }}"></script>
      <script src="{{ asset('assets/js/carousel-recommendation.js') }}"></script>
      @yield('scripts')
   
    </body>
  </html>