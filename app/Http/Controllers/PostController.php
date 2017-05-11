<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{

    //一覧画面
    public function index()
    {
        //DBデータをまとめてもらう
        $posts = Post::all();

        return view('posts.index', [
            "posts" => $posts
        ]);
    }
    //詳細画面
    public function show($id)
    {
        //DBデータをまとめてもらう
        $post = Post::find($id);

        return view('posts.show', [
            "post" => $post
        ]);
    }
    // 作成画面
    public function create()
    {
        //DBデータをまとめてもらう
        $post = new Post();

        return view('posts.create', [
            "post" => $post
        ]);
    }

    //作成処理
    public function store(Request $request)
    {
        dd($request->all());
        Post::create($request->all());

        //一覧ページへリダイレクトをおこなう
        return redirect('/');
    }

    //編集画面
    public function edit(Request $request, $id)
    {
        //DBデータをまとめてもらう
        $post = Post::find($id);

        return view('posts.edit', [
            "post" => $post
        ]);
    }
    //編集処理
    public function update(Request $request, $id)
    {
        //リクエストで受けた全てのデータ
        $data = $request->all();

        //データをpostsテーブルにアップデート
        Post::where('id', $id)
            ->update([
                'title' => $data['title'],
                'content' => $data['content']
            ]);
        //アップデートは下記の書き方でもOK
        /*
        $posts = Post::find($id);
        $posts->title = $data['title'];
        $posts->content = $data['content'];
        $posts->save();
        */



        //一覧ページへリダイレクトをおこなう
        return redirect('/posts/'.$id);
    }
}
