<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        $posts = [
            ['description' => 'First Post'],
            ['description' => 'Second Post'],
            ['description' => 'Third Post'],
            ['description' => 'Fourth Post'],
            ['description' => 'Fifth Post'],
        ];

        Post::insert($posts);

    }
}
