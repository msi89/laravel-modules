<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Blog\Entities\Blog;
use Illuminate\Database\Eloquent\Model;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Model::unguard();
        Blog::truncate();
        
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++){
            Blog::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
        // $this->call("OthersTableSeeder");
    }
}
