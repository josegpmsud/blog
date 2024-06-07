<x-app-layout>
    <a href="{{ route('posts.index')}}">Volver a los posts</a>

    <h1>Titulo: {{ $post->title }} </h1> 
    <p> Categoria: {{$post->category}}</p>
    <p>{{$post->content}}</p>
    

    <a href="{{route('posts.edit',$post)}}">Editar post</a>


    <form action="{{route('posts.destroy',$post)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar post</button>
    </form>

    
</x-app-layout>