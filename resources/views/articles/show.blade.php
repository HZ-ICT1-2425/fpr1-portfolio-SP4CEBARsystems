<x-layout.main>
    <x-layout.container>
        <a href="./">Return to blogs</a>
        <br>
        <a href="{{ route('posts.edit', $post) }}">Edit</a>

        <form id="delete-project" method="POST" action="{{ route('posts.destroy', $post) }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
        <h2>{{ $post->title }}</h2>
        <p>
            {{ $post->body }}
        </p>
    </x-layout.container>
</x-layout.main>
