@extends('layouts.master')

@section('title', '記事詳細')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>id</h3>
            <p>{{ $post->id }}</p>
            <h3>タイトル</h3>
            <p>{{ $post->title }}</p>
            <h3>コンテンツ</h3>
            <p>{{ $post->content }}</p>
            <h3>作成日時</h3>
            <p>{{ $post->created_at }}</p>
            <h3>更新日時</h3>
            <p>{{ $post->updated_at }}</p>
        </div>
        <div class="btn-group" role="group">
            @include('posts._edit')
            @include('posts._destroy')
        </div>
    </div>
@endsection
