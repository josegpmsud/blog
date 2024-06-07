<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
/*
Route::get('/posts', [PostController::class,'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
Route::post('/posts/create', [PostController::class,'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class,'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class,'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('posts.destroy');
*/


Route::resource('posts', PostController::class);

Route::get('pdf_generator', [PostController::class,'pdf_generator_get']);

//Get
//Post
//Patch
//Put
//Delete

Route::get('prueba', function(){
    // insertar un nuevo post
    /*
    $post = new Post;

    $post->title = 'tiTTulo 4';
    $post->content = 'contenido 4'; 
    $post->category = 'category prueba 4'; 

    $post->save();     
    return $post;   
    */
    
    //mostrar un post por id
    /*
    $post = Post::find(4);
    return $post;
    */
    $post = Post::find(1); 

    //return $post->created_at->format('d-m-Y');
    //return $post->created_at->diffForHumans();
    return $post->published_at->format('d/m/Y');
    //actualizar un registro filfrandolo
    /*
    $post = Post::where('title', 'titulo 1')
        ->first();
    
    $post->category = 'Desarrollo web';
    $post->save();  
    return $post;
    */
    /*
    $post = Post::all();
    return $post;
    */
    /*
    $posts = Post::where('id', '>=', '2')
        ->get();
    return $posts;
    */
    /*
    $posts = Post::get();
    return $posts;
    */
    /*
    $posts = Post::orderBy('id','desc')
        ->select('id','title','category')
        ->take(2)
        ->get();
    return $posts;
    */
    /*
    $post = Post::find(1);
    $post->delete();
    return "Eliminado correctamente";
    */
});