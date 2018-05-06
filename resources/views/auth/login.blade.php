
<!-------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html class="full" lang="en">
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="http://www.tacitapp.com/dermazone/favicon.ico">
	<title>Tacit</title>

	<!-- Bootstrap Core CSS -->
	<link media="all" type="text/css" rel="stylesheet" href="./Tacit_login_files/bootstrap.min.css">

	<link media="all" type="text/css" rel="stylesheet" href="./Tacit_login_files/bootstrap-datetimepicker.min.css">

	<link media="all" type="text/css" rel="stylesheet" href="./Tacit_login_files/mediaqueries.css">

	<link media="all" type="text/css" rel="stylesheet" href="./Tacit_login_files/mediaqueries2.css">

	<link media="all" type="text/css" rel="stylesheet" href="./Tacit_login_files/tinydropdown.css">

	<link media="all" type="text/css" rel="stylesheet" href="./Tacit_login_files/custom.css">
	

    </head>
<body class="fulllogin">

<div class="container page-login">
	
    <div class="row">
        <div class="col-md-12 col-xs-12"><img src="./Tacit_login_files/logo.png" border="0" alt=""></div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12 loginshape" id="loginpart">
            <div class="col-md-12 col-xs-12 toppart text-center">
                Login To Your Account
            </div>
            <div class="col-md-12 col-xs-12 text-center">

                
                

                
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                     <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>


                <div class="input-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>


                <div style="margin-top:10px" class="form-group">

                    <div class="col-sm-7 text-left"><br>
                        <a href="javascript:;" id="forgeturpass" class="checklable">Forget Your Password</a>


                    </div>
                    <!-- Button -->
                    <div class="col-sm-5 controls text-right">
                        <button class="btn btn-primary buttonAllSite" type="submit">Login</button>


                    </div>
                </div>

                </form>


            </div>
        </div><!-- ./login Part -->

        <div class="col-md-12 col-xs-12 loginshape" id="forgetpart" style="display: none;">
            <div class="col-md-12 col-xs-12 toppart text-center">
                Forget Your Password

            </div>
            <div class="col-md-12 col-xs-12 text-center">

                <form method="POST" action="http://www.tacitapp.com/dermazone/login" accept-charset="UTF-8" class="form-horizontal" id="frogetpasswordform"><input name="_token" type="hidden" value="Ibpmf8AlpQAATclYSFFOdCuRhc0juv9Zpx3Xo42w">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="login-username" type="text" class="form-control" name="identifier" value="" placeholder="username or email">
                    </div>


                    <div style="margin-top:70px" class="form-group">

                        <!-- Button -->
                        <div class="col-sm-12 controls text-right">
                            <button class="btn btn-primary buttonAllSite2" type="submit">Resend Password</button>


                        </div>
                    </div>


                </form>


            </div>
        </div>

        <div class="col-md-12 col-xs-12 text-left loginfooterpart"><img src="./Tacit_login_files/loginbutton.png" border="0" alt=""></div>
    </div>

</div><!-- ./Forget Password Part -->



<script src="./Tacit_login_files/jquery-1.11.0.js"></script>

<script src="./Tacit_login_files/bootstrap.min.js"></script>

<script type="text/javascript">


	$(document).ready(function(){

		$("#forgetpart").css({'display':'none'});

		$("#forgeturpass").click(function(){
			$("#forgetpart").fadeIn();
			$("#loginpart").css({'display':'none'});
		});

	});


</script>
<div class="loader"></div>

</body></html>