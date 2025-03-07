<x-layout.main>
    <section>
        <article>
            <div class="textAndImage codeImageBackground firstBar">
                <div class=textBackground>
                    <h2>FAQ</h2>
                    <ol>
                        @foreach($faq as $q)
                            <details>
                                <summary>{{ $q['question'] }}</summary>
                                <p>{{ $q['answer'] }}</p>
                            </details>
                        @endforeach
                    </ol>
                </div>
            </div>
        </article>
    </section>
</x-layout.main>
