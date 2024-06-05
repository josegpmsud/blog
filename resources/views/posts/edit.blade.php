<x-app-layout>
    <h1>Formulario para editar post</h1>

    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Título:
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br><br>
        <label>
            Categoria:
            <input type="text" name="category" value="{{$post->category}}">
        </label>
        <br><br>
        <label>
            Contenido:
            <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
            
        </label>
        <br><br>
        <button type="submit">Actualizar post</button>
    </form>
</x-app-layout>