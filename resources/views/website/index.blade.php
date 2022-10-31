<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
		<link rel="icon" href="images/favicon.png">
		<title>iQuest Agents Portal</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('website/css/framework7.bundle.min.css') }}">
		<link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('website/css/w3.css') }}">
	</head>
	<body>
		
		<div id="app">
			<div class="view view-main view-init" data-url="/">
				<div class="page page-home page-with-subnavbar">
					<div class="toolbar tabbar tabbar-labels toolbar-bottom">
						<div class="toolbar-inner">
							<a href="#tab-1" class="tab-link tab-link-active">
								<i class="fa fa-home"></i>
								<p>Home</p>
							</a>
							<a href="#tab-2" class="tab-link">
								<i class="fas fa-history"></i>
								<p>History</p>
							</a>
							<a href="#tab-3" class="tab-link">
								<i class="fas fa-wallet"></i>
								<p>Fund Wallet</p>
							</a>
							<a href="/livechat/" class="tab-link">
								<i class="fas fa-comment"></i>
								<p>Help</p>
							</a>
							<a href="#tab-5" class="tab-link">
								<i class="fas fa-user"></i>
								<p>Account</p>
							</a>
						</div>
					</div>
					

<div id="i1"style="display:none;" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

<div id="tab-8" class="tab page-content">
							<div class="navbar navbar-page">
								<div class="navbar-inner sliding">
									<div class="title tabs-text-center">
									        <span onclick="document.getElementById('i1').style.display='none'" class="w3-btn w3-ripple w3-xlarge w3-display-topright" title="Close Modal">&times;</span>
										Generate $500 Token
									</div>
								</div>
							</div>
							<!-- deposit -->
							<div class="deposit margin-top">
								<div class="container">
									<h5 class="text-center margin-bottom-small"><b style="color:#42abd8;">How Many Tokens Do You Want To Generate?</b></h5>
									<div class="background-white border-radius box-shadow content">
										<form method="POST" action="{{route('create.gst')}}">
											@csrf
											<input name="gst" type="number">
										
									</div>
									<div class="separator-small"></div>
									<h5 class="text-center margin-bottom-small">Total Cost</h5>
									<div class="row margin-bottom">
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box">
											
												<h6 class="font-weight-600">Current: ${{$user->point}}</h6>
											</div>
										</div>
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box border-active">
												
												<h6 class="font-weight-600">Cost * 400</h6>
											</div>
										</div>
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box">
												
												<h6 class="font-weight-600">Bal: ${{$user->point}} - T Cost</h6>
											</div>
										</div>
									</div>
									<button class="buttons buttons-full margin-top-small box-shadow">Proceed</button>
								</form>
								</div>
							</div>
							<!-- end deposit -->
							<div class="separator-bottom"></div>
						</div>

    </div>
  </div>



<div id="i5"style="display:none;" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

<div class="history margin-top">
								<div class="container">
								<span onclick="document.getElementById('i5').style.display='none'" class="w3-btn w3-ripple w3-xlarge w3-display-topright" title="Close Modal">&times;</span>
									<div class="separator-small"></div>
									<h5 class="margin-bottom-small">February</h5>
									@foreach($user->token as $token)
									<div class="background-white box-shadow border-radius padding-box-middle">
										<div class="float-left margin-right-middle">
											<span class="icon-big icon-color-yellow">
												<i class="fa fa-lightbulb"></i>
											</span>
										</div>
										<div class="overflow-hidden">
											<span>22 February 2020</span>
											<h6 class="margin-bottom-5px">{{$token->access_token}}</h6>
											<h4>{{$token->created_at}}</h4>
										</div>
									</div>
									<div class="separator-small"></div>
									@endforeach
									<div class="separator-bottom"></div>
								</div>
							</div>
							
		</div>
</div>






<div id="i2"style="display:none;" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

<div id="tab-7" class="tab page-content">
							<div class="navbar navbar-page">
								<div class="navbar-inner sliding">
									<div class="title tabs-text-center">
									        <span onclick="document.getElementById('i2').style.display='none'" class="w3-btn w3-ripple w3-xlarge w3-display-topright" title="Close Modal">&times;</span>
										Generate $1000 Token
									</div>
								</div>
							</div>
							<!-- deposit -->
							<div class="deposit margin-top">
								<div class="container">
									<h5 class="text-center margin-bottom-small"><b style="color:#42abd8;">How Many Tokens Do You Want To Generate?</b></h5>
									<div class="background-white border-radius box-shadow content">
										<form method="POST" action="{{route('create.fst')}}">
											@csrf
											<input name="fst" type="number">
									</div>
									<div class="separator-small"></div>
									<h5 class="text-center margin-bottom-small">Total Cost</h5>
									<div class="row margin-bottom">
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box">
											
												<h6 class="font-weight-600">Bal: ${{$user->point}}</h6>
											</div>
										</div>
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box border-active">
												
												<h6 class="font-weight-600">Cost * 800</h6>
											</div>
										</div>
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box">
												
												<h6 class="font-weight-600">Bal: ${{$user->point}} - T Cost</h6>
											</div>
										</div>
									</div>
									<button class="buttons buttons-full margin-top-small box-shadow">Proceed</button>
								</form>
								</div>
							</div>
							<!-- end deposit -->
							<div class="separator-bottom"></div>
						</div>
						

          </div>
  </div>





			

<div id="i3"style="display:none;" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
<div id="tab-6" class="tab page-content">
							<div class="navbar navbar-page">
								<div class="navbar-inner sliding">
									<div class="title tabs-text-center">									       
									 <span onclick="document.getElementById('i3').style.display='none'" class="w3-btn w3-ripple w3-xlarge w3-display-topright" title="Close Modal">&times;</span>
										Deposit To Your wallet
									</div>
								</div>
							</div>
							<!-- deposit -->
							<div class="deposit margin-top">
								<div class="container">
									<h5 class="text-center margin-bottom-small">Amount $</h5>
									<div class="background-white border-radius box-shadow content">
										<form id="paymentForm">
											<input id="amount-fund" name="amount" type="number">
											<input id="email-address" value="{{ $user->email}}" name="email" type="hidden">
											<input name="id" id="id" value="{{ $user->id}}" type="hidden">
										
									</div>
									<div class="separator-small"></div>
									<h5 class="text-center margin-bottom-small">Pay with</h5>
									<div class="row margin-bottom">
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box">
												<span class="icon-big icon-color-red">
													<i class="fa fa-university"></i>
												</span>
												<h6 class="font-weight-600">Bank</h6>
											</div>
										</div>
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box border-active">
												<span class="icon-big fa-stack  icon-color-blue">
													<i class="fab fa-cc-paypal"></i>
												</span>
												<h6 class="font-weight-600">Paystack</h6>
											</div>
										</div>
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box">
												<span class="icon-big fa-stack icon-color-orange">
													<i class="fab fa-cc-stripe "></i>
												</span>
												<h6 class="font-weight-600">Stripe</h6>
											</div>
										</div>
									</div>
									<button type="submit" onclick="payWithPaystack()" class="buttons buttons-full margin-top-small box-shadow">Process</button>
								</form>
								</div>
							</div>
							<!-- end deposit -->
							<div class="separator-bottom"></div>
						</div>
						
    </div>
  </div>






<div id="i4"style="display:none;" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

<div id="tab-8" class="tab page-content">
							<div class="navbar navbar-page">
								<div class="navbar-inner sliding">
									<div class="title tabs-text-center">
									        <span onclick="document.getElementById('i4').style.display='none'" class="w3-btn w3-ripple w3-xlarge w3-display-topright" title="Close Modal">&times;</span>
										As of Today, <?php echo date("l jS \of F Y"); ?>
									</div>
								</div>
							</div>
							<!-- deposit -->
							<div class="deposit margin-top">
								<div class="container">
									<h5 class="text-center margin-bottom-small">Your Balance is</h5>
									<div style="padding:15px;" class="background-white text-center border-radius box-shadow content">
									<br>
							<h4>	${{$user->point}} </h4>
									</div>
									<div class="separator-small"></div>
									<button class="buttons buttons-full margin-top-small box-shadow">Fund Your Wallet </button>
								</form>
								</div>
							</div>
							<!-- end deposit -->
							<div class="separator-bottom"></div>
						</div>
						

          </div>
  </div>







					<!-- tabs -->
					<div class="tabs-animated-wrap">
					<div class="tabs">
						
						<!-- tabs 1 -->
						<div id="tab-1" class="tab tab-active page-content">
							
							<!-- title -->
							<div class="title-apps padding-middle background-primer">
								<div class="container">
									<div class="row row-no-margin-bottom">
										<div class="col">
											<h3 class="color-white">Summer Pay</h3>
										</div>
										<div class="col">
											<a href="/notification/">
												<span class="icon-middle margin-left-small float-right color-white">
													<i class="fas fa-bell"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- end title -->
							
							<!-- profile balance -->
							<div class="border-radius-style background-circle background-primer">
								<div class="container">
									<div class="background-white border-radius padding-box-middle box-shadow">
										<div class="row row-no-margin-bottom">
											<div class="col-60">
												<div class="float-left margin-right-small">
												 <div class="w3-dropdown-hover">
												 	<img class="people" src="{{ asset('website/images/author.jpg') }}" alt="">
													<div class="w3-dropdown-content w3-bar-block w3-card-4">
													<div class="w3-card-4"style="width:100%">
													<div class="w3-display-container w3-text-white">
													<img src="{{ asset('website/images/author.jpg') }}" alt="profile pic" style="width:100%">
													<div class="w3-xlarge w3-display-bottomleft w3-padding">{{$user->name}}</div>
													</div>
													<div class="w3-row">     
													<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <button class="w3-button w3-block w3-red">Logout</button>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
													</div>
													</div>
													</div>
													</div>
																								</div>
												<div class="overflow-hidden">
													<h6>{{{$user->name}}}</h6>
													<p>{{$user->email}}</p>
												</div>
											</div>
											<div class="col-40">
												<button class="buttons float-right letter-spacing margin-top-small">
												$ {{$user->point}}</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end profile balance -->
							
							<!-- separator -->
							<div class="separator"></div>
							<!-- end separator -->
							<!-- menus -->
							<div class="menus">
								<div class="container">
									<div class="row">
										<div class="col">
											<a onclick="document.getElementById('i3').style.display='block'">
												<div class=" w3-ripple background-white text-center border-radius padding-box box-shadow">
													<span class="icon-big icon-color-green"><i class="fa fa-arrow-alt-circle-down"></i></span>
													<h6 class="font-weight-500">Fund Wallet</h6>
												</div>
											</a>
										</div>

										<div class="col">
											<a onclick="document.getElementById('i4').style.display='block'">
												<div class="background-white text-center border-radius padding-box box-shadow">
													<span class="icon-big icon-color-purple"><i class="fa fa-gift"></i></span>
													<h6 class="font-weight-500">Check Balance</h6>
												</div>
											</a>
										</div>
									</div>
									
                                    <div class="row">
										<div class="col">
											<a 
											@if ($user->point <= 399)
											onclick="document.getElementById('i3').style.display='block'"
											@endif
											onclick="document.getElementById('i1').style.display='block'">
												<div class="background-white text-center border-radius padding-box box-shadow">
													<span class="icon-big icon-color-yellow"><i class="fa fa-wallet"></i></span>
													<h6 class="font-weight-500">Generate Gift Token</h6>
												</div>
											</a>
										</div>

										<div class="col">
											<a 
											@if ($user->point <= 399)
											onclick="document.getElementById('i3').style.display='block'"
											@endif
											onclick="document.getElementById('i2').style.display='block'">
												<div class="background-white text-center border-radius padding-box box-shadow">
													<span class="icon-big icon-color-teal"><i class="fa fa-university"></i></span>
													<h6 class="font-weight-500">Transfer Money</h6>
												</div>
											</a>
										</div>
									</div>
									  <div class="row">
										<div class="col">
											<a 
											{{-- @if ($user->point <= 399)
											onclick="document.getElementById('i3').style.display='block'"
											@endif --}}
											onclick="document.getElementById('i5').style.display='block'">
												<div class="background-white text-center border-radius padding-box box-shadow">
													<span class="icon-big icon-color-blue"><i class="fa fa-eye"></i></span>
													<h6 class="font-weight-500">See Your Tokens</h6>
												</div>
											</a>
										</div>

										<div class="col">
											<a 
											@if ($user->point <= 399)
											onclick="document.getElementById('i3').style.display='block'"
											@endif
											onclick="document.getElementById('i2').style.display='block'">
												<div class="background-white text-center border-radius padding-box box-shadow">
													<span class="icon-big icon-color-orange"><i class="fa fa-phone"></i></span>
													<h6 class="font-weight-500">Contact Summer Pay</h6>
												</div>
											</a>
										</div>
									</div>
								
								</div>
							</div>
							<!-- end menus -->
							<!-- separator -->
							<div class="separator"></div>
							<!-- end separator -->
							<!-- follow us -->
							<div class="container">
								<div class="background-white border-radius box-shadow padding-box-middle text-center">
									<h4 class="margin-bottom-small">Follow us on :</h4>
									<ul>
										<li>
											<a href=""><span class="icon-small icon-width socmed-bg-facebook color-white">
												<i class="fab fa-facebook-f"></i>
											</span></a>
										</li>
										<li>
											<a href=""><span class="icon-small icon-width socmed-bg-twitter color-white">
												<i class="fab fa-twitter"></i>
											</span></a>
										</li>
										<li>
											<a href=""><span class="icon-small icon-width socmed-bg-whatsapp color-white">
												<i class="fab fa-whatsapp"></i>
											</span></a>
										</li>
										<li>
											<a href=""><span class="icon-small icon-width socmed-bg-google color-white">
												<i class="fab fa-google"></i>
											</span></a>
										</li>
									</ul>
								</div>
							</div>
							<!-- end follow us -->
							<!-- separator -->
							<div class="separator-bottom"></div>
							<!-- end separator -->
						</div>
						<!-- end tabs 1 -->
						<!-- tabs 2 -->
						<div id="tab-2" class="tab page-content">
							<div class="navbar navbar-page">
								<div class="navbar-inner sliding">
									<div class="title tabs-text-center">
										History
									</div>
								</div>
							</div>
							<!-- history -->
							<div class="history margin-top">
								<div class="container">
									<h5 class="margin-bottom-small">March</h5>
									<div class="background-white box-shadow border-radius padding-box-middle">
										<div class="float-left margin-right-middle">
											<span class="icon-big icon-color-green">
												<i class="fa fa-wallet"></i>
											</span>
										</div>
										<div class="overflow-hidden">
											<span>20 March 2020</span>
											<h6 class="margin-bottom-5px">Deposit</h6>
											<h4>$350</h4>
										</div>
									</div>
									<div class="separator-small"></div>
									<div class="background-white box-shadow border-radius padding-box-middle">
										<div class="float-left margin-right-middle">
											<span class="icon-big icon-color-pink">
												<i class="fa fa-donate"></i>
											</span>
										</div>
										<div class="overflow-hidden">
											<span>05 March 2020</span>
											<h6 class="margin-bottom-5px">Donation to <span><a href="" class="color-primer">Health Foundation</a></span></h6>
											<h4>$50</h4>
										</div>
									</div>
									<div class="separator-small"></div>
									<h5 class="margin-bottom-small">February</h5>
									<div class="background-white box-shadow border-radius padding-box-middle">
										<div class="float-left margin-right-middle">
											<span class="icon-big icon-color-yellow">
												<i class="fa fa-lightbulb"></i>
											</span>
										</div>
										<div class="overflow-hidden">
											<span>22 February 2020</span>
											<h6 class="margin-bottom-5px">Electricity</h6>
											<h4>$25</h4>
										</div>
									</div>
									<div class="separator-small"></div>
									<div class="background-white box-shadow border-radius padding-box-middle">
										<div class="float-left margin-right-middle">
											<span class="icon-big icon-color-purple">
												<i class="fa fa-arrow-alt-circle-down"></i>
											</span>
										</div>
										<div class="overflow-hidden">
											<span>18 February 2020</span>
											<h6 class="margin-bottom-5px">Withdraw</h6>
											<h4>$100</h4>
										</div>
									</div>
									<div class="separator-small"></div>
									<div class="background-white box-shadow border-radius padding-box-middle">
										<div class="float-left margin-right-middle">
											<span class="icon-big icon-color-red">
												<i class="fa fa-redo"></i>
											</span>
										</div>
										<div class="overflow-hidden">
											<span>11 February 2020</span>
											<h6 class="margin-bottom-5px">Transfer to <span><a href="" class="color-primer">@johndoe66</a></span></h6>
											<h4>$30</h4>
										</div>
									</div>
									<div class="separator-bottom"></div>
								</div>
							</div>
							<!-- end history -->
						</div>
						<!-- end tabs 2 -->
						<!-- tabs 3 -->
						<div id="tab-3" class="tab page-content">
							<div class="navbar navbar-page">
								<div class="navbar-inner sliding">
									<div class="title tabs-text-center">
										Deposit
									</div>
								</div>
							</div>
							<!-- deposit -->
							<div class="deposit margin-top">
								<div class="container">
									<h5 class="text-center margin-bottom-small">Amount $</h5>
									<div class="background-white border-radius box-shadow content">
										<form action="#">
											<input type="number">
										</form>
									</div>
									<div class="separator-small"></div>
									<h5 class="text-center margin-bottom-small">Pay with</h5>
									<div class="row margin-bottom">
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box">
												<span class="icon-big icon-color-red">
													<i class="fa fa-university"></i>
												</span>
												<h6 class="font-weight-600">Bank</h6>
											</div>
										</div>
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box border-active">
												<span class="icon-big fa-stack  icon-color-blue">
													<i class="fab fa-cc-paypal"></i>
												</span>
												<h6 class="font-weight-600">Paystack</h6>
											</div>
										</div>
										<div class="col">
											<div class="background-white border-radius box-shadow text-center padding-box">
												<span class="icon-big fa-stack icon-color-orange">
													<i class="fab fa-cc-stripe "></i>
												</span>
												<h6 class="font-weight-600">Stripe</h6>
											</div>
										</div>
									</div>
									<button class="buttons buttons-full margin-top-small box-shadow">Process</button>
								</div>
							</div>
							<!-- end deposit -->
							<div class="separator-bottom"></div>
						</div>
						<!-- end tabs 3 -->
						<!-- tabs 5 -->
						<div id="tab-5" class="tab page-content">
							<div class="navbar navbar-page">
								<div class="navbar-inner sliding">
									<div class="title tabs-text-center">
										Account
									</div>
								</div>
							</div>
							<!-- account -->
							<div class="list-pages account-list">
								<div class="background-circle">
									<div class="container">
										<div class="background-white border-radius padding-box-middle box-shadow">
											<div class="row row-no-margin-bottom">
												<div class="col-60">
													<div class="float-left margin-right-small">
														<img class="people" src="images/author.jpg" alt="">
													</div>
													<div class="overflow-hidden">
														<h6>John Doe</h6>
														<p>@johndoe97</p>
													</div>
												</div>
												<div class="col-40">
													<button class="buttons float-right letter-spacing margin-top-small">$ 650</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="separator-small"></div>
								<div class="container">
									<ul>
										<li>
											<a class="border-radius box-shadow" href="/deposit/">
												<span class="margin-right-small icon-small icon-color-purple"><i class="fa fa-wallet"></i></span> Deposit <span class="float-right"><i class="fa fa-chevron-right"></i></span>
											</a>
										</li>
										<li>
											<a class="border-radius box-shadow" href="/history/">
												<span class="margin-right-small icon-small icon-color-red"><i class="fa fa-history"></i></span> History <span class="float-right"><i class="fa fa-chevron-right"></i></span>
											</a>
										</li>
										<li>
											<a class="border-radius box-shadow" href="/notification/">
												<span class="margin-right-small icon-small icon-color-purple"><i class="fa fa-bell"></i></span> Notification <span class="float-right"><i class="fa fa-chevron-right"></i></span>
											</a>
										</li>
										<li>
											<a class="border-radius box-shadow" href="/livechat/">
												<span class="margin-right-small icon-small icon-color-green"><i class="fa fa-comments"></i></span> Live Chat <span class="float-right"><i class="fa fa-chevron-right"></i></span>
											</a>
										</li>
										<li>
											<a class="border-radius box-shadow" href="/about-us/">
												<span class="margin-right-small icon-small icon-color-lime"><i class="fa fa-star"></i></span> About us <span class="float-right"><i class="fa fa-chevron-right"></i></span>
											</a>
										</li>
										<li>
											<a class="border-radius box-shadow" href="/contact-us/">
												<span class="margin-right-small icon-small icon-color-green"><i class="fa fa-envelope"></i></span> Contact us <span class="float-right"><i class="fa fa-chevron-right"></i></span>
											</a>
										</li>
										<li>
											<a class="border-radius box-shadow" href="/logout/">
												<span class="margin-right-small icon-small icon-color-orange"><i class="fa fa-power-off"></i></span> Logout <span class="float-right"><i class="fa fa-chevron-right"></i></span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- end account -->
							<div class="separator-bottom"></div>
						</div>
						<!-- end tabs 5 -->
					</div>
					</div>
					<!-- end tabs -->
				</div>
			</div>
		</div>
		<!-- script -->
		<script src="{{ asset('website/js/framework7.bundle.min.js') }}"></script>
		<script src="{{ asset('website/js/routes.js') }}"></script>
		<script src="{{ asset('website/js/app.js') }}"></script>
		<script src="https://js.paystack.co/v1/inline.js"></script> 
		
		
		<script>

const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_51661306f2aef4a4c10c5730738c05b37dd4313d', // Replace with your public key
    email: document.getElementById('email-address').value,
    amount: document.getElementById('amount-fund').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){

      let message = 'Payment complete! Reference: ' + response.reference;
        window.location = '/confirm/'  + response.reference;
    }
  });
  handler.openIframe();
}
		
		</script>
		
		
		<!-- end script -->
	</body>
</html>