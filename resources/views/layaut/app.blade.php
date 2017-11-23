<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pagina Familiar</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/mycss.css')}}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9">
                            @yield('logo')

                        </div>
                        <div class="col-md-3">
                            @yield('login')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @yield('nav')
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @yield('carrusel')
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @yield('conten')
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Social Footer, Colour Matching Icons -->
                    <!-- Include Font Awesome Stylesheet in Header -->

                    <!-- // -->
                    <div class="container">
                        <hr>
                        <div class="text-center center-block">
                            <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                            <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                            <a href="https://www.youtube.com"><i id="social-yt" class="fa fa-youtube-square fa-3x social"></i></a>
                            <a href="https://plus.google.com"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                            <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>

                            <br />

                            <p class="txt-railway">copyright todos los derechos reservados</p>
                            <p class="txt-railway">2017</p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/jqueryValidate')}}"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
@yield('script')
</body>
</html>