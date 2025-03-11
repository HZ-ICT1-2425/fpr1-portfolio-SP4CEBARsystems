<x-layout.main>
    <x-layout.container>
        <a href="./">Return to blogs</a>
        <form action="{{ route('posts.store') }}" method="POST">
        {{--    url('/posts')--}}
            @csrf
        {{--    @method('POST')--}}
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="body">Content:</label><br>
            <input type="text" id="body" name="body"><br>
            <label for="slug">Slug:</label><br>
            <input type="text" id="slug" name="slug"><br>
            <br>
            <input type="submit" value="Submit">
        </form>
    </x-layout.container>
</x-layout.main>
