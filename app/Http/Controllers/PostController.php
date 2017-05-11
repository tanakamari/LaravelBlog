<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{

    //一覧画面
    public function list()
    {
        //DBデータをまとめてもらう
        $posts = Post::all();

        return view('list', [
            "posts" => $posts
        ]);
    }
    //詳細画面
    public function detail(Request $request, $id)
    {
        //DBデータをまとめてもらう
        $posts = Post::where('id', $id)
                   ->get();

        return view('list', [
            "posts" => $posts
        ]);
    }

    //作成画面
    public function create(Request $request)
    {
        //リクエストで受けた全てのデータ
        $data = $request->all();

        //データをpostsテーブルにインサート
        DB::table('posts')->insert([
            'title' => $data['title'],
            'content' => $data['content'],
            'create_at' => new \DateTime(),
            'update_at' => new \DateTime()
        ]);

        //一覧ページへリダイレクトをおこなう
        return redirect('list');
    }

}
