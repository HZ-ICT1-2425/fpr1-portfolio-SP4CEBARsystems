<x-layout.main>
    <section>
        <article>
            <div class="textAndImage codeImageBackground firstBar">
                <div class=textBackground>
                    <h2>Dashboard</h2>
                    <p>Study Progress <span id="progressValue">{{ $gradeManager->getTotalCreditsEarned() }}</span>EC /
                        60EC</p>
                    <div class="table">
                        <progress id="progressMeter" max="60"
                                  value="{{ $gradeManager->getTotalCreditsEarned() }}">{{ ($gradeManager->getTotalCreditsEarned() * 100 / 60) . '%' }}</progress>

                        <div class="tr tableHeader">
                            <div class="th">Quartile</div>
                            <div class="th">Course</div>
                            <div class="th">EC</div>
                            <div class="th">Exam</div>
                            <div class="th">Weight</div>
                            <div class="th">Grade</div>
                        </div>
                        @foreach( $gradeManager->getQuartiles() as $quartile)
                            <div class="tr quartile active">
                                <div class="td">{{ $quartile->name }}</div>
                                <div class="tc">
                                    @foreach( $quartile->getCourses() as $course)
                                        <div class="tr course {{ $course->isPassed() ? 'passed' : 'failed' }}">
                                            <div class="td">{{ $course->name }}</div>
                                            <div class="td credits">{{ $course->credits }}</div>
                                            <div class="tc">
                                                @foreach( $course->getExams() as $exam)
                                                    <div class="tr exam {{ $exam->isPassed() ? 'passed' : 'failed' }}">
                                                        <div class="td">{{ $exam->name }}</div>
                                                        <div class="td weight">{{ $exam->getWeight() . '%' }}</div>
                                                        <input type="number" min="1" max="10" value="{{ $exam->getGrade() }}"
                                                               class="td grade">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </article>
    </section>
</x-layout.main>
