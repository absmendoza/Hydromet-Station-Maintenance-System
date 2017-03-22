<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
	@include('includes.head')

</head>
<body class="white">
	@include('includes.loading')

	<center>
	<div class="white loaded" style="width: 301px; padding: 25px 0">
		<div id="login-page" class="row">
			<div class="col s12 z-depth-4 card-panel">
				<form class="login-form" role="form" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col s12 center">
							<a href="/"><img src="images/favicon/icon-152x152.png" alt="logo" class="square responsive-img valign profile-image-login"></a>
							<p class="center login-form-text">Sign in to Hydromet Station Maintenance System</p>
			  			</div>
					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		  				<div class="input-field col s12">
							<i class="mdi-social-person-outline prefix"></i>
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
							<label for="email" class="center-align">E-Mail Address</label>
								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
		  				</div>
					</div>
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		  				<label for="password">Password</label>
		  				<div class="input-field col s12">
							<i class="mdi-action-lock-outline prefix"></i>
							<input id="password" type="password" class="form-control" name="password" required>
								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
		  				</div>
					</div>
					<div class="row">          
					  	<div class="input-field col s12 m12 l12  login-text">
						  	<input type="checkbox" id="remember-me" />
							<label>
								<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
							</label>
					  	</div>
					</div>
					<div class="row">
		  				<div class="input-field col s12">
							<a href="/" class="btn waves-effect waves-light col s12">Login</a>
		  				</div>
					</div>
					<div class="row">
		  				<div class="input-field col s6 m6 l6">
			  				<p class="margin right-align medium-small"><a href="{{ route('password.request') }}">Forgot password ?</a></p>
		  				</div>          
					</div>
	  			</form>
			</div>
  		</div>
	</div>
	</center>

 	@include('include.end')
</body>
</html>