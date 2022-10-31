
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
		<link rel="icon" href="images/favicon.png">
		<title>iQuest - Fund Wallet</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('website/css/framework7.bundle.min.css') }}">
		<link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
	</head>


<div class="page">
	<div class="navbar navbar-page">
		<div class="navbar-inner sliding">
			<div class="left">
				<a href="#" class="link back">
					<i class="fa fa-chevron-left"></i>
				</a>
			</div>
			<div class="title">
				Deposit
			</div>
		</div>
	</div>
	<div class="page-content">
		<!-- deposit -->
		<div class="deposit margin-pages">
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
	</div>
</div>

		<!-- script -->
		<script src="{{ asset('website/js/framework7.bundle.min.js') }}"></script>
		<script src="{{ asset('website/js/routes.js') }}"></script>
		<script src="{{ asset('website/js/app.js') }}"></script>
		<!-- end script -->