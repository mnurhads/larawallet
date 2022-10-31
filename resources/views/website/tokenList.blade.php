<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
		<link rel="icon" href="images/favicon.png">
		<title>Tokens | iQuest Agents Portal</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('website/css/framework7.bundle.min.css') }}">
		<link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('website/css/w3.css') }}">
	</head>
	<body>
		<div class="container">
									<div class="separator-small"></div>
                                                  
									<h5 class="margin-bottom-small">See Your Tokens Here</h5>
									@foreach($users->token as $token)
									<div class="background-white box-shadow border-radius padding-box-middle">
										<div class="float-left margin-right-middle">
											<span class="icon-big icon-color-yellow">
												<i class="fa fa-lightbulb"></i>
											</span>
										</div>
                                                               
										<div class="overflow-hidden"> 
                                                            @if (count($tokens->access_token) < 1)
											<span>No Tokens</span>
                                                            @else
											<span>22 February 2020</span>
											<h6 class="margin-bottom-5px">{{$token->access_token}}</h6>
											<h4>{{$token->created_at}}</h4>
                                                                  @endif
										</div>
									</div>
									<div class="separator-small"></div>
									@endforeach
									<div class="separator-bottom"></div>
								</div>


		<script src="{{ asset('website/js/framework7.bundle.min.js') }}"></script>
		<script src="{{ asset('website/js/routes.js') }}"></script>
		<script src="{{ asset('website/js/app.js') }}"></script>