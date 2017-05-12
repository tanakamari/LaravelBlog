{{ Form::open(['method' => 'delete', 'url' => '/posts/' . $post->id . '/destroy']) }}
    {!! Form::submit('削除') !!}
{!! Form::close() !!}
