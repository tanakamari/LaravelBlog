<div class="form-group">
    {{ Form::label('title', 'タイトル',['for' => "InputTitle"]) }}
    {{ Form::text('title', $post->title, ['class' => 'form-control', 'id' => "InputTitle"]) }}
</div>
<div class="form-group">
    {{ Form::label('content', 'コンテンツ',['for' => "InputTitle"]) }}
    {{ Form::textarea('content', $post->content, ['class' => 'form-control', 'id' => "InputContent"]) }}
</div>
{{ Form::submit("Send", ['class' => 'btn btn-default form-control']) }}
