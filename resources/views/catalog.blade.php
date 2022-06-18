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
@section('title', 'Catalog')
@section('content')   

    <hr class="offset-lg">

    <div class="container tags">
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ion-arrow-down-b"></i> Sorting by name
          </button>
          <ul class="dropdown-menu">
            <li class="active"><a href="#"> <i class="ion-arrow-down-c"></i> Name [A-Z]</a></li>
            <li><a href="#"> <i class="ion-arrow-up-c"></i> Name [Z-A]</a></li>
            <li><a href="#"> <i class="ion-arrow-down-c"></i> Price [Low-High]</a></li>
            <li><a href="#"> <i class="ion-arrow-up-c"></i> Price [High-Low]</a></li>
          </ul>
        </div>

        <p>Search by tags</p>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-default btn-xs active">
            <input type="radio" name="options" id="option1" checked> All products
          </label>
          <label class="btn btn-default btn-xs">
            <input type="radio" name="options" id="option2"> Business
          </label>
          <label class="btn btn-default btn-xs">
            <input type="radio" name="options" id="option3"> Home
          </label>
          <label class="btn btn-default btn-xs">
            <input type="radio" name="options" id="option4"> Mobility
          </label>
          <label class="btn btn-default btn-xs">
            <input type="radio" name="options" id="option5"> Powerfull
          </label>
          <label class="btn btn-default btn-xs">
            <input type="radio" name="options" id="option6"> Gaming
          </label>
        </div>
    </div>

    <div class="container">
      <div class="row">
        <!-- Filter -->
        <div class="col-sm-3 filter">
          <div class="item">
              <div class="title">
                  <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                  <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                  <h1 class="h4">Type</h1>
              </div>

              <div class="controls">
                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                    <div class="label" data-value="Laptops">Laptops</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                    <div class="label" data-value="Tablets">Tablets</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                     <div class="label" data-value="Hybrid">Hybrids</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>
              </div>
          </div>

          <br>

          <div class="item">
              <div class="title">
                  <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                  <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                  <h1 class="h4">Screen</h1>
              </div>

              <div class="controls grid">
                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                    <div class="label" data-value="7 in">7 in</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                    <div class="label" data-value="10 in">10 in</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                     <div class="label" data-value="11 in">11 in</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                    <div class="label" data-value="14 in">14 in</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                    <div class="label" data-value="15 in">15 in</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                     <div class="label" data-value="17 in">17 in</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>
              </div>
          </div>

          <br>

          <div class="item">
            <div class="title">
                <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                <a href="#clear" data-action="clear-price"> <i class="ion-ios-trash-outline"></i> Clear</a>
                <h1 class="h4">Price</h1>
            </div>

            <div class="controls">
                <br>
                <div id="slider-price"></div>
                <br>
                <p id="amount"></p>
            </div>
          </div>
          <br>

          <div class="item lite">
              <div class="title">
                  <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                  <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                  <h1 class="h4">Manufacturer</h1>
              </div>

              <div class="controls">
                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                    <div class="label" data-value="Hp">Hp</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                    <div class="label" data-value="ASUS">ASUS</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                     <div class="label" data-value="Acer">Acer</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                     <div class="label" data-value="Dell">Dell</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                     <div class="label" data-value="Sony">Sony</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                     <div class="label" data-value="Apple">Apple</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                     <div class="label" data-value="Lenovo">Lenovo</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>

                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                     <div class="label" data-value="Microsoft">Microsoft</div>
                    <input type="checkbox" name="checkbox" value="">
                </div>
              </div>
          </div>
        </div>
        <!-- /// -->

        <!-- Products -->
        <div class="col-sm-9 products">
          <div class="row">


            <div class="col-sm-6 col-md-4 product">
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

            <div class="col-sm-6 col-md-4 product">
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

            <div class="col-sm-6 col-md-4 product">
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


            <div class="col-sm-6 col-md-4 product">
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

            <div class="col-sm-6 col-md-4 product">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="../assets/img/products/ipad-mini.jpg" alt="iPad Mini"/></a>

              <div class="content">
                <h1 class="h4">iPad Mini</h1>
                <p class="price">$399.99</p>
                <label>Tablets</label>

                <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>

            <div class="col-sm-6 col-md-4 product">
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

          </div>

          <nav>
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="ion-ios-arrow-left"></i></span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li class="disabled"><a href="#">..</a></li>
              <li><a href="#">10</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="ion-ios-arrow-right"></i></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /// -->
      </div>
    </div>
    <br><br>

@endsection
@section('scripts')
<script src="../assets/js/catalog.js"></script>

<script type="text/javascript" src="../assets/js/jquery-ui-1.11.4.js"></script>
<script type="text/javascript" src="../assets/js/jquery.ui.touch-punch.js"></script>
@endsection