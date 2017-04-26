<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>DCIT Alumni Tracker</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
<IMG  SRC="http://sta.uwi.edu/sites/all/themes/uwi/images/home/logo_lrg.png">
            @if (Route::has('login'))
                <div id="links" class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                        <a href="{{ url('/admin/login') }}">Administrators</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   UWI DCIT Alumni Tracker
                </div>

                <div class="links">
                    <a href="/public">Public Records</a>
                    <a href="/home">Full Records</a>
                    <a href="http://sta.uwi.edu/fst/dcit/index.asp">DCIT Homepage</a>
       
                </div>
                 <!--<?=Menu::display('main_menu', 'bootstrap');?>-->
           
            </div>
        </div>
    </body>
</html>
