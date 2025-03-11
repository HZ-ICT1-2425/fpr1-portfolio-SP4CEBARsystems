<x-layout.main>
    <x-layout.container>
        <a href="./">Return to blogs</a>
        <h2>{{ $article->title }}</h2>
        <p>
            {{ $article->body }}
        </p>
    </x-layout.container>
</x-layout.main>
