{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<title>J&J-Shop : Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('logins/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logins/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logins/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logins/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('logins/css/main.css')}}">
<!--===============================================================================================-->
<style>
    .back-video{
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* position: fixed; */
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      /* z-index: -1; */

    }
    .section-title {
         text-align: center;
         padding: 30px 0;
        /* position: relative; */
        position: absolute;
        top: 25%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }
</style >
</head>
<body class="">
	<div class="limiter bdy">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class=" mage" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="banner">
                                <video autoplay muted loop plays-inline class="back-video "> <source src="{{asset('logins/images/deo.mp4')}}" type="video/mp4"  ><h1>dddd</h1>
                                </video>
                            </div>
                            <div class="section-title">
                                @if (session('status'))
                                    <span class="login100-form-title-1">
                                       {{ session('status') }}
                                    </span>
                                @else
                                    <span class="login100-form-title-1" style="color: #2AA0B0">
                                       Login
                                    </span>

                                @endif


                            </div>
                        </div>
                    </div>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100" for="email">Email</span>
						<input class="input100" type="email" name="email" id="email" placeholder="Enter Email" :value="old('email')" required autofocus autocomplete="username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100" for="password">Password</span>
						<input class="input100" type="password" name="password"  id="password" name="password" required autocomplete="current-password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30 pt-2">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="remember" type="checkbox" id="remember_me" name="remember">
							<label class="label-checkbox100" for="remember">
								Remember me
							</label>
						</div>
                        @if (Route::has('password.request'))
                            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                               {{ __('Forgot your password?') }}
                            </a> --}}
                            <div class="pt-2">
                                <a href="{{ route('password.request') }}" class="txt1">
                                    Forgot Password ?
                                </a>
                            </div>
                        @endif
					</div>

					<div class="container-login100-form-btn justify-content-center ">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="{{asset('logins/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logins/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logins/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('logins/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logins/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logins/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('logins/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logins/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logins/"js/main.js')}}"></script>

</body>
</html>


