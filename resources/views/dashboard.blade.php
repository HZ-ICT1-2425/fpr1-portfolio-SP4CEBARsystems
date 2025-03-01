<x-layout.main>
    <section>
        <article>
            <div class="textAndImage codeImageBackground firstBar">
                <div class=textBackground>
                    <h2>Dashboard</h2>
                    <p>Study Progress <span id="progressValue">{{ $gradeManager->getTotalCreditsEarned() }}</span>EC / 60EC</p>
                    <div class="table">
                        <progress id="progressMeter" max="60" value="70">70%</progress>

                        <div class="tr tableHeader">
                            <div class="th">Quartile</div>
                            <div class="th">Course</div>
                            <div class="th">EC</div>
                            <div class="th">Exam</div>
                            <div class="th">Weight</div>
                            <div class="th">Grade</div>
                        </div>
                        <div class="tr quartile active">
                            <div class="td">Block 1: Introduction to Computer Science</div>
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

                        <div class="tr quartile">
                            <div class="td rowspan2">Block 2: Game Development</div>
                            <div class="tc">
                                <div class="tr course">
                                    <div class="td rowspan2">CU75004V1 Object-Oriented Programming</div>
                                    <div class="td rowspan2 credits">10.0</div>
                                    <div class="tc">
                                        <div class="tr exam">
                                            <div class="td">Group presentation</div>
                                            <div class="td weight">50%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                        <div class="tr exam">
                                            <div class="td">Written knowledge test</div>
                                            <div class="td weight">50%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tr quartile">
                            <div class="td">Block 3: Modern Software Development 1</div>
                            <div class="tc">
                                <div class="tr course">
                                    <div class="td">CU75080V2 Framework Project 1</div>
                                    <div class="td credits">10.0</div>
                                    <div class="tc">
                                        <div class="tr exam">
                                            <div class="td">On-site case test</div>
                                            <div class="td weight">40%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                        <div class="tr exam">
                                            <div class="td">Database exam</div>
                                            <div class="td weight">10%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                        <div class="tr exam">
                                            <div class="td">Group presentation project results</div>
                                            <div class="td weight">25%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                        <div class="tr exam">
                                            <div class="td">Group portfolio on requirements</div>
                                            <div class="td weight">25%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="tr course">
                                    <div class="td">CU75081V1 Business IT Consultancy Basics</div>
                                    <div class="td credits">2.5</div>
                                    <div class="tc">
                                        <div class="tr exam">
                                            <div class="td">Video</div>
                                            <div class="td weight">100%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tr quartile">
                            <div class="td">Block 4: Modern Software Development 2</div>
                            <div class="tc">
                                <div class="tr course">
                                    <div class="td">CU75011V3 Framework Project 2</div>
                                    <div class="td">10.0</div>
                                    <div class="tc course">
                                        <div class="tr exam">
                                            <div class="td">Final delivery</div>
                                            <div class="td weight">25%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                        <div class="tr exam">
                                            <div class="td">Individual project assessment</div>
                                            <div class="td weight">25%</div>
                                            <input type="number" min="1" max="10" value="1"
                                                   class="td grade"></input>
                                        </div>
                                        <div class="tr exam">
                                            <div class="td">IT development portfolio</div>
                                            <div class="td weight">50%</div>
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
