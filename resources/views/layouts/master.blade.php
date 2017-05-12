<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Blog Tutrial - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .menubar {
                text-align: left;
            }

            .content {
                text-align: left;
            }

            .links > form {
                color: #636b6f;
                font-size: 12px;
                font-weight: 600;
                text-decoration: none;
                text-transform: uppercase;
                display: inline;
            }

        </style>

    </head>
    <body>
        <div>
            <div class="menubar">
                @yield('menubar')
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
