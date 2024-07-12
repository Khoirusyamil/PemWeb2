<x-auth-session-status class="mb-4" :status="session('status')" />
    <head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('signup/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('signup/images/background.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Rental Mobil
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('register') }}">
                @csrf

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name">
						<span class="focus-input100 ml-2" data-placeholder="&#xe82a;"></span>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" id="password" name="password" required autocomplete="new-password" placeholder="Password">
						<span class="focus-input100 ml-2" data-placeholder="&#xe80f;"></span>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
					</div>

                    <div class="wrap-input100 validate-input ml-4">
                        <a href="{{ route('login') }}">
                            Have Account?Login Here...
                        </a>
                    </div>

                    <!-- Remember Me -->
                    <!-- <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div> -->

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('signup/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signup/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signup/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('signup/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signup/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signup/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('signup/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signup/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signup/js/main.js')}}"></script>

</body>

