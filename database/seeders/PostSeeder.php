<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'Lorem Ipsum Dolor Sit Amet',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum faucibus urna, ac efficitur odio pretium ut.'
        ]);

        Post::create([
            'title' => 'Sed Do Eiusmod Tempor Incididunt',
            'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ]);
    }
}
