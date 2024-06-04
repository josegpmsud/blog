<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');    
});

Route::get('/posts', function () {
    
    return "Aqui estaran todas las listas de los posts";
});

//el orden de las rutas si importa laravel la primera que coincida que encuentre es la que muesta
Route::get('/posts/create', function () {
    
    return "Aqui se mostrara un formulario para crear un nuevo post";
});

/*
Route::get('/posts/{post}', function ($post) {
    
    return "Este es el post {$post}";
});

Route::get('/posts/{post}/{category}', function ($post, $category) {
    
    return "Este es el post {$post} de la categoria {$category}";
});
*/
//este optimisa las dos rutas anteriores
Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
    
    if($category){
        return "Este es el post {$post} de la categoria {$category}";
    }
    return "Este es el post {$post}";
});

//Get
//Post
//Patch
//Put
//Delete