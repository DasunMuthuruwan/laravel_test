<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('comments')->delete();
        Comment::factory(3)->create([
            'post_id' => Comment::SECOND_POST_COMMENT
        ]);

        $third_post_comment = [
            ['message'=>'First Comment','post_id'=>Comment::THIRD_POST_COMMENT],
            ['message'=>'Second Comment','post_id'=>Comment::THIRD_POST_COMMENT]
        ];
        Comment::insert($third_post_comment);

        Comment::factory(1)->create([
            'post_id' => Comment::FIFTH_POST_COMMENT
        ]);
    }
}
