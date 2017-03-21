<!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 3.1
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Hydromet Station Maintenance System</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/icon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>
<body class="white">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->


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



 <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
       

     <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>

</body>

</html>