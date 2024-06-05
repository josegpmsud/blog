<x-app-layout>
    <h1>Aqui se mostraran las lista de los post</h1>
    
    <a href="/posts/create">Nuevo post</a>
    
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post->id}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }}
</x-app-layout>
