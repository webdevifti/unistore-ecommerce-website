<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Checkout &middot; Unistore &middot; Responsive E-Commerce Template</title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Sunrise Digital">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.png">
    
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/carousel.css" rel="stylesheet">
    <link href="../assets/ionicons-2.0.1/css/ionicons.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./"> <i class="ion-cube"></i> Unistore</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../">Home</a></li>
              <li><a href="../catalog/">Catalog</a></li>
              <li><a href="../blog/">Blog</a></li>
              <li><a href="../gallery/">Gallery</a></li>
              <li class="dropdown">
                <a href="../catalog/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../catalog/product.html">Product</a></li>
                  <li><a href="../cart/">Cart</a></li>
                  <li class="active"><a href="../checkout/">Checkout</a></li>
                  <li><a href="../faq/">FAQ</a></li>
                  <li><a href="../contacts/">Contacts</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Variations</li>
                  <li><a href="../home">Home</a></li>
                  <li><a href="../blog/item-photo.html">Article Photo</a></li>
                  <li><a href="../blog/item-video.html">Article Video</a></li>
                  <li><a href="../blog/item-review.html">Article Review</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../login/"> <i class="ion-android-person"></i> Login </a></li>
              <li><a href="../signup/"> Sign Up</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <hr class="offset-md">

    <div class="box">
      <div class="container">
          <h1>Checkout order</h1>
      </div>
    </div>
    <hr class="offset-md">

    <div class="container">
      <div class="row">
          <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="checkout">
                    <div class="addresses box-select">
                        <h2> 1. Delevery address</h2>
                        <hr class="offset-sm">

                        <address class="box-default sm-padding" data-style="selected">
                            <hr class="offset-sm">

                            <h3 class="no-margin"><i class="ion-ios-person"></i> John Doe</h3>
                            <p>
                                <i class="ion-ios-location"></i> 100520, New York City, 45 Park Avenue, United States
                            </p>

                            <div class="check">
                                <i class="ion-checkmark-round"></i>
                            </div>
                            <hr class="offset-sm">
                        </address>

                        <address class="box-default sm-padding">
                            <hr class="offset-sm">
                            <h3 class="no-margin"><i class="ion-ios-person"></i> John Doe</h3>
                            <p>
                                <i class="ion-ios-location"></i> 100520, New York City, 45 Park Avenue, United States
                            </p>

                            <div class="check">
                                <i class="ion-checkmark-round"></i>
                            </div>
                            <hr class="offset-sm">
                        </address>

                        <hr class="offset-sm">
                        <a href="#addaddress" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                          Add new address
                        </a>
                        <hr class="offset-sm">
                        <div class="collapse" id="collapseExample">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row group">
                                        <div class="col-sm-4"><h2 class="h4">Choose country</h2></div>
                                        <div class="col-sm-8">
                                          <!-- <input type="text" class="form-control" name="country" value="" required="" placeholder="" /> -->

                                          <div class="group-select justify" tabindex='1'>
                                              <input class="form-control select" id="country" name="country" value="United Kingdom" placeholder="" required="" />

                                              <ul class="dropdown">
                                                <li data-value="Aaland Islands">Aaland Islands</li>
                                                <li data-value="Afghanistan">Afghanistan</li>
                                                <li data-value="Albania">Albania</li>
                                                <li data-value="Algeria">Algeria</li>
                                                <li data-value="American Samoa">American Samoa</li>
                                                <li data-value="Andorra">Andorra</li>
                                                <li data-value="Angola">Angola</li>
                                                <li data-value="Anguilla">Anguilla</li>
                                                <li data-value="Antarctica">Antarctica</li>
                                                <li data-value="Antigua and Barbuda">Antigua and Barbuda</li>
                                                <li data-value="Argentina">Argentina</li>
                                                <li data-value="Armenia">Armenia</li>
                                                <li data-value="Aruba">Aruba</li>
                                                <li data-value="Ascension Island (British)">Ascension Island (British)</li>
                                                <li data-value="Australia">Australia</li>
                                                <li data-value="Austria">Austria</li>
                                                <li data-value="Azerbaijan">Azerbaijan</li>
                                                <li data-value="Bahamas">Bahamas</li>
                                                <li data-value="Bahrain">Bahrain</li>
                                                <li data-value="Bangladesh">Bangladesh</li>
                                                <li data-value="Barbados">Barbados</li>
                                                <li data-value="Belarus">Belarus</li>
                                                <li data-value="Belgium">Belgium</li>
                                                <li data-value="Belize">Belize</li>
                                                <li data-value="Benin">Benin</li>
                                                <li data-value="Bermuda">Bermuda</li>
                                                <li data-value="Bhutan">Bhutan</li>
                                                <li data-value="Bolivia">Bolivia</li>
                                                <li data-value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</li>
                                                <li data-value="Bosnia and Herzegovina">Bosnia and Herzegovina</li>
                                                <li data-value="Botswana">Botswana</li>
                                                <li data-value="Bouvet Island">Bouvet Island</li>
                                                <li data-value="Brasil">Brasil</li>
                                                <li data-value="British Indian Ocean Territory">British Indian Ocean Territory</li>
                                                <li data-value="Brunei Darussalam">Brunei Darussalam</li>
                                                <li data-value="Bulgaria">Bulgaria</li>
                                                <li data-value="Burkina Faso">Burkina Faso</li>
                                                <li data-value="Burundi">Burundi</li>
                                                <li data-value="Cambodia">Cambodia</li>
                                                <li data-value="Cameroon">Cameroon</li>
                                                <li data-value="Canada">Canada</li>
                                                <li data-value="Canary Islands">Canary Islands</li>
                                                <li data-value="Cape Verde">Cape Verde</li>
                                                <li data-value="Cayman Islands">Cayman Islands</li>
                                                <li data-value="Central African Republic">Central African Republic</li>
                                                <li data-value="Chad">Chad</li>
                                                <li data-value="Chile">Chile</li>
                                                <li data-value="China">China</li>
                                                <li data-value="Christmas Island">Christmas Island</li>
                                                <li data-value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</li>
                                                <li data-value="Colombia">Colombia</li>
                                                <li data-value="Comoros">Comoros</li>
                                                <li data-value="Congo">Congo</li>
                                                <li data-value="Cook Islands">Cook Islands</li>
                                                <li data-value="Costa Rica">Costa Rica</li>
                                                <li data-value="Cote D'Ivoire">Cote D'Ivoire</li>
                                                <li data-value="Croatia">Croatia</li>
                                                <li data-value="Cuba">Cuba</li>
                                                <li data-value="Curacao">Curacao</li>
                                                <li data-value="Cyprus">Cyprus</li>
                                                <li data-value="Czech Republic">Czech Republic</li>
                                                <li data-value="Democratic Republic of Congo">Democratic Republic of Congo</li>
                                                <li data-value="Denmark">Denmark</li>
                                                <li data-value="Djibouti">Djibouti</li>
                                                <li data-value="Dominica">Dominica</li>
                                                <li data-value="Dominican Republic">Dominican Republic</li>
                                                <li data-value="East Timor">East Timor</li>
                                                <li data-value="Ecuador">Ecuador</li>
                                                <li data-value="Egypt">Egypt</li>
                                                <li data-value="El Salvador">El Salvador</li>
                                                <li data-value="Equatorial Guinea">Equatorial Guinea</li>
                                                <li data-value="Eritrea">Eritrea</li>
                                                <li data-value="Estonia">Estonia</li>
                                                <li data-value="Ethiopia">Ethiopia</li>
                                                <li data-value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</li>
                                                <li data-value="Faroe Islands">Faroe Islands</li>
                                                <li data-value="Fiji">Fiji</li>
                                                <li data-value="Finland">Finland</li>
                                                <li data-value="France, Metropolitan">France, Metropolitan</li>
                                                <li data-value="French Guiana">French Guiana</li>
                                                <li data-value="French Polynesia">French Polynesia</li>
                                                <li data-value="French Southern Territories">French Southern Territories</li>
                                                <li data-value="FYROM">FYROM</li>
                                                <li data-value="Gabon">Gabon</li>
                                                <li data-value="Gambia">Gambia</li>
                                                <li data-value="Georgia">Georgia</li>
                                                <li data-value="Germany">Germany</li>
                                                <li data-value="Ghana">Ghana</li>
                                                <li data-value="Gibraltar">Gibraltar</li>
                                                <li data-value="Greece">Greece</li>
                                                <li data-value="Greenland">Greenland</li>
                                                <li data-value="Grenada">Grenada</li>
                                                <li data-value="Guadeloupe">Guadeloupe</li>
                                                <li data-value="Guam">Guam</li>
                                                <li data-value="Guatemala">Guatemala</li>
                                                <li data-value="Guernsey">Guernsey</li>
                                                <li data-value="Guinea">Guinea</li>
                                                <li data-value="Guinea-Bissau">Guinea-Bissau</li>
                                                <li data-value="Guyana">Guyana</li>
                                                <li data-value="Haiti">Haiti</li>
                                                <li data-value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</li>
                                                <li data-value="Honduras">Honduras</li>
                                                <li data-value="Hong Kong">Hong Kong</li>
                                                <li data-value="Hungary">Hungary</li>
                                                <li data-value="Iceland">Iceland</li>
                                                <li data-value="India">India</li>
                                                <li data-value="Indonesia">Indonesia</li>
                                                <li data-value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</li>
                                                <li data-value="Iraq">Iraq</li>
                                                <li data-value="Ireland">Ireland</li>
                                                <li data-value="Isle of Man">Isle of Man</li>
                                                <li data-value="Israel">Israel</li>
                                                <li data-value="Italy">Italy</li>
                                                <li data-value="Jamaica">Jamaica</li>
                                                <li data-value="Japan">Japan</li>
                                                <li data-value="Jersey">Jersey</li>
                                                <li data-value="Jordan">Jordan</li>
                                                <li data-value="Kazakhstan">Kazakhstan</li>
                                                <li data-value="Kenya">Kenya</li>
                                                <li data-value="Kiribati">Kiribati</li>
                                                <li data-value="Korea, Republic of">Korea, Republic of</li>
                                                <li data-value="Kosovo, Republic of">Kosovo, Republic of</li>
                                                <li data-value="Kuwait">Kuwait</li>
                                                <li data-value="Kyrgyzstan">Kyrgyzstan</li>
                                                <li data-value="Lao People's Democratic Republic">Lao People's Democratic Republic</li>
                                                <li data-value="Latvia">Latvia</li>
                                                <li data-value="Lebanon">Lebanon</li>
                                                <li data-value="Lesotho">Lesotho</li>
                                                <li data-value="Liberia">Liberia</li>
                                                <li data-value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</li>
                                                <li data-value="Liechtenstein">Liechtenstein</li>
                                                <li data-value="Lithuania">Lithuania</li>
                                                <li data-value="Luxembourg">Luxembourg</li>
                                                <li data-value="Macau">Macau</li>
                                                <li data-value="Madagascar">Madagascar</li>
                                                <li data-value="Malawi">Malawi</li>
                                                <li data-value="Malaysia">Malaysia</li>
                                                <li data-value="Maldives">Maldives</li>
                                                <li data-value="Mali">Mali</li>
                                                <li data-value="Malta">Malta</li>
                                                <li data-value="Marshall Islands">Marshall Islands</li>
                                                <li data-value="Martinique">Martinique</li>
                                                <li data-value="Mauritania">Mauritania</li>
                                                <li data-value="Mauritius">Mauritius</li>
                                                <li data-value="Mayotte">Mayotte</li>
                                                <li data-value="Mexico">Mexico</li>
                                                <li data-value="Micronesia, Federated States of">Micronesia, Federated States of</li>
                                                <li data-value="Moldova, Republic of">Moldova, Republic of</li>
                                                <li data-value="Monaco">Monaco</li>
                                                <li data-value="Mongolia">Mongolia</li>
                                                <li data-value="Montenegro">Montenegro</li>
                                                <li data-value="Montserrat">Montserrat</li>
                                                <li data-value="Morocco">Morocco</li>
                                                <li data-value="Mozambique">Mozambique</li>
                                                <li data-value="Myanmar">Myanmar</li>
                                                <li data-value="Namibia">Namibia</li>
                                                <li data-value="Nauru">Nauru</li>
                                                <li data-value="Nepal">Nepal</li>
                                                <li data-value="Netherlands">Netherlands</li>
                                                <li data-value="Netherlands Antilles">Netherlands Antilles</li>
                                                <li data-value="New Caledonia">New Caledonia</li>
                                                <li data-value="New Zealand">New Zealand</li>
                                                <li data-value="Nicaragua">Nicaragua</li>
                                                <li data-value="Niger">Niger</li>
                                                <li data-value="Nigeria">Nigeria</li>
                                                <li data-value="Niue">Niue</li>
                                                <li data-value="Norfolk Island">Norfolk Island</li>
                                                <li data-value="North Korea">North Korea</li>
                                                <li data-value="Northern Mariana Islands">Northern Mariana Islands</li>
                                                <li data-value="Norway">Norway</li>
                                                <li data-value="Oman">Oman</li>
                                                <li data-value="Pakistan">Pakistan</li>
                                                <li data-value="Palau">Palau</li>
                                                <li data-value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</li>
                                                <li data-value="Panama">Panama</li>
                                                <li data-value="Papua New Guinea">Papua New Guinea</li>
                                                <li data-value="Paraguay">Paraguay</li>
                                                <li data-value="Peru">Peru</li>
                                                <li data-value="Philippines">Philippines</li>
                                                <li data-value="Pitcairn">Pitcairn</li>
                                                <li data-value="Poland">Poland</li>
                                                <li data-value="Portugal">Portugal</li>
                                                <li data-value="Puerto Rico">Puerto Rico</li>
                                                <li data-value="Qatar">Qatar</li>
                                                <li data-value="Reunion">Reunion</li>
                                                <li data-value="Romania">Romania</li>
                                                <li data-value="Russian Federation">Russian Federation</li>
                                                <li data-value="Rwanda">Rwanda</li>
                                                <li data-value="Saint Kitts and Nevis">Saint Kitts and Nevis</li>
                                                <li data-value="Saint Lucia">Saint Lucia</li>
                                                <li data-value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</li>
                                                <li data-value="Samoa">Samoa</li>
                                                <li data-value="San Marino">San Marino</li>
                                                <li data-value="Sao Tome and Principe">Sao Tome and Principe</li>
                                                <li data-value="Saudi Arabia">Saudi Arabia</li>
                                                <li data-value="Senegal">Senegal</li>
                                                <li data-value="Serbia">Serbia</li>
                                                <li data-value="Seychelles">Seychelles</li>
                                                <li data-value="Sierra Leone">Sierra Leone</li>
                                                <li data-value="Singapore">Singapore</li>
                                                <li data-value="Slovak Republic">Slovak Republic</li>
                                                <li data-value="Slovenia">Slovenia</li>
                                                <li data-value="Solomon Islands">Solomon Islands</li>
                                                <li data-value="Somalia">Somalia</li>
                                                <li data-value="South Africa">South Africa</li>
                                                <li data-value="South Georgia &amp; South Sandwich Islands">South Georgia &amp; South Sandwich Islands</li>
                                                <li data-value="South Sudan">South Sudan</li>
                                                <li data-value="Spain">Spain</li>
                                                <li data-value="Sri Lanka">Sri Lanka</li>
                                                <li data-value="St. Barthelemy">St. Barthelemy</li>
                                                <li data-value="St. Helena">St. Helena</li>
                                                <li data-value="St. Martin (French part)">St. Martin (French part)</li>
                                                <li data-value="St. Pierre and Miquelon">St. Pierre and Miquelon</li>
                                                <li data-value="Sudan">Sudan</li>
                                                <li data-value="Suriname">Suriname</li>
                                                <li data-value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</li>
                                                <li data-value="Swaziland">Swaziland</li>
                                                <li data-value="Sweden">Sweden</li>
                                                <li data-value="Switzerland">Switzerland</li>
                                                <li data-value="Syrian Arab Republic">Syrian Arab Republic</li>
                                                <li data-value="Taiwan">Taiwan</li>
                                                <li data-value="Tajikistan">Tajikistan</li>
                                                <li data-value="Tanzania, United Republic of">Tanzania, United Republic of</li>
                                                <li data-value="Thailand">Thailand</li>
                                                <li data-value="Togo">Togo</li>
                                                <li data-value="Tokelau">Tokelau</li>
                                                <li data-value="Tonga">Tonga</li>
                                                <li data-value="Trinidad and Tobago">Trinidad and Tobago</li>
                                                <li data-value="Tristan da Cunha">Tristan da Cunha</li>
                                                <li data-value="Tunisia">Tunisia</li>
                                                <li data-value="Turkey">Turkey</li>
                                                <li data-value="Turkmenistan">Turkmenistan</li>
                                                <li data-value="Turks and Caicos Islands">Turks and Caicos Islands</li>
                                                <li data-value="Tuvalu">Tuvalu</li>
                                                <li data-value="Uganda">Uganda</li>
                                                <li data-value="Ukraine">Ukraine</li>
                                                <li data-value="United Arab Emirates">United Arab Emirates</li>
                                                <li data-value="United Kingdom">United Kingdom</li>
                                                <li data-value=">United States">>United States</li>
                                                <li data-value="United States Minor Outlying Islands">United States Minor Outlying Islands</li>
                                                <li data-value="Uruguay">Uruguay</li>
                                                <li data-value="Uzbekistan">Uzbekistan</li>
                                                <li data-value="Vanuatu">Vanuatu</li>
                                                <li data-value="Vatican City State (Holy See)">Vatican City State (Holy See)</li>
                                                <li data-value="Venezuela">Venezuela</li>
                                                <li data-value="Viet Nam">Viet Nam</li>
                                                <li data-value="Virgin Islands (British)">Virgin Islands (British)</li>
                                                <li data-value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</li>
                                                <li data-value="Wallis and Futuna Islands">Wallis and Futuna Islands</li>
                                                <li data-value="Western Sahara">Western Sahara</li>
                                                <li data-value="Yemen">Yemen</li>
                                                <li data-value="Zambia">Zambia</li>
                                                <li data-value="Zimbabwe">Zimbabwe</li>
                                              </ul>

                                              <div class="arrow bold"><i class="ion-chevron-down"></i></div>
                                          </div>
                                        </div>
                                    </div>

                                    <hr class="offset-sm">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <p>City</p>

                                        <input type="text" class="form-control input-sm" name="city" value="" required="" placeholder="" />
                                      </div>
                                      <div class="col-sm-4">
                                        <hr class="offset-sm visible-xs">
                                        <p>Street</p>

                                        <input type="text" class="form-control input-sm" name="street" value="" required="" placeholder="" />
                                      </div>
                                      <div class="col-sm-2">
                                        <hr class="offset-sm visible-xs">
                                        <p>Building</p>

                                        <input type="text" class="form-control input-sm" name="bilding" value="" required="" placeholder="" />
                                      </div>
                                      <div class="col-sm-2">
                                        <hr class="offset-sm visible-xs">
                                        <p>Zip</p>

                                        <input type="text" class="form-control input-sm" name="zip" value="" required="" placeholder="" />
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            Use as billing address
                          </label>
                        </div>

                        <hr class="offset-sm">
                        <hr>
                    </div>

                    <div class="delivery box-select">
                        <h2> 2. Delevery option </h2>
                        <hr class="offset-sm">

                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="box-default sm-padding" data-style="selected">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/shipping/fedex.jpg" title="fedex" alt="fedex" />
                                    <span>&nbsp;&nbsp;2-3 working days</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-default sm-padding">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/shipping/dhl.jpg" title="dhl" alt="dhl" />
                                    <span>&nbsp;&nbsp;5-10 working days</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-default sm-padding">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/shipping/ems.jpg" title="ems" alt="ems" />
                                    <span>&nbsp;&nbsp;5-10 working days</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-default sm-padding">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/shipping/ups.jpg" title="ups" alt="ups" />
                                    <span>&nbsp;&nbsp;12-14 working days</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                        </div>


                        <hr class="offset-sm">
                        <hr>
                    </div>

                    <div class="payment box-select">
                        <h2> 3. Payment </h2>
                        <hr class="offset-sm">
                        
                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="box-default sm-padding" data-style="selected">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/payments/paypal.jpg" title="paypal" alt="paypal" />
                                    <span>&nbsp;&nbsp;0% Service fee</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-default sm-padding">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/payments/stripe.jpg" title="stripe" alt="stripe" />
                                    <span>&nbsp;&nbsp;1% Service fee</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                        </div>


                        <hr class="offset-sm">
                        <hr>
                    </div>

                    <div class="payment box-select">
                        <h2> 4. Remark </h2>
                        <hr class="offset-sm">

                        <textarea name="remark" class="form-control" placeholder="Please, type remark" rows="5"></textarea>
                        <hr class="offset-sm">
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-8 col-md-4">
            <hr class="offset-sm visible-sm">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h2 class="no-margin">Summary</h2>
                  <hr class="offset-md">

                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-xs-6">
                              <p>Subtotal (7 items)</p>
                              <p>Discount</p>
                              <p>Delivery</p>
                          </div>
                          <div class="col-xs-6">
                              <p><b>$1499</b></p>
                              <p><b>$0</b></p>
                              <p><b>$0</b></p>
                          </div>
                      </div>
                  </div>

                  <div class="checkboxes">
                      <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                              Promotional Codes
                          </label>
                          <hr class="offset-xs">

                          <div class="input-group">
                            <input type="text" class="form-control input-sm" placeholder="Insert code">
                            <span class="input-group-btn">
                              <button class="btn btn-primary btn-sm" type="button">Apply</button>
                            </span>
                          </div><!-- /input-group -->
                          <hr class="offset-sm">
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Coupon
                        </label>
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

                  <button class="btn btn-primary btn-lg justify"><i class="ion-compose"></i>&nbsp;&nbsp; Confirm order</button>
                </div>
              </div>
          </div>
      </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-lg">

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
                <h1> Manufacturer???s <br> <span>warranty</span></h1>
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
                <li><a href="#English"> <img src="../assets/img/flags/gb.png" alt="Eng"/> English</a></li>
                <li><a href="#Spanish"> <img src="../assets/img/flags/es.png" alt="Spa"/> Spanish</a></li>
                <li><a href="#Deutch"> <img src="../assets/img/flags/de.png" alt="De"/> Deutch</a></li>
                <li><a href="#French"> <img src="../assets/img/flags/fr.png" alt="Fr"/> French</a></li>
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
              <img src="../assets/img/payments/paypal.svg" alt="paypal">
              <img src="../assets/img/payments/visa.svg" alt="visa">
              <img src="../assets/img/payments/master-card.svg" alt="mc">
              <img src="../assets/img/payments/discover.svg" alt="discover">
              <img src="../assets/img/payments/american-express.svg" alt="ae">
            </div>
            <br>

          </div>
          <div class="col-sm-4 col-md-3 align-right align-center-xs">
            <hr class="offset-sm hidden-sm">
            <hr class="offset-sm">
            <p>Unistore Pro ?? 2016 <br> Designed By <a href="http://sunrise.ru.com/" target="_blank">Sunrise Digital</a></p>
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
    <script src="../assets/js/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/core.js"></script>
    <script src="../assets/js/checkout.js"></script>
    <script src="../assets/js/catalog.js"></script>

    <script type="text/javascript" src="../assets/js/jquery-ui-1.11.4.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.ui.touch-punch.js"></script>
    
  </body>
</html>