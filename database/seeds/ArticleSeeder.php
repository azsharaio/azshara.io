<?php

use Illuminate\Database\Seeder;

use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        for ($i=0; $i < 10; $i++) {
          Article::create([
            'title' => str_random(10),
            'content' => str_random(255)
          ]);
        }
    }
}
