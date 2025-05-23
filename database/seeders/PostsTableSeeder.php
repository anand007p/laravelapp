<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    public function run(): void
    {
        Post::factory()->count(20)->create();
    }
}
