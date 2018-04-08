<?php

use Illuminate\Database\Seeder;
use App\Article;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            $int= mt_rand(1521126150, 1522850550);
            $date = date("Y-m-d H:i:s",$int);
            $title = str_random(10);
            $article = App\Article::orderByRaw('RAND()')->first();
            
            DB::table('tags')->insert([
                'name'      => $title,
                'created_at' => $date,
            ]);
        }
    }
}
