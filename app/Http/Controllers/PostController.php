<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{

    public function index()
    {
        /**
         * 一覧ページ
         * @return
         */

        $posts = Post::all();

        return view('posts.index', [
            "posts" => $posts
        ]);
    }

    public function show($id)
    {
        /**
         * 詳細ページ
         * @param  Request $id 投稿id
         * @return
         */

        $post = Post::find($id);

        return view('posts.show', [
            "post" => $post
        ]);
    }

    //
    public function create()
    {
        /**
         * 作成ページ
         * @return
         */
        //DBデータをまとめてもらう
        $post = new Post();

        return view('posts.create', [
            "post" => $post
        ]);
    }

    public function store(Request $request)
    {
        /**
         * 登録機能
         * @param  Request $id 投稿id
         * @return
         */

        Post::create($request->all());

        return redirect('/');
    }

    public function edit(Request $request, $id)
    {
        /**
         * 編集ページ
         * @param  Request $id 投稿id
         * @return
         */

        $post = Post::find($id);

        return view('posts.edit', [
            "post" => $post
        ]);
    }

    public function update(Request $request, $id)
    {
        /**
         * 編集処理
         * @param  Request $id 投稿id
         * @return
         */

        $data = $request->all();

        Post::where('id', $id)
            ->update([
                'title' => $data['title'],
                'content' => $data['content']
            ]);

        return redirect('/posts/'.$id);
    }

    public function delete($id)
    {
        /**
         * 削除処理
         * @param  Request $id 投稿id
         * @return
         */

        Post::destroy($id);

        return redirect('/');
    }
}
