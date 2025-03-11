<x-layout.main>
    <x-layout.container>
        <h2>Blog</h2>
        <a href="./posts/create">Create new</a>
        <p>
            Choose a blog post:
        </p>
        <ul>
            @foreach($articles as $article)
                <li>
                    <a href="./posts/{{ $article->id }}">{{ $article->title }}</a>
                </li>
            @endforeach
        </ul>
    </x-layout.container>
</x-layout.main>
