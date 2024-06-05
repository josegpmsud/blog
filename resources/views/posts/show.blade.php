<x-app-layout>
    <a href="/posts">Volver a los posts</a>

    <h1>Titulo: {{ $post->title }} </h1> 
    <p> Categoria: {{$post->category}}</p>
    <p>{{$post->content}}</p>
    

    <a href="/posts/{{$post->id}}/edit">Editar post</a>


    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar post</button>
    </form>

    
</x-app-layout>