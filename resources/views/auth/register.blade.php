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

<div class="page">
	<div class="page-content">
		
		<!-- login register -->
		<div class="login-register">
			<div class="link-closess">
				<a href="#" class="link back float-right">
					<i class="fa fa-times"></i>
				</a>
			</div>
			<div class="container">
				<h1 class="color-primer text-center">iQuest</h1>
				<div class="separator"></div>
				<form method="POST" class="margin-bottom" action="{{ route('register') }}">
                        @csrf 

                                <input id="name" placeholder="Full Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        

                       
                       <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            

                        
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           


                       
                        <input id="password-confirm" placeholder="confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
					<p class="text-center margin-bottom-middle">Have an account? <a onclick="window.location = '/login'">Login Now</a></p>
					<h3><button type="submit" class="buttons buttons-center buttons-full box-shadow">Register</button></h3>
				</form>
			</div>
			<div class="separator-small"></div>
			
			
		</div>
		<!-- end login register -->
	</div>
</div>


		<!-- script -->
		<script src="{{ asset('website/js/framework7.bundle.min.js') }}"></script>
		<script src="{{ asset('website/js/routes.js') }}"></script>
		<script src="{{ asset('website/js/app.js') }}"></script>
		<!-- end script -->
	</body>
</html>