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
<h1>Register User</h1>
<div class=" w3l-login-form">
    <h2>Register User</h2>
    <form action="{{route('register.index')}}" method="post">
        @csrf
        <div class=" w3l-form-group">
            <label>Full name:</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" class="form-control" placeholder="Enter name">

            </div>
        </div>
        <div class=" w3l-form-group">
            <label>Email:</label>
            <div class="group">
                <i class="fas fa-unlock"></i>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
        </div>
        <div class=" w3l-form-group">
            <label>Password:</label>
            <div class="group">
                <i class="fas fa-unlock"></i>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>
        </div>
        <div class="forgot">
            <a href="">Forgot Password?</a>
            <p><input type="checkbox">Remember Me</p>
        </div>
        <input class="btn btn-success" type="submit" value="Đăng kí">
    </form>
    <p class=" w3l-register-p">Don't have an account?</p>

</div>


</body>

</html>

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Title</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="row">--}}
{{--    <div class="col-md-4"></div>--}}
{{--    <div class="col-md-4">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <h1 class="btn btn-danger">Register User</h1>--}}
{{--                <form action="{{route('register.index')}}" method="post">--}}
{{--                    @csrf--}}
{{--                    <table class="table">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td>Full Name</td>--}}
{{--                            <td><input type="text" name="name" class="form-control" placeholder="Enter name"></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Email</td>--}}
{{--                            <td><input type="email" name="email" class="form-control" placeholder="Enter email"></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Password</td>--}}
{{--                            <td><input type="password" name="pass" class="form-control" placeholder="Enter password">--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td><input class="btn btn-success" type="submit" value="Đăng Kí "></td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}

{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
