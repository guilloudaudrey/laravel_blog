<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticlesTableSeeder extends Seeder
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
            
            DB::table('articles')->insert([
                'title'      => $title,
                'content'    => str_random(100),
                'is_enabled' => (bool)random_int(0, 1), // PHP 7 - Aléatoirement true ou false
                'created_at' => $date,
                'slug' => str_slug($title, '-')
            ]);
        }
    }
}
