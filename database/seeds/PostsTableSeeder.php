<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
        'title' => 'サンプル記事',
        'content' => 'シーディングより登録しました',
        'create_at' => new DateTime(),
        'update_at' => new DateTime()
      ]);
    }
}
