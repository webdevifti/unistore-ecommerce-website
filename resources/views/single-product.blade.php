@extends('master')
@section('cartpop')
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
@endsection
@section('title', 'Single Poroduct')
@section('content')
    <div class="product">
    	<div class="container">
        <div class="row">
          <div class="col-sm-7 col-md-7">
            <div class="carousel product" data-count="5" data-current="1">
              <!-- <button class="btn btn-control"></button> -->

              <div class="items">
                @foreach($product_images as $img)
                <div class="item active" data-marker="1">
                  <img src="../assets/img/product/1.jpg" alt="ChromeBook 11"/>
                </div>
                @endforeach
                <div class="item" data-marker="6">
                  <div class="tiles">
                    <a href="#video" data-gallery="#video" data-source="youtube" data-id="hED0N4CFoqs" data-title="An upscale new Chromebook from HP" data-description="The new HP Chromebook 13 runs a Core M CPU inside a slim aluminum body.">
                      <img src="../assets/img/product/video.jpg" alt="ChromeBook 11">

                      <div class="overlay"></div>
                      <div class="content">
                        <div class="content-outside">
                          <div class="content-inside">
                            <i class="ion-ios-play"></i>
                            <h1>Watch video review</h1>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

              <ul class="markers">
                @foreach($product_images as $img2)
                <li data-marker="1" class="active"><img src="../assets/img/product/1.jpg" alt="Background"/></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-sm-5 col-md-5">
            <img src="../assets/img/brands/hp.png" alt="HP" class="brand hidden-xs" />

            <h1>{{ $product->product_name }}</h1>

            <p> &middot; Chrome OS™</p>
            <p> &middot; Intel® Celeron® processor</p>
            <p> &middot; Intel HD Graphics</p>

            <p class="price">$209.99</p>
            <p class="price through">$249.99</p>
            <br><br>

            <button class="btn btn-primary btn-rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
    		<br><br><br>


	    	<div class="row">
	    		<div class="col-sm-7">
	    			<h1>{{ $product->product_name }}</h1>
		    		 <br>

		    		{{ $product->description }}
		    		 <br>

             <h2>Product specifications</h2>
             <br>

              <div class="row specification">
                <div class="col-sm-6"> <label>Operating system</label> </div>
                <div class="col-sm-6"> <p>Chrome OS™</p> </div>
              </div>
              
              <div class="row specification">
                <div class="col-sm-6"> <label>Processor</label> </div>
                <div class="col-sm-6"> <p>Intel® Celeron® N2840 with Intel® HD Graphics (2.16 GHz, up to 2.58 GHz, 1 MB cache, 2 cores)</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-6"> <label>Processor technology</label> </div>
                <div class="col-sm-6"> <p>Intel Turbo Boost Technology</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-6"> <label>Graphics</label> </div>
                <div class="col-sm-6"> <p>Intel HD Graphics</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-6"> <label>Memory</label> </div>
                <div class="col-sm-6"> <p>2 GB DDR3L SDRAM (onboard)</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-6"> <label>Hard drive</label> </div>
                <div class="col-sm-6"> <p>16 GB eMMC</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-6"> <label>Wireless</label> </div>
                <div class="col-sm-6"> <p>802.11ac (2x2) and Bluetooth® 4.0 combo</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-6"> <label>Power supply</label> </div>
                <div class="col-sm-6"> <p>45 W AC power adapter</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-6"> <label>Battery</label> </div>
                <div class="col-sm-6"> <p>3-cell, 36 Wh Li-ion</p> </div>
              </div>
          </div>
          {{-- <div class="col-sm-5">
            <div class="comments">
              <h2 class="h3">What do you think? (#3)</h2>
              <br>


              <div class="wrapper">
                <div class="content">
                  <h3>Anne Hathaway</h3>
                  <label>2 years ago</label>
                  <p>
                    Apple Music brings iTunes music streaming to the UK. But is it worth paying for? In our Apple Music review, we examine the service's features, UK pricing, audio quality and music library
                  </p>


                  <h3>Chris Hemsworth</h3>
                  <label>Today</label>
                  <p>
                    Samsung's Galaxy S7 smartphone is getting serious hype. Here's what it does better than Apple's iPhone 6s.
                  </p>


                  <h3>Anne Hathaway</h3>
                  <label>2 years ago</label>
                  <p>
                    Apple Music brings iTunes music streaming to the UK. But is it worth paying for? In our Apple Music review, we examine the service's features, UK pricing, audio quality and music library
                  </p>
                </div>
              </div>
              <br>

              <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#Modal-Comment"> <i class="ion-chatbox-working"></i> Add comment </button>
            </div>
            <br><br>

            <div class="talk">
              <h2 class="h3">Do you have any questions?</h2>
              <p>Online chat with our manager</p>

              <button class="btn btn-default btn-sm"> <i class="ion-android-contact"></i> Lat's talk </button>
            </div>
	    		</div> --}}
	    	</div>
    	</div>
    </div>
    <br><br>

    <section class="products">
        <div class="container">
            <h1 class="h3">Recommendation for you</h1>
            
            <div class="row">
              <div class="col-sm-6 col-md-3 product">
                <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                <a href="./"><img src="../assets/img/products/chrome-book-11.jpg" alt="HP Chromebook 11"/></a>

                <div class="content">
                  <h1 class="h4">HP Chromebook 11</h1>
                  <p class="price">$199.99</p>
                  <label>Laptops</label>

                  <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                  <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> Add to cart</button>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 product">
                <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                <a href="./"><img src="../assets/img/products/chrome-book-14.jpg" alt="HP Chromebook 14"/></a>

                <div class="content">
                  <h1 class="h4">HP Chromebook 14</h1>
                  <p class="sale">$209.99</p>
                  <p class="price through">$249.99</p>
                  <label>Laptops</label>

                  <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                  <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> Add to cart</button>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 product">
                <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                <a href="./"><img src="../assets/img/products/chrome-book-asus.jpg" alt="HP Chromebook 14"/></a>

                <div class="content">
                  <h1 class="h4">Asus Chromebook</h1>
                  <p class="price">$299.99</p>
                  <label>Laptops</label>

                  <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                  <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> Add to cart</button>
                </div>
              </div>


              <div class="col-sm-6 col-md-3 product">
                <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                <a href="./"><img src="../assets/img/products/ipad-air.jpg" alt="iPad Air"/></a>

                <div class="content">
                  <h1 class="h4">iPad Air</h1>
                  <p class="price">$449.99</p>
                  <label>Tablets</label>

                  <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                  <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> Add to cart</button>
                </div>
              </div>
            </div>
        </div>
    </section>
    <br><br>
@endsection
@section('scripts')
    <script src="../assets/js/catalog.js"></script>
@endsection