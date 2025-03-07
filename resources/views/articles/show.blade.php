<x-layout.main>
    <section>
        <article>
            <div class="textAndImage programsImageBackground firstBar">
                <div class=textBackground>
                    <a href="./">Return to blogs</a>
                    <h2>{{ $article["title"] }}</h2>
                    <p>
                        {{ $article["body"] }}
                    </p>
                </div>
            </div>
        </article>
    </section>
</x-layout.main>
