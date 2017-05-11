<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //自分で作成したシーダを呼び出す（追加シーダの呼び出し）
      $this->call(PostsTableSeeder::class);
    }
}
