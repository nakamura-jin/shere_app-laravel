<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'post_id' => 1,
            'comment' => '了解しました'
        ];
        $comment = new Comment;
        $comment->fill($param)->save();
    }
}
