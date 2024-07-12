
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset ('template_log/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #08</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Have an account?</h3>
						<form action="{{ route('login') }}" method="POST" class="login-form">
                            @csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" id="email" name="email" placeholder="Email" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
		      		</div>
	                <div class="form-group d-flex">
	                    <input type="password" class="form-control rounded-left" id="password" name="password" placeholder="Password" required>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
	                </div>
                    
	            <div class="form-group d-md-flex">
                    <div class="w-50">
                        <label for="remember_me" class="checkbox-wrap checkbox-primary">{{ __('Remember me') }}
                        <input id="remember_me" type="checkbox" name="remember">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    
                    <div class="w-50 text-md-right">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('template_log/js/jquery.min.js')}}"></script>
  <script src="{{asset('template_log/js/popper.js')}}"></script>
  <script src="{{asset('template_log/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('template_log/js/main.js')}}"></script>

	</body>
