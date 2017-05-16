@extends('layouts.master')

@section('title', '記事編集')

@section('content')
    {{ Form::open(['method' => 'put', 'url' => '/posts/' . $post->id]) }}
        @include('posts._form')
    {{ Form::close() }}
@endsection
