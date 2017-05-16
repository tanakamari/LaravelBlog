{{ Form::open(['method' => 'delete', 'url' => '/posts/' . $post->id . '/destroy', 'style' => 'display: inline']) }}
    <button type="submit" class="btn btn-default btn-xs" role="button">
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete</button>
{!! Form::close() !!}
