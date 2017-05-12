@extends('layouts.master')

@section('title', '記事作成')

@section('menubar')
    {{ link_to('/', '一覧') }}
@endsection

@section('content')
    {!! Form::open(['url' => '/posts']) !!}
        @include('posts._form')
    {!! Form::close() !!}
@endsection
