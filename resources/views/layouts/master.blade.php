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
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        </style>

    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{ link_to('/', 'Laravel Blog Tutrial', ['class' => "navbar-brand"]) }}
                </div>
                <div class="collapse navbar-collapse" id="navbarEexample">
                    <ul class="nav navbar-nav">
                        <li>{{ link_to('/posts/create', 'Create') }}</li>
                    </ul>
                    <button type="button" class="btn btn-default navbar-btn navbar-right">Sign in</button>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

            {{-- フラッシュメッセージの表示 --}}
            @if (Session::has('flash_message'))
                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif

            {{-- エラーメッセージの表示 --}}
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <h1>@yield('title')</h1>
                </div>
            </div>

            <div class="row">
                @yield('content')
            </div>

        </div>
        <!-- /.container -->

    </body>
</html>
