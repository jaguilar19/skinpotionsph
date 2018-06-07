<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skin Potions</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/bootstrap.min.css') }}">
   
    <!-- Custom CSS -->
    <link href="{{ asset('assets/stylesheets/stylish-portfolio.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/stylesheets/modern-business.css') }}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/fonts.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:#fff;font-size:24px;font-family: GLAMOURGIRL;">Skin Potions</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/" style="color:#fff;">Home</a>
                    </li>
                     <li>
                        <a href="#about" style="color:#fff;">About us</a>
                    </li>
                    <li>
                        <a href="#products" style="color:#fff;">Our Products</a>
                    </li>
                    <li>
                        <a href="#footer" style="color:#fff;">Our Branches</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Navigation -->
    <!--<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$ ( "#menu-close").click(); style="color:#ff0099;font-family: harlow;font-style: italic;font-weight: bold;font-size: 23px;">Skin Potions</a>
            </li>
            <li>
                <a href="#top" onclick=$ ( "#menu-close").click(); style="color:#ff0099;">Home</a>
            </li>
            <li>
                <a href="#about" onclick=$ ( "#menu-close").click(); style="color:#ff0099;">About</a>
            </li>
            <li>
                <a href="#services" onclick=$ ( "#menu-close").click(); style="color:#ff0099;">Our Products</a>
            </li>
        </ul>
    </nav>-->

        @include('layout.header')
            
            @yield('content')
       
            @yield('scripts')
        
        @include('layout.footer')
     <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script>
     //Script to Activate the Carousel 
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })

    
    </script>

</body>

</html>