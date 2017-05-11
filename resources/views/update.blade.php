<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Form Page
                </div>
                <div>
                    {{ link_to('list', '一覧') }}
                </div>

                <!-- DBから取得した投稿一覧を表示 -->
                <div class="container">
                    {!! Form::open(['url' => 'post/'.$posts[0]->id.'/update', 'method' => 'post']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', $posts[0]->title, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', 'コンテンツ:') !!}
                    {!! Form::textarea('content', $posts[0]->content, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit("Send", ['class' => 'btn btn-primary form-control']) !!}
                </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </body>
</html>
