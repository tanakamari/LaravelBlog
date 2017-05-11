<!-- DBから取得した投稿一覧を表示 -->
<div class="container">
    <div class="form-group">
        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'コンテンツ:') !!}
        {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit("Send", ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
