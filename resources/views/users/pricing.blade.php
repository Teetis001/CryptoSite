<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>FAQ - Bayya Bitcoin Crypto Currency Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/skins/orange.css')}}">

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>

</head>

<body>
    <!-- SVG Preloader Starts -->
    <div id="preloader">
        <div id="preloader-content">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                <feOffset dx="0" dy="0" result="offsetblur"/>
                <feFlood flood-color="red"/>
                <feComposite in2="offsetblur" operator="in"/>
                <feMerge>
                <feMergeNode/>
                <feMergeNode in="SourceGraphic"/>
                </feMerge>
                </filter>          
                <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>       
            </svg>
        </div>
    </div>
    <!-- SVG Preloader Ends -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <!-- Logo Starts -->
                    <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                        <a href="{{route('home')}}">
                            <img class="img-responsive" src="images/logo.png" alt="logo">
                        </a>
                    </div>
                    <!-- Logo Ends -->
                    <!-- Statistics Starts -->
                    <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                            <li>
                                <h6>9,450 USD</h6><span>Last trade price</span></li>
                            <li>
                                <h6>+5.26%</h6><span>24 hour price</span></li>
                            <li>
                                <h6>12.820 BTC</h6><span>24 hour volume</span></li>
                            <li>
                                <h6>2,231,775</h6><span>active traders</span></li>
                            <li>
                                <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                                <span>Live Bitcoin price</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Statistics Ends -->
                    <!-- User Sign In/Sign Up Starts -->
                    <div class="col-md-3 col-lg-3">
                        <ul class="unstyled user">
                            <li class="sign-in"><a href="{{route('login')}}" class="btn btn-primary"><i class="fa fa-user"></i> sign in</a></li>
                            <li class="sign-up"><a href="{{route('register')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a></li>
                        </ul>
                    </div>
                    <!-- User Sign In/Sign Up Ends -->
                </div>
            </div>
            <!-- Navigation Menu Starts -->
            <nav class="site-navigation navigation" id="site-navigation">
                <div class="container">
                    <div class="site-nav-inner">
                        <!-- Logo For ONLY Mobile display Starts -->
                        <a class="logo-mobile" href="{{route('home')}}">
                            <img class="img-responsive" src="{{asset('images/logo.png')}}" alt="">
                        </a>
                        <!-- Logo For ONLY Mobile display Ends -->
                        <!-- Toggle Icon for Mobile Starts -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Toggle Icon for Mobile Ends -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <!-- Main Menu Starts -->
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
                                <li><a href="{{route('trading')}}">Bitcoin Trading</a></li>
                                <li><a href="{{route('pricing')}}">Pricing</a></li>
                           <!--      <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="blog-grid-no-sidebar.html">Grid No Sidebar</a></li>
                                        <li><a href="blog-post.html">Single Post</a></li>
                                    </ul>
                                </li> -->
                            <!--     <li class="active dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="register.html">Register page</a></li>
                                        <li><a href="login.html">Login page</a></li>
                                        <li><a href="shopping-cart.html">Shopping cart</a></li>
                                        <li><a href="shopping-checkout.html">shopping checkout</a></li>
                                        <li class="active"><a href="faq.html">FAQ page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="503.html">Server Error Page</a></li>
                                        <li><a href="terms-of-services.html">Terms of Services</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li> -->
                                   <li ><a href="{{route('faq')}}">FAQ page</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <!-- Cart Icon Starts -->
                                <!-- <li class="cart"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></li> -->
                                <!-- Cart Icon Starts -->
                                <!-- Search Icon Starts -->
                               <!--  <li class="search"><button class="fa fa-search"></button></li> -->
                                <!-- Search Icon Ends -->
                            </ul>
                            <!-- Main Menu Ends -->
                        </div>
                    </div>
                </div>
                <!-- Search Input Starts -->
                <div class="site-search">
                    <div class="container">
                        <input type="text" placeholder="type your keyword and hit enter ...">
                        <span class="close">×</span>
                    </div>
                </div>
                <!-- Search Input Ends -->
            </nav>
            <!-- Navigation Menu Ends -->
        </header>
        <!-- Header Ends -->
		<!-- Banner Area Starts -->
		<section class="banner-area">
			<div class="banner-overlay">
				<div class="banner-text text-center">
					<div class="container">
						<!-- Section Title Starts -->
						<div class="row text-center">
							<div class="col-xs-12">
								<!-- Title Starts -->
								<h2 class="title-head">Our <span>Prices</span></h2>
								<!-- Title Ends -->
								<hr>
								<!-- Breadcrumb Starts -->
								<ul class="breadcrumb">
									<li><a href="{{route('home')}}"> home</a></li>
									<li>pricing</li>
								</ul>
								<!-- Breadcrumb Ends -->
							</div>
						</div>
						<!-- Section Title Ends -->
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Area Ends -->
        <!-- Pricing Starts -->
        <section class="pricing">
            <div class="container">
                <!-- Section Content Starts -->
				<!-- <h3 class="text-center">Sell Bitcoins</h3>
				<p class="text-center">Buy bitcoins with your credit card or cash here! Register to Mayor and get your bitcoins today.</p> -->
            <!--     <div class="row pricing-tables-content pricing-page">
                    <div class="pricing-container"> -->
                        <!-- Pricing Tables Starts -->
                      <!--   <ul class="pricing-list bounce-invert">
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper"> -->
                                    <!-- Pricing Table #1 Starts -->
                               <!--      <li>
                                        <header class="pricing-header">
                                            <h2>GET 0.007 BTC <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">100</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li> -->
                                    <!-- Pricing Table #1 Ends -->
                              <!--   </ul>
                            </li> -->
                      <!--       <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    
                                    <li>
                                        <header class="pricing-header">
                                            <h2>GET 0.015 BTC <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">300</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                   
                                </ul>
                            </li> -->
                  <!--           <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                        
                                    <li>
                                        <header class="pricing-header">
                                            <h2>GET 0.031 BTC <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">500</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                   
                                </ul>
                            </li> -->
                  <!--           <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                          
                                    <li>
                                        <header class="pricing-header">
                                            <h2>GET 0.081 BTC <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">1,000</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                 
                                </ul>
                            </li> -->
                   <!--      </ul>
                    </div>
                </div> -->
				<!-- <h3 class="text-center sell-title">sell GiftCards</h3>
				<p class="text-center">Sell easy, fast and secure Giftcards. The money will be transferred to your bank account within 60mins.</p> -->
                <!-- <div class="row pricing-tables-content pricing-page">
                    <div class="pricing-container">
                     
                        <ul class="pricing-list bounce-invert"> -->
                    <!--         <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                               
                                    <li>
                                        <header class="pricing-header">
                                            <h2>GET 100 USD <span>For </span></h2>

                                            <div class="price">
                                                <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                                <span class="value">0.2</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                
                                </ul>
                            </li> -->
                         <!--    <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                   
                                    <li>
                                        <header class="pricing-header">
                                            <h2>GET 1000 USD <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                                <span class="value">0.5</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                               
                                </ul>
                            </li> -->
                      <!--       <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                   
                                    <li>
                                        <header class="pricing-header">
                                            <h2>GET 3000 USD <span>For </span></h2>

                                            <div class="price">
                                                <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                                <span class="value">1</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                 
                                </ul>
                            </li> -->
                     <!--        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                   
                                    <li>
                                        <header class="pricing-header">
                                            <h2>GET 9000 USD <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                                <span class="value">2</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                  
                                </ul>
                            </li> -->
                     <!--    </ul>
                    </div>
                </div> -->









        
           
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
             
                        <center><h3 class="text-center sell-title">ITUNES/APPLE GIFT CARD</h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">USD</a></li>
                            <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li>
                            <li  ><a data-toggle="tab" href="#menu4">AU</a></li>
                            <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li>
                            <li><a data-toggle="tab" href="#menu8">SG</a></li>
                        </ul>
                        <div class="tab-content">
                           


                            <div id="menu1" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">ITUNES/APPLE GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity" min="0" class="form-control" onchange="CalculateItemsValue()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total = 1;         
                          function CalculateItemsValue() {
   
   var unit_price = 589.31;
  qty = document.getElementById("quantity").value;
    document.getElementById("ItemsTotal").innerHTML = "₦ " + unit_price * qty;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>





                            <div id="menu2" class="tab-pane fade">
                                

                                      <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">ITUNES/APPLE GIFT CARD(EUR)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity1" min="0" class="form-control" onchange="CalculateItemsValue1()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal1">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var totals = 1;         
                          function CalculateItemsValue1() {
   
   var unit_price1 = 589.31;
  qty1 = document.getElementById("quantity1").value;
    document.getElementById("ItemsTotal1").innerHTML = "₦ " + unit_price1 * qty1;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>









                            <div id="menu3" class="tab-pane fade">
                            

                                    <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">ITUNES/APPLE GIFT CARD(UK)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                            <input type="number"  value="0" id="quantity2" min="0" class="form-control" onchange="CalculateItemsValue2()"/>
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal2">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total2 = 1;         
                          function CalculateItemsValue2() {
   
   var unit_price2 = 589.31;
  qty2 = document.getElementById("quantity2").value;
    document.getElementById("ItemsTotal2").innerHTML = "₦ " + unit_price2 * qty2;
     
}                           

                        </script>
                    </div>

                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                </div>
            </div>
        </section>

                            </div>





                                  <div id="menu4" class="tab-pane fade">
                            

                                    <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">ITUNES/APPLE GIFT CARD(AU)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                            <input type="number"  value="0" id="quantity3" min="0" class="form-control" onchange="CalculateItemsValue3()"/>
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal3">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total3 = 1;         
                          function CalculateItemsValue3() {
   
   var unit_price3 = 589.31;
  qty3 = document.getElementById("quantity3").value;
    document.getElementById("ItemsTotal3").innerHTML = "₦ " + unit_price3 * qty3;
     
}                           

                        </script>
                    </div>

                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                </div>
            </div>
        </section>

                            </div>







                                  <div id="menu5" class="tab-pane fade">
                            

                                    <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">ITUNES/APPLE GIFT CARD(CA)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                            <input type="number"  value="0" id="quantity4" min="0" class="form-control" onchange="CalculateItemsValue4()"/>
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal4">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total4 = 1;         
                          function CalculateItemsValue4() {
   
   var unit_price4 = 589.31;
  qty4 = document.getElementById("quantity4").value;
    document.getElementById("ItemsTotal4").innerHTML = "₦ " + unit_price4 * qty4;
     
}                           

                        </script>
                    </div>

                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                </div>
            </div>
        </section>

                            </div>






                                  <div id="menu6" class="tab-pane fade">
                            

                                    <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">ITUNES/APPLE GIFT CARD(CHF)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                            <input type="number"  value="0" id="quantity5" min="0" class="form-control" onchange="CalculateItemsValue5()"/>
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal5">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total5 = 1;         
                          function CalculateItemsValue5() {
   
   var unit_price5 = 589.31;
  qty5 = document.getElementById("quantity5").value;
    document.getElementById("ItemsTotal5").innerHTML = "₦ " + unit_price5 * qty5;
     
}                           

                        </script>
                    </div>

                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                </div>
            </div>
        </section>

                            </div>





                                  <div id="menu7" class="tab-pane fade">
                            

                                    <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">ITUNES/APPLE GIFT CARD(NZD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                            <input type="number"  value="0" id="quantity6" min="0" class="form-control" onchange="CalculateItemsValue6()"/>
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal6">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total4 = 1;         
                          function CalculateItemsValue6() {
   
   var unit_price6 = 589.31;
  qty6 = document.getElementById("quantity6").value;
    document.getElementById("ItemsTotal6").innerHTML = "₦ " + unit_price6 * qty6;
     
}                           

                        </script>
                    </div>

                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                </div>
            </div>
        </section>

                            </div>




                              <div id="menu8" class="tab-pane fade">
                            

                                    <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">ITUNES/APPLE GIFT CARD(SG)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                            <input type="number"  value="0" id="quantity8" min="0" class="form-control" onchange="CalculateItemsValue8()"/>
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal8">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total8 = 1;         
                          function CalculateItemsValue6() {
   
   var unit_price8 = 589.31;
  qty8 = document.getElementById("quantity8").value;
    document.getElementById("ItemsTotal8").innerHTML = "₦ " + unit_price8 * qty8;
     
}                           

                        </script>
                    </div>

                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                </div>
            </div>
        </section>

                            </div>













                        </div>



                    </center>





 <!-- <h3> amazon cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">AMAZON GIFT CARD</h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu10">USD</a></li>
                         <!--    <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li>
                            <li  ><a data-toggle="tab" href="#menu4">AU</a></li>
                            <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li>
                            <li><a data-toggle="tab" href="#menu8">SG</a></li> -->
                        </ul>
                        <div class="tab-content">
                           


                            <div id="menu10" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">AMAZON GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity10" min="0" class="form-control" onchange="CalculateItemsValue10()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal10">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total10 = 1;         
                          function CalculateItemsValue10() {
   
   var unit_price10 = 589.31;
  qty10 = document.getElementById("quantity10").value;
    document.getElementById("ItemsTotal10").innerHTML = "₦ " + unit_price10 * qty10;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>


                        </div>



                    </center>







                        <!-- <h3> steam cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">STEAM GIFT CARD</h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu11">USD</a></li>
                            <li><a data-toggle="tab" href="#menu12">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu13">UK</a></li>
                         
                            <li><a data-toggle="tab" href="#menu14">CA</a></li>
                               <li  ><a data-toggle="tab" href="#menu15">AU</a></li>
                           <!--  <li><a data-toggle="tab" href="#menu6">CHF</a></li> -->
                            <li ><a data-toggle="tab" href="#menu16">NZD</a></li>
                          <!--   <li><a data-toggle="tab" href="#menu8">SG</a></li> -->
                        </ul>
                        <div class="tab-content">
                           


                            <div id="menu11" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">STEAM GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity11" min="0" class="form-control" onchange="CalculateItemsValue11()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal11">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total11 = 1;         
                          function CalculateItemsValue11() {
   
   var unit_price11 = 589.31;
  qty11 = document.getElementById("quantity11").value;
    document.getElementById("ItemsTotal11").innerHTML = "₦ " + unit_price11 * qty11;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>




                                <div id="menu12" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">STEAM GIFT CARD(EUR)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity12" min="0" class="form-control" onchange="CalculateItemsValue12()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal12">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total12 = 1;         
                          function CalculateItemsValue12() {
   
   var unit_price12 = 589.31;
  qty12 = document.getElementById("quantity12").value;
    document.getElementById("ItemsTotal12").innerHTML = "₦ " + unit_price12 * qty12;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>

                             

                              <div id="menu13" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">STEAM GIFT CARD(UK)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity13" min="0" class="form-control" onchange="CalculateItemsValue13()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal13">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total13 = 1;         
                          function CalculateItemsValue13() {
   
   var unit_price13 = 589.31;
  qty13 = document.getElementById("quantity13").value;
    document.getElementById("ItemsTotal13").innerHTML = "₦ " + unit_price13 * qty13;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>





                             <div id="menu14" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">STEAM GIFT CARD(CA)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity14" min="0" class="form-control" onchange="CalculateItemsValue14()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal14">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total14 = 1;         
                          function CalculateItemsValue14() {
   
   var unit_price14 = 589.31;
  qty14 = document.getElementById("quantity14").value;
    document.getElementById("ItemsTotal14").innerHTML = "₦ " + unit_price14 * qty14;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>




                             <div id="menu15" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">STEAM GIFT CARD(AU)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity15" min="0" class="form-control" onchange="CalculateItemsValue15()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal15">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total15 = 1;         
                          function CalculateItemsValue15() {
   
   var unit_price15 = 589.31;
  qty15 = document.getElementById("quantity15").value;
    document.getElementById("ItemsTotal15").innerHTML = "₦ " + unit_price15 * qty15;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>




                 <div id="menu16" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">STEAM GIFT CARD(NZD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity16" min="0" class="form-control" onchange="CalculateItemsValue16()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal16">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total16 = 1;         
                          function CalculateItemsValue16() {
   
   var unit_price16 = 589.31;
  qty16 = document.getElementById("quantity16").value;
    document.getElementById("ItemsTotal16").innerHTML = "₦ " + unit_price16 * qty16;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>


                        </div>



                    </center>










<!-- <h3> GOOGLE PLAY cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">GOOGLE PLAY GIFT CARD</h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu17">USD</a></li>
                            <li><a data-toggle="tab" href="#menu18">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu19">UK</a></li>
                         
                            <li><a data-toggle="tab" href="#menu20">CA</a></li>
                               <li  ><a data-toggle="tab" href="#menu21">AU</a></li>
                            <li><a data-toggle="tab" href="#menu22">CHF</a></li>
                            <!-- <li ><a data-toggle="tab" href="#menu16">NZD</a></li> -->
                          <!--   <li><a data-toggle="tab" href="#menu8">SG</a></li> -->
                        </ul>
                        <div class="tab-content">
                           


                            <div id="menu17" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">GOOGLE PLAY GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity17" min="0" class="form-control" onchange="CalculateItemsValue17()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal17">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total17 = 1;         
                          function CalculateItemsValue17() {
   
   var unit_price17 = 589.31;
  qty17 = document.getElementById("quantity17").value;
    document.getElementById("ItemsTotal17").innerHTML = "₦ " + unit_price17 * qty17;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>




                                <div id="menu18" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">STEAM GIFT CARD(EUR)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity18" min="0" class="form-control" onchange="CalculateItemsValue18()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal18">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total18 = 1;         
                          function CalculateItemsValue18() {
   
   var unit_price18 = 589.31;
  qty18 = document.getElementById("quantity18").value;
    document.getElementById("ItemsTotal18").innerHTML = "₦ " + unit_price18 * qty18;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>

                             

                              <div id="menu19" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">GOOGLE PLAY CARD(UK)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity19" min="0" class="form-control" onchange="CalculateItemsValue19()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal19">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total19 = 1;         
                          function CalculateItemsValue19() {
   
   var unit_price19 = 589.31;
  qty19 = document.getElementById("quantity19").value;
    document.getElementById("ItemsTotal19").innerHTML = "₦ " + unit_price19 * qty19;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>





                             <div id="menu20" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">GOOGLE PLAY GIFT CARD(CA)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity20" min="0" class="form-control" onchange="CalculateItemsValue20()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal20">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total14 = 1;         
                          function CalculateItemsValue20() {
   
   var unit_price20 = 589.31;
  qty20 = document.getElementById("quantity20").value;
    document.getElementById("ItemsTotal20").innerHTML = "₦ " + unit_price20 * qty20;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>




                             <div id="menu21" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">GOOGLE PLAY GIFT CARD(AU)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity21" min="0" class="form-control" onchange="CalculateItemsValue21()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal21">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total21 = 1;         
                          function CalculateItemsValue21() {
   
   var unit_price21 = 589.31;
  qty21 = document.getElementById("quantity21").value;
    document.getElementById("ItemsTotal21").innerHTML = "₦ " + unit_price21 * qty21;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>




                 <div id="menu22" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">GOOGLE PLAY GIFT CARD(NZD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity22" min="0" class="form-control" onchange="CalculateItemsValue22()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal22">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total22 = 1;         
                          function CalculateItemsValue22() {
   
   var unit_price22 = 589.31;
  qty22 = document.getElementById("quantity22").value;
    document.getElementById("ItemsTotal22").innerHTML = "₦ " + unit_price22 * qty22;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>


                        </div>

                    </center>





 <!-- <h3> TARGET GIFT cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">TARGET GIFT CARD</h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu23">USD</a></li>
                         <!--    <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li>
                            <li  ><a data-toggle="tab" href="#menu4">AU</a></li>
                            <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li>
                            <li><a data-toggle="tab" href="#menu8">SG</a></li> -->
                        </ul>
                        <div class="tab-content">
                           


                            <div id="menu23" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">TARGET GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity23" min="0" class="form-control" onchange="CalculateItemsValue23()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal23">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total23 = 1;         
                          function CalculateItemsValue23() {
   
   var unit_price23 = 589.31;
  qty23 = document.getElementById("quantity23").value;
    document.getElementById("ItemsTotal23").innerHTML = "₦ " + unit_price23 * qty23;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>


                        </div>



                    </center>





 <!-- <h3> SEPHORA GIFT cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">SEPHORA GIFT CARD </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu24">USD</a></li>
                         <!--    <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li>
                            <li  ><a data-toggle="tab" href="#menu4">AU</a></li>
                            <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li>
                            <li><a data-toggle="tab" href="#menu8">SG</a></li> -->
                        </ul>
                        <div class="tab-content">
                           


                            <div id="menu24" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">SEPHORA GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity24" min="0" class="form-control" onchange="CalculateItemsValue24()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal24">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total24 = 1;         
                          function CalculateItemsValue24() {
   
   var unit_price24 = 589.31;
  qty24 = document.getElementById("quantity24").value;
    document.getElementById("ItemsTotal24").innerHTML = "₦ " + unit_price24 * qty24;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>


                        </div>



                    </center>


   <!-- <h3> NIKE GIFT cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">NIKE GIFT CARD </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu25">USD</a></li>
                         <!--    <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li>
                            <li  ><a data-toggle="tab" href="#menu4">AU</a></li>
                            <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li>
                            <li><a data-toggle="tab" href="#menu8">SG</a></li> -->
                        </ul>
                        <div class="tab-content">
                           


                            <div id="menu25" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">NIKE GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity25" min="0" class="form-control" onchange="CalculateItemsValue25()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal25">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total25 = 1;         
                          function CalculateItemsValue25() {
   
   var unit_price25 = 589.31;
  qty25 = document.getElementById("quantity25").value;
    document.getElementById("ItemsTotal25").innerHTML = "₦ " + unit_price25 * qty25;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>


                        </div>



                    </center>




 <!-- <h3> WALMART GIFTcardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">WALMART GIFT CARD </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu26">USD</a></li>
                         <!--    <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li>
                            <li  ><a data-toggle="tab" href="#menu4">AU</a></li>
                            <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li>
                            <li><a data-toggle="tab" href="#menu8">SG</a></li> -->
                        </ul>
                        <div class="tab-content">
                           


                            <div id="menu26" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">WALMART GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity26" min="0" class="form-control" onchange="CalculateItemsValue26()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal26">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total26 = 1;         
                          function CalculateItemsValue26() {
   
   var unit_price26 = 589.31;
  qty26 = document.getElementById("quantity26").value;
    document.getElementById("ItemsTotal26").innerHTML = "₦ " + unit_price26 * qty26;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>


                        </div>



                    </center>








 <!-- <h3> EBAY GIFT cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">EBAY GIFT CARD </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu27">USD</a></li>
                         <!--    <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li>
                            <li  ><a data-toggle="tab" href="#menu4">AU</a></li>
                            <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li>
                            <li><a data-toggle="tab" href="#menu8">SG</a></li> -->
                        </ul>
                        <div class="tab-content">
                           


                            <div id="menu27" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">EBAY GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity27" min="0" class="form-control" onchange="CalculateItemsValue27()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal27">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total27 = 1;         
                          function CalculateItemsValue27() {
   
   var unit_price27 = 589.31;
  qty27 = document.getElementById("quantity27").value;
    document.getElementById("ItemsTotal27").innerHTML = "₦ " + unit_price27 * qty27;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>


                        </div>



                    </center>





  <!-- <h3> RAZER GOLD PIN/RIXTY GIFT CARD cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">RAZER GOLD PIN/RIXTY GIFT CARD </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu28">USD</a></li>
                            <!-- <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li> -->
                            <li  ><a data-toggle="tab" href="#menu29">AU</a></li>
                           <!--  <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li> -->
                            <li><a data-toggle="tab" href="#menu30">SG</a></li>
                        </ul>
                        <div class="tab-content">
                           


                            <div id="menu28" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">RAZER GOLD PIN/RIXTY GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity28" min="0" class="form-control" onchange="CalculateItemsValue28()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal28">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total28 = 1;         
                          function CalculateItemsValue28() {
   
   var unit_price28 = 589.31;
  qty28 = document.getElementById("quantity28").value;
    document.getElementById("ItemsTotal28").innerHTML = "₦ " + unit_price28 * qty28;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>





<div id="menu29" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">RAZER GOLD PIN/RIXTY GIFT CARD(AU)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity29" min="0" class="form-control" onchange="CalculateItemsValue29()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal29">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total29 = 1;         
                          function CalculateItemsValue29() {
   
   var unit_price29 = 589.31;
  qty29 = document.getElementById("quantity29").value;
    document.getElementById("ItemsTotal29").innerHTML = "₦ " + unit_price29 * qty29;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>






<div id="menu30" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">RAZER GOLD PIN/RIXTY GIFT CARD(SG)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity30" min="0" class="form-control" onchange="CalculateItemsValue30()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal30">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total30 = 1;         
                          function CalculateItemsValue30() {
   
   var unit_price30 = 589.31;
  qty30 = document.getElementById("quantity30").value;
    document.getElementById("ItemsTotal30").innerHTML = "₦ " + unit_price30 * qty30;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>



                        </div>



                    </center>





  <!-- <h3> NORDSTROM GIF1 CARD cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">NORDSTROM GIFT CARD </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu31">USD</a></li>
                            <!-- <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li> -->
                            <!-- <li  ><a data-toggle="tab" href="#menu29">AU</a></li> -->
                           <!--  <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li> -->
                     <!--        <li><a data-toggle="tab" href="#menu30">SG</a></li> -->
                        </ul>
                        <div class="tab-content">

<div id="menu31" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">NORDSTROM GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity31" min="0" class="form-control" onchange="CalculateItemsValue31()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal31">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total31 = 1;         
                          function CalculateItemsValue31() {
   
   var unit_price31 = 589.31;
  qty31 = document.getElementById("quantity31").value;
    document.getElementById("ItemsTotal31").innerHTML = "₦ " + unit_price31 * qty31;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>



                        </div>



                    </center>







  <!-- <h3> VANILLA GIFT CARD cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">VANILLA GIFT CARD </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu32">USD</a></li>
                            <!-- <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li> -->
                            <!-- <li  ><a data-toggle="tab" href="#menu29">AU</a></li> -->
                           <!--  <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li> -->
                     <!--        <li><a data-toggle="tab" href="#menu30">SG</a></li> -->
                        </ul>
                        <div class="tab-content">

<div id="menu32" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">VANILLA GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity32" min="0" class="form-control" onchange="CalculateItemsValue32()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal32">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total32 = 1;         
                          function CalculateItemsValue32() {
   
   var unit_price32 = 589.31;
  qty32 = document.getElementById("quantity32").value;
    document.getElementById("ItemsTotal32").innerHTML = "₦ " + unit_price32 * qty32;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>

                        </div>

                    </center>




  <!-- <h3> GREEN DOT EMAIL cardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">GREEN DOT EMAIL </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu33">USD</a></li>
                            <!-- <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li> -->
                            <!-- <li  ><a data-toggle="tab" href="#menu29">AU</a></li> -->
                           <!--  <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li> -->
                     <!--        <li><a data-toggle="tab" href="#menu30">SG</a></li> -->
                        </ul>
                        <div class="tab-content">

<div id="menu33" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">GREEN DOT EMAIL(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity33" min="0" class="form-control" onchange="CalculateItemsValue33()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal33">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total33 = 1;         
                          function CalculateItemsValue33() {
   
   var unit_price33 = 589.31;
  qty33 = document.getElementById("quantity33").value;
    document.getElementById("ItemsTotal33").innerHTML = "₦ " + unit_price33 * qty33;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>



                        </div>



                    </center>






  <!-- <h3> AMERICAN EXPRESS EMAILcardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">AMERICAN EXPRESS </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu34">USD</a></li>
                            <!-- <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li> -->
                            <!-- <li  ><a data-toggle="tab" href="#menu29">AU</a></li> -->
                           <!--  <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li> -->
                     <!--        <li><a data-toggle="tab" href="#menu30">SG</a></li> -->
                        </ul>
                        <div class="tab-content">

<div id="menu34" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">AMERICAN EXPRESS(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity34" min="0" class="form-control" onchange="CalculateItemsValue34()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal34">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total34 = 1;         
                          function CalculateItemsValue34() {
   
   var unit_price34 = 589.31;
  qty34 = document.getElementById("quantity34").value;
    document.getElementById("ItemsTotal34").innerHTML = "₦ " + unit_price34 * qty34;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>
                        </div>
                    </center>






  <!-- <h3> MACY'S GIFT CARD ardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">MACY'S GIFT CARD </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu35">USD</a></li>
                            <!-- <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li> -->
                            <!-- <li  ><a data-toggle="tab" href="#menu29">AU</a></li> -->
                           <!--  <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li> -->
                     <!--        <li><a data-toggle="tab" href="#menu30">SG</a></li> -->
                        </ul>
                        <div class="tab-content">

<div id="menu35" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">MACY'S GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity35" min="0" class="form-control" onchange="CalculateItemsValue35()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal35">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total35 = 1;         
                          function CalculateItemsValue35() {
   
   var unit_price35 = 589.31;
  qty35 = document.getElementById("quantity35").value;
    document.getElementById("ItemsTotal35").innerHTML = "₦ " + unit_price35 * qty35;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>
                        </div>
                    </center>







  <!-- <h3> VISA GIFT CARD6ardddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h3> -->


         <center><h3 class="text-center sell-title">VISA GIFT CARD </h3>
                        <!-- Pricing Switcher Starts -->
                  

                  <ul class="nav nav-tabs text-center">
                            <li class="active text-center"><a data-toggle="tab" href="#menu36">USD</a></li>
                            <!-- <li><a data-toggle="tab" href="#menu2">EUR</a></li>
                            <li><a data-toggle="tab" href="#menu3">UK</a></li> -->
                            <!-- <li  ><a data-toggle="tab" href="#menu29">AU</a></li> -->
                           <!--  <li><a data-toggle="tab" href="#menu5">CA</a></li>
                            <li><a data-toggle="tab" href="#menu6">CHF</a></li>
                            <li ><a data-toggle="tab" href="#menu7">NZD</a></li> -->
                     <!--        <li><a data-toggle="tab" href="#menu30">SG</a></li> -->
                        </ul>
                        <div class="tab-content">

<div id="menu36" class="tab-pane fade in active">
                                        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
                    <!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                        <table class="table order text-center">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Unit Price (USD)</th>
                                    <th>Quantity</th>
                                    <th>Total(₦)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><!-- <a href="#" class="fa fa-trash icon-delete-product"></a> --></td>
                                    <td class="text-left"><h6 class="product">VISA GIFT CARD(USD)</h6></td>
                                    <td class="text-left"><span class="price" id="unit">$589.31</span></td>
                                    <td class="text-left">
                                        <div class="">  
                                         <!--    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity" onchange="Calculateadd()" /> -->
                                            <input type="number"  value="0" id="quantity36" min="0" class="form-control" onchange="CalculateItemsValue36()"/>
                                        <!-- <input name="qnt_5" type="number"  value="0" size="3" data-price="99"  /> -->
                                          <!--   <input type="button" value="&#8250;" class="qtyplus" data-field="quantity" onclick="Calculatemin()"  /> -->
                                        </div>
                                    </td>
                                    <td class="text-left"><span class="price" id="ItemsTotal36">₦ 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                     var total36 = 1;         
                          function CalculateItemsValue36() {
   
   var unit_price36 = 589.31;
  qty36 = document.getElementById("quantity36").value;
    document.getElementById("ItemsTotal36").innerHTML = "₦ " + unit_price36 * qty36;
     
}                           


                        </script>
                    </div>
                    <!-- Purchased Products Ends -->
                    <!-- Coupon Input Starts -->
                    <!-- Update Cart Ends -->
                    <!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to Sell</a></div>
                    </div>
                    <!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
                            </div>
                        </div>
                    </center>




























                  

































            </div>
        </section>
        <!-- Pricing Ends -->
        <!-- Call To Action Section Starts -->
        <section class="call-action-all">
			<div class="call-action-all-overlay">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- Call To Action Text Starts -->
							<div class="action-text">
								<h2>Get Started Today With Bitcoin</h2>
								<p class="lead">Open account for free and start trading Bitcoins!</p>
							</div>
							<!-- Call To Action Text Ends -->
							<!-- Call To Action Button Starts -->
							<p class="action-btn"><a class="btn btn-primary" href="{{route('register')}}">Register Now</a></p>
							<!-- Call To Action Button Ends -->
						</div>
					</div>
				</div>
			</div>
        </section>
        <!-- Call To Action Section Ends -->
 <!-- Footer Starts -->
        <footer class="footer">
            <!-- Footer Top Area Starts -->
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-2">
                            <h4>Our Company</h4>
                            <div class="menu">
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('pricing')}}">Pricing</a></li>
                                 <!--    <li><a href="blog-right-sidebar.html">Blog</a></li> -->
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-2">
                            <h4>Help & Support</h4>
                            <div class="menu">
                                <ul>
                                    <li><a href="{{route('faq')}}">FAQ</a></li>
                                    <li><a href="{{route('services')}}">Terms of Services</a></li>
                                   <!--  <li><a href="404.html">404</a></li> -->
                                    <li><a href="{{route('register')}}">Register</a></li>
                                    <li><a href="{{route('login')}}">Login</a></li>
                                   <!--  <li><a href="coming-soon.html">Coming Soon</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-3">
                            <h4>Contact Us </h4>
                            <div class="contacts">
                                <div>
                                    <span>info@btech.com</span>
                                </div>
                                <div>
                                    <span>+234 9045627943</span>
                                </div>
                                <div>
                                    <span>Lagos, Nigeria</span>
                                </div>
                                <div>
                                    <span>mon-sat 08am &#x21FE; 05pm</span>
                                </div>
                            </div>
                            <!-- Social Media Profiles Starts -->
                            <div class="social-footer">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!-- Social Media Profiles Ends -->
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-12 col-md-5">
                            <!-- Facts Starts -->
                            <div class="facts-footer">
                                <div>
                                    <h5>₦198.76B</h5>
                                    <span>Market cap</span>
                                </div>
                                <div>
                                    <h5>243K</h5>
                                    <span>daily transactions</span>
                                </div>
                                <div>
                                    <h5>369K</h5>
                                    <span>active accounts</span>
                                </div>
                                <div>
                                    <h5>127</h5>
                                    <span>supported countries</span>
                                </div>
                            </div>
                            <!-- Facts Ends -->
                            <hr>
                            <!-- Supported Payment Cards Logo Starts -->
                            <div class="payment-logos">
                                <h4 class="payment-title">supported payment methods</h4>
                                <img src="images/icons/payment/ae.jpg" alt="american-express">
                                <img src="images/icons/payment/mastercar.png" alt="mastercard">
                                <img src="images/icons/payment/visa.jpg" alt="visa">
                                <img src="images/icons/payment/paypall.png" alt="paypal">
                                <img class="last" src="images/icons/payment/maestroo.png" alt="maestro">
                            </div>
                            <!-- Supported Payment Cards Logo Ends -->
                        </div>
                        <!-- Footer Widget Ends -->
                    </div>
                </div>
            </div>
            <!-- Footer Top Area Ends -->
            <!-- Footer Bottom Area Starts -->
            <div class="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                            <p class="text-center">Copyright © 2021 Mayor All Rights Reserved | Created with Love by <a href="" target="_blank">Algorithm Tech</a></p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Area Ends -->
        </footer>
        <!-- Footer Ends -->
        <!-- Back To Top Starts  -->
        <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
        <!-- Back To Top Ends  -->
        
            <!-- Template JS Files -->
            <script src="{{asset('/js/jquery-2.2.4.min.js')}}"></script>
            <script src="{{asset('/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('/js/select2.min.js')}}"></script>
            <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('/js/custom.js')}}"></script>

    </div>
    <!-- Wrapper Ends -->
</body>

</html>