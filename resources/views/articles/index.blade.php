<x-layout.main>
    <section>
        <article>
            <div class="textAndImage programsImageBackground firstBar">
                <div class=textBackground>
                    <h2>Blog</h2>
                    <p>
                        Choose a blog post:
                    </p>
                    <ul>
                        @foreach($articles as $article)
                            <li>
                                <a href="./posts/{{ $article['id'] }}">{{ $article['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </article>
    </section>
</x-layout.main>
