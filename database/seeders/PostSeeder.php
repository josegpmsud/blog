<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Post::factory(100)->create();
        
        /*
        $post = new Post();
        $post->title = "titulo post 1";
        $post->content = "contenido post 1";
        $post->category = "categoria 1";
        $post->is_active = false;
        $post->published_at = now();

        $post->save();

        $post = new Post();
        $post->title = "titulo post 2";
        $post->content = "contenido post 2";
        $post->category = "categoria 2";
        $post->is_active = false;
        $post->published_at = now();

        $post->save();

        $post = new Post();
        $post->title = "titulo post 3";
        $post->content = "contenido post 3";
        $post->category = "categoria 3";
        $post->is_active = false;
        $post->published_at = now();

        $post->save();

        
        */
    }
}
