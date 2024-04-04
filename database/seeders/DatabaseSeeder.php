<?php

use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\CommentSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PostSeeder::class,
            CommentSeeder::class,

        ]);
    }
}
