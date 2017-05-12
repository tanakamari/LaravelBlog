@extends('layouts.master')

@section('title', '記事編集')

@section('menubar')
    {{ link_to('/', '一覧') }}
    {{ link_to('/posts/' . $post->id, '詳細') }}
@endsection

@section('content')
    {!! Form::open(['method' => 'put', 'url' => '/posts/' . $post->id]) !!}
        @include('posts._form')
    {!! Form::close() !!}
@endsection
