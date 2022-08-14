<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>FAQ - MayorExchange Bitcoin/Giftcard Crypto Currency</title>
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
							<img class="img-responsive" src="{{asset('images/logo.png')}}" alt="logo">
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
								<h2 class="title-head">Frequenty Asked <span>Questions</span></h2>
								<!-- Title Ends -->
								<hr>
								<!-- Breadcrumb Starts -->
								<ul class="breadcrumb">
									<li><a href="{{route('home')}}"> home</a></li>
									<li>faq</li>
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
        <!-- Section FAQ Starts -->
        <section class="faq">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <!-- Panel Group Starts -->
                        <div class="panel-group" id="accordion">
                            <!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								what is bitcoin ?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">Bitcoin is a form of digital currency which is based on an open source code that was created and is held electronically. Bitcoin is a decentralized form of currency, meaning that it does not belong to any form of government and is not controlled by anyone.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
                            <!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								Who Developed Bitcoin?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">The original Bitcoin code was designed by Satoshi Nakamoto under MIT open source credentials. In 2008 Nakamoto outlined the idea behind Bitcoin in his White Paper, which scientifically described how the cryptocurrency would function. Bitcoin is the first successful digital currency designed with trust in cryptography over central authorities. Satoshi left the Bitcoin code in the hands of developers and the community in 2010. Thus far hundreds of developers have added to the core code throughout the years.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
							<!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								What is Bitcoin Mining?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">Bitcoin mining is analogous to the mining of gold, but its digital form. The process involves specialized computers solving algorithmic equations or hash functions. These problems help miners to confirm blocks of transactions held within the network. Bitcoin mining provides a reward for miners by paying out in Bitcoin in turn the miners confirm transactions on the blockchain. Miners introduce new Bitcoin into the network and also secure the system with transaction confirmation. They are also rewarded network fees for when they harvest new coin and a time when the last bitcoin is found mining will continue.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
                                        <!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse17">
                                How Long Does it take to Redeem Gift Cards?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse17" class="panel-collapse collapse">
                                    <div class="panel-body">All Gift cards in this platform takes 40mins after uploading to be redeemed and payment is made ASAP to the uploaded Bank Details.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
                                        <!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse70">
                                All Amounts Uploaded on this site are prome to changes every 3-5hrs</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse70" class="panel-collapse collapse">
                                    <div class="panel-body">Bitcoins / Gift Card prices changes on market sales. </div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
							<!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
								Is Bitcoin Used For Illegal Activities?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">This is a yet another controversial topic. Because of the freedom and the degree of anonymity that the use of Bitcoin offers, many users who were seeking to purchase or solicit illegal goods or services initially turned to the use of Bitcoin as a method of payment.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
							<!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
								Can Bitcoin Be Regulated In Any Way?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body">Again, when a user decides to use a specific type of software for their Bitcoin wallet, they are deciding what direction the Bitcoin network is heading towards. In other words, you need the cooperation of nearly every single user in order to modify any aspect of the Bitcoin protocol.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
							<!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
								Is Bitcoin anonymous?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse6" class="panel-collapse collapse">
                                    <div class="panel-body">Participants in Bitcoin transactions are identified by public addresses – those are the long strings of around 30 characters you see in a person’s Bitcoin address, usually starting with the numerals ‘1’ or ‘3’. For every transaction, the sending and receiving addresses are publicly-viewable.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
							<!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
								How Can I Sell Bitcoins?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse7" class="panel-collapse collapse">
                                    <div class="panel-body">Bitcoins can be sold locally using LocalBitcoins, on Bitcoin brokerages / exchanges, using two-way Bitcoin Teller Machines (BTM’s) or you can pay for a good or service with them. Bitcoins can be sold to just about anyone as long as they have a Bitcoin address, and can be sold for any fiat currency in the world or traded for a physical good. Feel free to check out our recommended list of exchanges and brokerage services to sell your bitcoins online.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
                        </div>
                        <!-- Panel Group Ends -->
                    </div>
					<!-- Sidebar Starts -->
				<div class="sidebar col-xs-12 col-md-4">
					<!-- Latest Posts Widget Ends -->
					<div class="widget recent-posts">
						<h3 class="widget-title">Recent Blog Posts</h3>
						<ul class="unstyled clearfix">
						<!-- Recent Post Widget Starts -->
						<li>
							<div class="posts-thumb pull-left"> 
								<a href="#">
									<img alt="img" src="{{asset('/images/cards.jpg')}}">
								</a>
							</div>
							<div class="post-info">
								<h4 class="entry-title">
									<a href="#">Risks & Rewards Of Investing In Bitcoin</a>
								</h4>
								<p class="post-meta">
									<span class="post-date"><i class="fa fa-clock-o"></i> January 19, 2021</span>
								</p>
							</div>
							<div class="clearfix"></div>
						</li>
						<!-- Recent Post Widget Ends -->
						<!-- Recent Post Widget Starts -->
						<li>
							<div class="posts-thumb pull-left"> 
								<a href="#">
									<img alt="img" src="{{asset('images/bitcoin.jpg')}}">
								</a>
							</div>
							<div class="post-info">
								<h4 class="entry-title">
									<a href="#">Cryptocurrency - Who Are Involved With It?</a>
								</h4>
								<p class="post-meta">
									<span class="post-date"> August 03, 2021</span>
								</p>
							</div>
							<div class="clearfix"></div>
						</li>
						<!-- Recent Post Widget Ends -->
						<!-- Recent Post Widget Starts -->
						<li>
							<div class="posts-thumb pull-left"> 
								<a href="#">
									<img alt="img" src="{{asset('images/apple.jpg')}}">
								</a>
							</div>
							<div class="post-info">
								<h4 class="entry-title">
									<a href="blog-post-light.html">How Cryptocurrency Begun and Its Impact</a>
								</h4>
								<p class="post-meta">
									<span class="post-date"> Sept 27, 2021</span>
								</p>
							</div>
							<div class="clearfix"></div>
						</li>
						<!-- Recent Post Widget Ends -->
						</ul>
					</div>
					<!-- Latest Posts Widget Ends -->
					<!-- Tags Widget Starts -->
					<div class="widget widget-tags">
						<h3 class="widget-title">Popular Tags </h3>
						<ul class="unstyled clearfix">
							<li><a href="#">currency</a></li>
							<li><a href="#">crypto</a></li>
							<li><a href="#">trading</a></li>
							<li><a href="#">wallet</a></li>
							<li><a href="#">mining</a></li>
							<li><a href="#">transaction</a></li>
							<li><a href="#">financial</a></li>
							<li><a href="#">security</a></li>
			            </ul>
					</div>
					<!-- Tags Widget Ends -->
				</div>
				<!-- Sidebar Ends -->
                </div>
            </div>
        </section>
        <!-- Section FAQ Ends -->
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
                                    <span>customer@mayorexchange.com</span>
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
                                <img src="{{asset('images/icons/payment/ae.jpg')}}" alt="american-express">
                                <img src="{{asset('images/icons/payment/mastercar.png')}}" alt="mastercard">
                                <img src="{{asset('images/icons/payment/visa.jpg')}}" alt="visa">
                                <img src="{{asset('images/icons/payment/paypall.png')}}" alt="paypal">
                                <img class="last" src="{{asset('images/icons/payment/maestroo.png')}}" alt="maestro">
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