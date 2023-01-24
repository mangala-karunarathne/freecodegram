<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voidP
     */
    public function run()
     {
            $posts = [
                'title' => 'Post 1',
                'excerpt' => 'Post 1',
                'body' => 'Post 1',
                'min_to_read' => 'Post 1',
                'image_path' => '',
                'is_published' => 'Post 1',
        ]
    }
}
