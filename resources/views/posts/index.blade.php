@extends('layouts.master')

@section('title', '記事一覧')

@section('content')
    <!-- 検索フォーム -->
    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'get', 'url' => '/posts']) }}
                {{ Form::text('keyword', $keyword, null) }}
                {{ Form::date('date', $date) }}
                {{ Form::reset("Crear", ['class' => 'btn btn-default']) }}
                {{ Form::submit("Search", ['class' => 'btn btn-default']) }}
            {{ Form::close() }}
        </div>
    </div>

    <!-- DBから取得した投稿一覧を表示 -->
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ link_to('/posts/' . $post->id, $post->title) }}
                    </div>
                    <div class="panel-body">
                        <p>{{ $post->content }}</p>
                    </div>
                    <div class="panel-footer">
                        <div class="btn-group" role="group">
                            @include('posts._edit')
                            @include('posts._destroy')
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $posts->links() }}
@endsection
