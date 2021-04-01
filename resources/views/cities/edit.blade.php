<!DOCTYPE HTML>
<html>

<head>
    <title>The free Under-Construction Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('AddCustomer/web/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<div class="body">
    <div class="header">
        <div class="wrap">
            <div class="header-logo">
                <a href="{{asset('AddCustomer/web/index.html')}}"><img src="{{asset('AddCustomer/web/images/header-logo.png')}}" alt=""> </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="content">
        <div class="wrap">
            <div class="cont-main">
                <h2>Under Construction</h2>
                <p>Subheadibg for more info with <a>key features</a> highlighted for more emphasis</p>
                <div class="cont-h">
                    <h1>THÊM MỚI</h1>
                </div>

                <div class="search-form">
                    <div class="search">
                        <h3>Enter a name</h3>
                        <div class="table-form">
                            <form method="post">
                                @csrf
                                <input type="text" name="name" value="{{$city->name}}" class="textbox" />
                                <input type="submit" class="form-button" value="Edit">
                            </form>
                        </div>

                    </div>
                </div>
                <div class="cont-link">
                    <p>follow us on:<a>facebook </a>& <a>twitter</a></p>
                </div>
                <div class="clear"> </div>
                <div class="progress">
                    <nav>
                        <ul>
                            <li> </li>

                        </ul>
                    </nav>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
    <div class="clear"> </div>
    <div class="footer">
        <div class="wrap">
            <div class="f-copyrights">
                <p>we will use your email address to send updates to the launch of Under-Construction</p>
                <span>Design by <a href="http://w3layouts.com/">W3Layouts</a></span>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
</body>

</html>
{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>Title</title>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<form method="post">--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <label for="formGroupExampleInput">Tên tỉnh </label>--}}
{{--        <input type="text" name="name" value="{{$city->name}}" class="form-control" id="formGroupExampleInput" placeholder="Example input">--}}
{{--    </div>--}}
{{--    <input type="submit" value="Edit" class="btn btn-primary">--}}

{{--</form>--}}
{{--<!-- Optional JavaScript -->--}}
{{--<!-- jQuery first, then Popper.js, then Bootstrap JS -->--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"--}}
{{--        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"--}}
{{--        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}
