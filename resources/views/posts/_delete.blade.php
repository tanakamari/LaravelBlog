{{ Form::open(['method' => 'delete', 'url' => '/posts/' . $post->id . '/delete']) }}
    {!! Form::submit('削除') !!}
{!! Form::close() !!}
