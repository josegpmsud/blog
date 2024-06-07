<x-app-layout>
    <h1>Aqui se mostraran las lista de los post</h1>
    
    <a href="{{route('posts.create')}}">Nuevo post</a>
    
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post)}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }}
</x-app-layout>
