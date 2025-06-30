<x-layout.main>
    <section>
        <article>
            <div class="textAndImage codeImageBackground firstBar">
                <div class=textBackground>
                    <h2>FAQ</h2>
                    <ol>
                        @foreach($faqs as $faq)
                            <li>
                                <details>
                                    <summary>{{ $faq->question }}</summary>
                                    <p>{{ $faq->answer }}</p>
                                </details>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </article>
    </section>
</x-layout.main>
