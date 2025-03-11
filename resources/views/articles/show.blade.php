<x-layout.main>
    <x-layout.container>
        <a href="./">Return to blogs</a>
        <br>
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
        <h2>{{ $post->title }}</h2>
        <p>
            {{ $post->body }}
        </p>
    </x-layout.container>
</x-layout.main>
