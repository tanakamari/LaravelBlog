@extends('layouts.master')

@section('title', '記事一覧')

@section('menubar')
    {{ link_to('/posts/create', '新規登録') }}
@endsection

@section('content')
    <!-- DBから取得した投稿一覧を表示 -->
    <div>
        @foreach($posts as $post)
            <div>
                <div class="links">
                    {{ link_to('posts/' . $post->id, $post->title) }}
                    @include('posts._edit')
                    @include('posts._destroy')
                </ul>
            </div>
        @endforeach
    </div>
@endsection
