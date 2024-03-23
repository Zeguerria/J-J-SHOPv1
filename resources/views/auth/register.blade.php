{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name"  id="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input class="block mt-1 w-full" type="email"  id="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="prenom" value="{{ __('Prenom') }}" />
                <x-input  class="block mt-1 w-full" type="text" name="prenom" id="prenom" :value="old('prenom')" required autocomplete="prenom" />
            </div>
o
            <div class="mt-4">
                <x-label for="pseudo" value="{{ __('Pseudo') }}" />
                <x-input id="pseudo" class="block mt-1 w-full" type="text" name="pseudo" :value="old('peudo')" required autocomplete="pseudo" />
            </div>
            o
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Telephone') }}" />
                <x-input  class="block mt-1 w-full" type="text" id="phone" name="phone" :value="old('phone')" required autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-label for="quartier" value="{{ __('Quartier') }}" />
                <x-input  class="block mt-1 w-full" type="text" id="quartier" name="quartier" :value="old('quartier')" required autocomplete="quartier" />
            </div>
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input  class="block mt-1 w-full" id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Creer Compte</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('registers/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('registers/css/style.css')}}">
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="{{asset('registers/images/ch1.jpg')}}" alt="">
			</div>
			<div class="form-inner" >

                <div class="container-fluid">
				<form method="POST" action="{{ route('register') }}">
                    @csrf
					<div class="form-header">
						<h3><span style="color : #00E8FC; weight: 900;">S</span>'</span class="" style="font-family: arial;">i</span>nscrire</h3>
						<img src="{{asset('registers/images/sign-up.png')}}" alt="" class="sign-up-icon">
					</div>
                    <div class="container-fluid">
                        <x-validation-errors class="mb-4" />
                    <div class="row">
                        <div class="">
                            <div class="form-group">
                                <label for="name">Nom :</label>
                                <input type="text" class="form-control" data-validation="length" data-validation-length="3-12"  name="name"  id="name" :value="old('name')" required autofocus autocomplete="name" >
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <label for="prenom">Prénom :</label>
                                <input type="text" class="form-control" data-validation="length" data-validation-length="3-12" name="prenom" id="prenom" :value="old('prenom')" required autocomplete="prenom">
                            </div>

                        </div>
                        <div class="">
                            <div class="form-group">
                                <label for="phone">Numréro de Telephone :</label>
                                <input type="text" class="form-control" data-validation="length alphanumeric" data-validation-length="8-18" id="phone" name="phone" :value="old('phone')" required autocomplete="phone">
                            </div>

                        </div>
                        <div class="">
                            <div class="form-group">
                                <label for="quartier">Quartier :</label>
                                <input type="text" class="form-control" data-validation="length alphanumeric" data-validation-length="3-18" id="quartier" name="quartier" :value="old('quartier')" required autocomplete="quartier">
                            </div>

                        </div>

                    </div>
                </div>



					<div class="form-group">
						<label for="">E-mail :</label>
						<input class="form-control" data-validation="email" type="email"  id="email" name="email" :value="old('email')" required autocomplete="email">
					</div>
					<div class="form-group" >
						<label for="password">Password:</label>
						<input type="password" class="form-control" data-validation="length" data-validation-length="min8" id="password"  name="password" required autocomplete="new-password">
					</div>
                    <div class="form-group" >
						<label for="">Confirmez Password :</label>
						<input type="password" class="form-control" data-validation="length" data-validation-length="min8" type="password" name="password_confirmation" required autocomplete="new-password">
					</div>
                    <div class="">
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>

                        @endif

                    </div>
					<button>Creer</button>
                    <div >
                        <label class="pt-4 lebtn">
                            J'ai déja un compte me
                            <a class="btn" href="{{ route('login') }}" style="color : #00E8FC; weight: 900;">connecter</a>
                        </label>
                    </div>
					<div class="socials">
						<p>Nous Contacter</p>
						<a href="#" class="socials-icon">
							<i class="zmdi zmdi-facebook"></i>
						</a>
						<a href="#" class="socials-icon">
							<i class="zmdi zmdi-instagram"></i>
						</a>
						<a href="#" class="socials-icon">
							<i class="zmdi zmdi-twitter"></i>
						</a>
						<a href="#" class="socials-icon">
							<i class="zmdi zmdi-tumblr"></i>
						</a>
					</div>
				</form>
            </div>
			</div>

		</div>

		<script src="{{asset('registers/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('registers/js/jquery.form-validator.min.js')}}"></script>
		<script src="{{asset('registers/js/main.js')}}"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
