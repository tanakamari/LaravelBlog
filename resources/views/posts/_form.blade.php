<!-- DBから取得した投稿一覧を表示 -->
<table>
    <tr>
        <td>
            {!! Form::label('title', 'タイトル') !!}
        </td>
        <td>
            {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
        </td>
    </tr>
    <tr>
        <td>
            {!! Form::label('content', 'コンテンツ') !!}
        </td>
        <td>
            {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
        </td>
    </tr>
    <tr>
        <td colspan="2">
            {!! Form::submit("Send", ['class' => 'btn btn-primary form-control']) !!}
        </td>
    </tr>
</table>
