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
    <!-- 
	@include('includes.loading')
     -->

    <center>
    <div class="white loaded" style="width: 301px; padding: 25px 0">
        <div id="login-page" class="row">
            <div class="col s12 z-depth-4 card-panel">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="input-field col s12 center">
                            <a href="/"><img src="{{ asset('images/favicon/icon-152x152.png') }}" alt="logo" class="square responsive-img valign profile-image-login"></a>
                            <p class="center login-form-text">Reset Password</p>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="login-form" role="form" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="row margin{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-field col s12">
                                    <i class="mdi-social-person-outline prefix"></i>
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="input-field col s12">
                                    <button type="submit" class="btn waves-effect waves-light col s12">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </center>

    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
       
     <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>

</body>

</html>
