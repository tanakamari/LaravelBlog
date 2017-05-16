<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{

    /**
    * 一覧ページ
    * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
    */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $date = $request->input('date');

        //SQLの条件は where (title or content) and created_at
        $posts = Post::where(function ($query) use ($keyword) {
                $query->where('title', 'LIKE', "%$keyword%")
                    ->orWhere('content', 'LIKE', "%$keyword%");
            })
            ->where('created_at', 'LIKE', "$date%")
            ->paginate(5);
/* SQL確認
        $sql = Post::where(function ($query) use ($keyword) {
                $query->where('title', 'LIKE', "%$keyword%")
                    ->orWhere('content', 'LIKE', "%$keyword%");
            })
            ->where('created_at', 'LIKE', "$date%")
            ->toSql();
        dd(var_dump($sql));
*/
        return view('posts.index', [
            "posts" => $posts
            ,"keyword" => $keyword
            ,"date" => $date
        ]);
    }

    /**
     * 詳細ページ
     * @param  int $id 投稿id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', [
            "post" => $post
        ]);
    }

    /**
     * 作成ページ
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        //DBデータをまとめてもらう
        $post = new Post();

        return view('posts.create', [
            "post" => $post
        ]);
    }

    /**
     * 登録機能
     * @param  Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect('/');
    }

    /**
     * 編集ページ
     * @param  Request $request
     * @param  int  $id  投稿id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Request $request, $id)
    {
        $post = Post::find($id);

        return view('posts.edit', [
            "post" => $post
        ]);
    }

    /**
     * 更新処理
     * @param  Request $request
     * @param  int  $id  投稿id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        Post::where('id', $id)
            ->update([
                'title' => $data['title'],
                'content' => $data['content']
            ]);

        return redirect('/');
    }

    /**
     * 削除処理
     * @param  int  $id  投稿id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('/');
    }

}
