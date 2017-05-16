@extends('layouts.master')

@section('title', '記事作成')

@section('content')
    {!! Form::open(['url' => '/posts']) !!}
        @include('posts._form')
    {!! Form::close() !!}
@endsection
