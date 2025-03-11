<x-layout.main>
    <x-layout.container>
        <h2>Blog</h2>
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
