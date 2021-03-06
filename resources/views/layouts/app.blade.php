<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ url('/') }}/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    <link href="{{ url('/') }}/css/my.css" rel="stylesheet" type="text/css" />

        <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <!--<script src="1https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="{{ url('/') }}/js/bootstrap-datepicker.js"></script>
    <script src="{{ url('/') }}/js/locales/bootstrap-datepicker.ru.js" charset="UTF-8"></script>
    <link 1href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.standalone.css" rel="stylesheet">

    <script src="{{ url('/') }}/js/bootbox.min.js" charset="UTF-8"></script>
    <script src="{{ url('/') }}/js/bootstrap-notify.min.js" charset="UTF-8"></script>

    <script>function cl(m){console.log(m);}</script>

</head>
<body>
<div class="wrapper">
    <div class="header" align="center">
        <div id="head" align="left">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Laravel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif



                        <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>



                    </ul>
                </div>
            </div>
        </nav>

        @yield('top')
        </div>
    </div>

    <div class="middle">
        <div id="mainContainer">
            <div class="content" align="center">
                <div id=cont align="left"> @yield('content') </div>
            </div><!-- .container-->
        </div>

        <div class="right-sidebar">
            {{-- Последние комментарии: //свой app.blade.php для каждой страницы --}}
            {{-- View::make('widgets.latest_news') --}}
            {{-- ?php View::make('widgets.latest_news') ?> --}}
            {{-- View::make('widgets.latest_news')->render() --}}


            {{-- 1 @include('layouts.partials.sidebar') --}}
            {{-- 2 @include('widgets.latest_comments') --}}
            {{-- 3 --}}

            {{-- @yield('_latest_comments') --}}

            @include('partials.sidebar')

        </div>

    </div>

</div>

<footer class="footer">
    <strong>2016 (L)</strong>
</footer><!-- .footer -->

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
</html>

