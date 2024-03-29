<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('authen/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('authen/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('authen/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('authen/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('authen/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('authen/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('authen/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('authen/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('authen/images/img-01.png') }}" alt="IMG">
				</div>


				<form class="login100-form validate-form" method="POST" action="{{route('password.email')}}">
                    @csrf
					<span class="login100-form-title">
					   Forgot your password
					</span>

					<h5> No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h5><br>
					<p> <x-auth-session-status class="mb-4 text-success" :status="session('status')" /> </p>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						Forgot
						</button>
					</div>

                    <div class="text-center p-t-136">
						<a class="txt2" href="{{route('login')}}">
						login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                    </div>
                </form>

			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{ asset('authen/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('authen/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('authen/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('authen/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('authen/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('authen/js/main.js') }}"></script>

</body>
</html>
