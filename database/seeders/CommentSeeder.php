<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    public function run()
    {
        Comment::create([
            'post_id' => 1,
            'content' => 'Ini adalah komentar pertama untuk post pertama.'
        ]);

        Comment::create([
            'post_id' => 1,
            'content' => 'Ini adalah komentar kedua untuk post pertama.'
        ]);
    }
}
