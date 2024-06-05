<x-app-layout>
    <h1>Formulario para crear un nuevo post</h1>

    <form action="/posts/create" method="POST">
        @csrf
        <label>
            Título:
            <input type="text" name="title">
        </label>
        <br><br>
        <label>
            Categoria:
            <input type="text" name="category">
        </label>
        <br><br>
        <label>
            Contenido:
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            
        </label>
        <br><br>
        <button type="submit">Crear post</button>
    </form>
</x-app-layout>