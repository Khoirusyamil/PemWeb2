
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('frontend/login/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url(frontend/login/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #10</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form method="POST" class="signin-form" action="{{ route('login') }}">
                  @csrf
                    <div class="form-group">
                    <input id="email" type="email" class="form-control" placeholder="Email" 
                        name="email"
                        required autocomplete="email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
	            <div class="form-group">
	                <input id="password" type="password" class="form-control" placeholder="Password" 
                        name="password"
                        required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">{{ __('Log in') }}</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label for="remember_me" class="checkbox-wrap checkbox-primary">
								<input id="remember_me" type="checkbox" name="remember" checked>
							    <span class="checkmark">{{ __('Remember me') }}</span>
						</label>
					</div>
					<div class="w-50 text-md-right">
                    @if (Route::has('password.request'))
						<a href="#" style="color: #fff">{{ __('Forgot your password?') }}</a>
                    @endif
				    </div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('frontend/login/js/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/login/js/popper.js')}}"></script>
  <script src="{{ asset('frontend/login/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/login/js/main.js')}}"></script>

	</body>
