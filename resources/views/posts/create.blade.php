@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => '/posts']) !!}
        @include('posts._form')
    {!! Form::close() !!}
@endsection
