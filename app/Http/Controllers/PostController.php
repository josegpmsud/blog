<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
//use PDF;
use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreatedMail;
use App\Models\Post;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index(){
        //$posts = Post::all();
        $posts = Post::orderBy("id","desc")->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePostRequest $request){
        /*
        $request->validate([
            'title'=> 'required|min:5|max:255',
            'slug'=> 'required|unique:posts',
            'category'=> 'required',
            'content'=> 'required',
        ]);
        */

        $post = Post::create($request->all());
        /*
        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();
        */
        Mail::to('prueba@prueba.com')->send(new PostCreatedMail($post));
        return redirect()->route('posts.index');
    }

    public function show(Post $post){
        
        /*
        $post = Post::find($post);
        */
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post){
        /*
        $post = Post::find($post);
        */
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){
        
        $request->validate([
            'title'=> 'required|min:5|max:255',
            'slug'=> "required|unique:posts,slug,{$post->id}",
            'category'=> 'required',
            'content'=> 'required',
        ]);

        
        $post->update($request->all());
        /*
        $post = Post::find($post);
        */
        /*
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        */
        return redirect()->route('posts.show',$post);
    }

    public function destroy(Post $post){
        
        /*
        $post = Post::find($post);
        */
        $post->delete();

        return redirect()->route('posts.index');
    }
    /*
    public function report(){

        $posts = Post::all();
        $pdf = Pdf::loadView('posts.report', compact('posts'));
        //return $pdf->download('posts_report.pdf');
        return $pdf->stream('posts_report.pdf');
        
    }
    */

    public function pdf_generator_get(Request $request){

        //echo 'PDF'; die();
        
        $posts = Post::get();

        $data = [
            'title' => 'Lista de posts',
            'date' => date('Y-m-d'),
            'posts' => $posts           
            
        ];
        $pdf = PDF::loadView('posts.myPDF', $data);
        //return $pdf->download('lista_post.pdf');
        return $pdf->stream('lista_post.pdf');
        
    }
}
