@extends('master')
@section('title','Cart')
@section('content')
    <hr class="offset-md">

    <div class="box">
      <div class="container">
          <h1>Shopping Cart</h1>
          <hr class="offset-sm">
      </div>
    </div>
    <hr class="offset-md">


    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="checkout-cart">
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

                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="../assets/img/products/chrome-book-14.jpg" alt="HP Chromebook 11"/>
                              </a>
                            </div>
                            <div class="media-body">
                              <h2 class="h4 media-heading">HP Chromebook 14</h2>
                              <label>Laptops</label>
                              <p class="price">$209.99</p>
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

                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="../assets/img/products/ipad-air.jpg" alt="iPad Air"/>
                              </a>
                            </div>
                            <div class="media-body">
                              <h2 class="h4 media-heading">iPad Air</h2>
                              <label>Tablets</label>
                              <p class="price">$449.99</p>
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

                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="../assets/img/products/mi-pad-2.jpg" alt="HP Chromebook 11"/>
                              </a>
                            </div>
                            <div class="media-body">
                              <h2 class="h4 media-heading">Mi Pad 2</h2>
                              <label>Tablets</label>
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

                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="../assets/img/products/lenovo-yoga.jpg" alt="Lenovo Yoga"/>
                              </a>
                            </div>
                            <div class="media-body">
                              <h2 class="h4 media-heading">Lenovo Yoga</h2>
                              <label>Hybrid</label>
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

                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="../assets/img/products/surface-pro.jpg" alt="HP Chromebook 11"/>
                              </a>
                            </div>
                            <div class="media-body">
                              <h2 class="h4 media-heading">Surface Pro</h2>
                              <label>Hybrid</label>
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

                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="../assets/img/products/asus-transformer.jpg" alt="HP Chromebook 11"/>
                              </a>
                            </div>
                            <div class="media-body">
                              <h2 class="h4 media-heading">ASUS Transformer</h2>
                              <label>Hybrid</label>
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
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-4">
              <hr class="offset-md visible-sm">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <h2 class="no-margin">Summary</h2>
                    <hr class="offset-md">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-6">
                                <p>Subtotal (7 items)</p>
                            </div>
                            <div class="col-xs-6">
                                <p><b>$1499</b></p>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-6">
                                <h3 class="no-margin">Total sum</h3>
                            </div>
                            <div class="col-xs-6">
                                <h3 class="no-margin">$1499</h3>
                            </div>
                        </div>
                    </div>
                    <hr class="offset-md">

                    <a href="../checkout/" class="btn btn-primary btn-lg justify"><i class="ion-android-checkbox-outline"></i>&nbsp;&nbsp; Checkout order</a>
                    <hr class="offset-md">

                    <p>Pay your order in the most convenient way</p>
                    <div class="payment-icons">
                      <img src="../assets/img/payments/icon-paypal.svg" alt="paypal">
                      <img src="../assets/img/payments/icon-visa.svg" alt="visa">
                      <img src="../assets/img/payments/icon-mc.svg" alt="mc">
                      <img src="../assets/img/payments/icon-discover.svg" alt="discover">
                      <img src="../assets/img/payments/icon-ae.svg" alt="ae">
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-lg">
@endsection
@section('scripts')

<script src="{{ asset('assets/js/checkout.js') }}"></script>
@endsection