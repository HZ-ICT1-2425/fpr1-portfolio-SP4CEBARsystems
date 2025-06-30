<x-layout.main>
    <x-layout.container>
        <a href="./">Return to blogs</a>
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PATCH')
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ $post->title }}"><br>
            <label for="body">Content:</label><br>
            <input type="text" id="body" name="body" value="{{ $post->body }}"><br>
            <label for="slug">Slug:</label><br>
            <input type="text" id="slug" name="slug" value="{{ $post->slug }}"><br>
            <br>
            <input type="submit" value="Submit">
        </form>
    </x-layout.container>
</x-layout.main>
