@extends('layouts.master')

@section('title', '記事詳細')

@section('menubar')
    {{ link_to('/', '一覧') }}
@endsection

@section('content')
    <table>
        <tr>
            <th>id</th>
            <td>{{ $post->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <th>コンテンツ</th>
            <td>{{ $post->content }}</td>
        </tr>
        <tr>
            <th>作成日時</th>
            <td>{{ $post->created_at }}</td>
        </tr>
        <tr>
            <th>更新日時</th>
            <td>{{ $post->updated_at }}</td>
        </tr>
        <td>
            @include('posts._edit')
        </td>
        <td>
            @include('posts._destroy')
        </td>
    </table>
@endsection
