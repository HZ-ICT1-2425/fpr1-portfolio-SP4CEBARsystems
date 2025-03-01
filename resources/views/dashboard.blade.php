<x-layout.main>
    <section>
        <article>
            <div class="textAndImage codeImageBackground firstBar">
                <div class=textBackground>
                    <h2>Dashboard</h2>
                    <p>Study Progress <span id="progressValue">{{ $gradeManager->getTotalCreditsEarned() }}</span>EC / 60EC</p>
                    <div class="table">
                        <progress id="progressMeter" max="60" value="{{ $gradeManager->getTotalCreditsEarned() }}">{{ ($gradeManager->getTotalCreditsEarned() * 100 / 60) . '%' }}</progress>

                        <div class="tr tableHeader">
                            <div class="th">Quartile</div>
                            <div class="th">Course</div>
                            <div class="th">EC</div>
                            <div class="th">Exam</div>
                            <div class="th">Weight</div>
                            <div class="th">Grade</div>
                        </div>
{{--                        @foreach( $gradeManager->getCourses() as $course) @endforeach--}}
                        <div class="tr quartile active">
{{--                            <div class="td">{{ $course->getName() }}</div>--}}
                            <div class="td"></div>
                            <div class="tc">
                                <div class="tr course">
                                    <div class="td">CU75001V3 Program & Career Orientation</div>
                                    <div class="td credits">2.5</div>
                                    <div class="tc">
                                        <div class="tr exam">
                                            <div class="td">Presentation (individual)</div>
                                            <div class="td weight">100%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="tr course">
                                    <div class="td">CU75002V2 Computer Science Basics</div>
                                    <div class="td credits">5.0</div>
                                    <div class="tc">
                                        <div class="tr exam">
                                            <div class="td">Written knowledge test</div>
                                            <div class="td weight">100%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="tr course">
                                    <div class="td">CU75003V1 Programming Basics</div>
                                    <div class="td credits">5.0</div>
                                    <div class="tc">
                                        <div class="tr exam">
                                            <div class="td">Case test</div>
                                            <div class="td weight">100%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="tr course">
                                    <div class="td">CU75068V3 Personal Professional Development Exploration</div>
                                    <div class="td credits">12.5</div>
                                    <div class="tc">
                                        <div class="tr exam">
                                            <div class="td">Criterion-focused interview</div>
                                            <div class="td weight">100%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</x-layout.main>
