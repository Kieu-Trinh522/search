<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Login Form a Responsive Widget Template :: w3layouts</title>
    <!-- meta tags -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="{{asset('login1/material_login_form_web_Free04-09-2018_262514557/web/css/style.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="{{asset('login1/material_login_form_web_Free04-09-2018_262514557/web/css/fontawesome-all.css')}}"
          rel="stylesheet"/>
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link
        href="{{asset('login1/material_login_form_web_Free04-09-2018_262514557/web/fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
<h1>Material Login Form</h1>
<div class=" w3l-login-form">
    <h2>Login Here</h2>
    <form action="{{route('login.login')}}" method="post">
        @csrf
        <div class=" w3l-form-group">
            <label>Username:</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="email" name="email" class="form-control" placeholder="Email" required="required"/>
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class=" w3l-form-group">
            <label>Password:</label>
            <div class="group">
                <i class="fas fa-unlock"></i>
                <input type="password" name="password" class="form-control" placeholder="Password" required="required"/>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="forgot">
            <a href="">Forgot Password?</a>
            <p><input type="checkbox">Remember Me</p>
        </div>
            <button type="submit">Login</button>
        @if (Session::has('login-fail'))
            <div class="login-fail">
                <p class="text-danger" style="color: red">{{ Session::get('login-fail') }}</p>
            </div>
        @endif
    </form>
    <p class=" w3l-register-p">Don't have an account?<a href="{{route('register.index')}}" class="register"> Register</a></p>

</div>

<footer>
    <p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a
            href="http://w3layouts.com">W3layouts</a></p>
</footer>

</body>

</html>
