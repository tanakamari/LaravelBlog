@extends('layouts.app')

@section('content')
    {{ Form::open(['method' => 'put', 'url' => '/posts/' . $post->id]) }}
        @include('posts._form')
    {{ Form::close() }}
@endsection
