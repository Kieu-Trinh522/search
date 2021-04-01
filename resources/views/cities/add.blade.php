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
                            <form method="post" action="{{route('cities.create')}}">
                                @csrf
                                <input type="text" name="name" class="textbox" placeholder="City name:" />
                                <input type="submit" class="form-button" value="Add">
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
