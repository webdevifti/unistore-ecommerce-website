@extends('master')
@section('title', 'Welcome to Unistore')
@section('content')


<header>
  <div class="carousel" data-count="3" data-current="2">
    <!-- <button class="btn btn-control"></button> -->

    <div class="items">
      <div class="item" data-marker="1">
        <img src="assets/img/carousel/bckg.jpg" alt="Background" class="background"/>

        <div class="content">
          <div class="outside-content">
            <div class="inside-content">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 align-center">
                    <h1>New amazing laptops</h1>
                    <p>Provide lightweight and powerull</p>
                    <a href="./catalog/">More laptops ></a>
                    <br><br>
                  </div>
                  <div class="col-sm-6 col-sm-offset-3 align-center">
                    <img src="assets/img/carousel/newlaptops.jpg" alt="Laptops"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item active" data-marker="2">
        <img src="assets/img/carousel/bckg.jpg" alt="Background" class="background"/>

        <div class="content">
          <div class="outside-content">
            <div class="inside-content">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 align-center">
                    <img src="assets/img/carousel/surfaces.jpg" alt="Surface Pro"/>
                  </div>
                  <div class="col-sm-12 align-center">
                    <h1>8 Windows Hybrid Laptops</h1>
                    <p>The laptop comes with an Intel i5 chip and 8GB of RAM.</p>
                    <a href="./catalog/">View surfaces ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item" data-marker="3">
        <img src="assets/img/carousel/bckg.jpg" alt="Background" class="background"/>

        <div class="content">
          <div class="outside-content">
            <div class="inside-content">
              <div class="container">
                <div class="row">
                  <div class="col-sm-5 col-sm-offset-1 align-center">
                    <img src="assets/img/carousel/ipadair2.jpg" alt="iPad Air 2" class="hidden-xs hidden-sm"/>
                    <img src="assets/img/carousel/ipadair2m.jpg" alt="iPad Air 2" class="hidden-md hidden-lg"/>
                  </div>
                  <div class="col-sm-4 align-left">
                    <br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm">
                    <br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm">
                    <h1>Luxury devices</h1>
                    <br>
                    
                    <p>
                      Luxury watches, business tablets and 3D touch: How Apple plans to stay ahead in mobile.
                      When it comes to the brand’s latest iPhones, the biggest excitement isn’t focused on the addition of a rose gold coloured device but the new 3D touch sensors.
                    </p>
                    <a href="./blog/item-photo.html">View article ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <ul class="markers">
      <li data-marker="1"><img src="assets/img/carousel/newlaptops.jpg" alt="Background"/></li>
      <li data-marker="2" class="active"><img src="assets/img/carousel/surfaces.jpg" alt="Background"/></li>
      <li data-marker="3"><img src="assets/img/carousel/ipadair2.jpg" alt="Background"/></li>
    </ul>
  </div>
</header>
<br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 align-center">
          <a href="../blog/">
            <img src="../assets/img/tiles/blog.jpg" alt="Blog" class="image"/>
          </a>
          <br><br>

          <a href="../blog/">Blog headlines</a>
        </div>
        <div class="col-sm-3 align-center">
          <a href="#video" data-gallery="#video" data-source="vimeo" data-id="110691368" data-id="110691368" data-title="Apple iPad Air" data-description="So capable, you won’t want to put it down. So thin and light, you won’t have to.">
            <img src="../assets/img/tiles/video-apple.jpg" alt="New devices" class="image"/>
          </a>
          <br><br>

          <a href="#video" data-gallery="#video" data-source="vimeo" data-id="110691368" data-title="Apple iPad Air" data-description="So capable, you won’t want to put it down. So thin and light, you won’t have to.">New apple diveces</a>
        </div>
        <div class="col-sm-3 align-center">
          <a href="#video" data-gallery="#video" data-source="youtube" data-id="6g-ZIm0wge4" data-title="Best New Dell Laptops" data-description="Best of dell's laptops that you can consider buying in 2016. 4 Laptops are featured in the video and all of them has equal importance and there is no order that #1 is better than #2">
            <img src="../assets/img/tiles/video-dell.jpg" alt="Del XPS" class="image"/>
          </a>
          <br><br>

          <a href="#video" data-gallery="#video" data-source="youtube" data-id="6g-ZIm0wge4" data-title="Best New Dell Laptops" data-description="Best of dell's laptops that you can consider buying in 2016. 4 Laptops are featured in the video and all of them has equal importance and there is no order that #1 is better than #2">Brend new DELL XPS</a>
        </div>
        <div class="col-sm-3 align-center">
          <a href="../blog/">
            <img src="../assets/img/tiles/gallery.jpg" alt="Gallery" class="image"/>
          </a>
          <br><br>
          
          <a href="../blog/">Products gallery</a>
        </div>
      </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-lg">

    <div class="container">
      <h2>NEW PRODUCTS</h2>
      <hr class="offset-md">

      <div class="row products">
        <div class="col-sm-6 col-md-4 product">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="../assets/img/products/surface-pro.jpg" alt="Surface Pro"/></a>

          <div class="content">
            <h1 class="h4">Surface Pro</h1>
            <p class="price">$199.99</p>
            <label>Hybrid</label>

            <a href="../catalog/product.html" class="btn btn-link"> Details</a>
            <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 product">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="../assets/img/products/lenovo-yoga.jpg" alt="Lenovo Yoga"/></a>

          <div class="content">
            <h1 class="h4">Lenovo Yoga</h1>
            <p class="price">$199.99</p>
            <label>Hybrid</label>

            <a href="../catalog/product.html" class="btn btn-link"> Details</a>
            <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 product">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="../assets/img/products/asus-transformer.jpg" alt="ASUS Transformer"/></a>

          <div class="content">
            <h1 class="h4">ASUS Transformer</h1>
            <p class="price">$199.99</p>
            <label>Hybrid</label>

            <a href="../catalog/product.html" class="btn btn-link"> Details</a>
            <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 product hidden-md hidden-lg">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="../assets/img/products/mi-pad-2.jpg" alt="Mi Pad 2/"></a>

          <div class="content">
            <h1 class="h4">Mi Pad 2</h1>
            <p class="sale">$199.99</p>
            <p class="price through">$249.99</p>
            <label>Tablets</label>

            <a href="../catalog/product.html" class="btn btn-link"> Details</a>
            <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h2>RECOMMENDATION FOR YOU</h2>
      <hr class="offset-md">

      <div class="row products">
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
      </div>
    </div>


    <div class="container">
      <h2>NEW ARTICLES</h2>
      <hr class="offset-md">

      <div class="row blog">
        <div class="col-sm-6 col-md-6 item">

          <div class="body">
            <a href="../blog/item-photo.html" class="view"><i class="ion-ios-book-outline"></i></a>

            <a href="../blog/item-photo.html">
              <img src="../assets/img/blog/img1.jpg" title="Apple Devices" alt="Apple Devices">
            </a>

            <div class="caption">
              <h1 class="h3">The next generation of Multi-Touch</h1>
              <label> 07.01.2017</label>
              <hr class="offset-sm">

              <p>
                The original iPhone introduced the world to Multi-Touch, forever changing the way people experience technology. With 3D Touch, you can do things that were never possible before. It senses how deeply you press the display, letting you do all kinds of essential things more quickly and simply. And it gives you real-time feedback in the form of subtle taps from the all-new Taptic Engine.
              </p>
              <hr class="offset-sm">

              <a href="../blog/item-photo.html"> View article <i class="ion-ios-arrow-right"></i> </a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 item">
          <div class="body">
            <a href="../blog/item-video.html" class="view"><i class="ion-ios-book-outline"></i></a>
            <a href="../blog/item-video.html">
              <img src="../assets/img/blog/img2.jpg" title="Coffee" alt="Coffee">
            </a>

            <div class="caption">
              <h1 class="h3">MacBook Pro - brand new day for business.</h1>
              <label> 02.01.2017</label>
              <hr class="offset-sm">

              <p>
                Organizations everywhere are realizing the potential that Mac brings to their employees by giving them the freedom to use the tools they already know and love. Software and hardware made for each other. Because Apple designs both the software and hardware, every Mac delivers the best possible experience for employees.
              </p>
              <hr class="offset-sm">

              <a href="../blog/item-video.html"> View article <i class="ion-ios-arrow-right"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-lg">
@endsection