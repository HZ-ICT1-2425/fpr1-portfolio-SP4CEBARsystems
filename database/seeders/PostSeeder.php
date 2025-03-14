<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->loadArticles() as $post) {
            DB::table('posts')->insert($post);
        }
        Post::factory()->count(10)->create();
    }

    /**
     * @return array[] all articles
     */
    private function loadArticles(): array
    {
        return [
            [
                "slug" => "Feedback",
                "title" => "First Feedback",
                "body" => "
            <ul>
                <li>The navbar should be within the page width (not in the side blanks).</li>
                <li>A list with commas, as if it were a sentence, may look strange; a semicolon may look better.
                </li>
                <li>The nav is in the main. You should not have a footer or header in main.</li>
                <li>The stylesheet and the HTML pages are cluttered with comments.</li>
                <li>Home, blog, and dashboard should use some or all capital letters.</li>
                <li>nav bar should be together, it should be aligned on the left of the header but not on
                    the right because we read from left to right.</li>
            </ul>

            <h3>Feedback From Paula</h3>
            <ul>
                <li>+ It runs on GitHub.</li>
                <li>+ Good motivation.</li>
                <li>Suggestion: navigation with current for example 'home'.</li>
                <li>The poster has little about yourself (it only has code).</li>
                <li>Blog backlink.</li>
                <li>Clean up commented code.</li>
                <li>Naming consistency (camelcase).</li>
            </ul>
            <h3>Feedback From A Teacher Assistant</h3>
            <ul>
                <li>Good job</li>
                <li>Sections for the main page.</li>
                <li>language consistency.</li>
                <li>Input field for grades.</li>
                <li>FAQ style difference Question Answer.</li>
            </ul>
            <h3>Feedback From An Anonymous Classmate</h3>
            <ul>
                <li>+ Clear.</li>
                <li>+ Works well.</li>
                <li>+ Code looks clean.</li>
                <li>Language inconsistency.</li>
                <li>Lots of clutter.</li>
            </ul>
            <h3>Feedback From Damian</h3>
            <ul>
                <li>The table is not readable for the inactive blocks.</li>
                <li>Too much black space below the text about the new project on the home page.</li>
                <li>Profile menu jumps.</li>
                <li>Section tags are missing.</li>
                <li>Footer is missing.</li>
            </ul>
            <h3>Feedback From Martijn</h3>
            <ul>
                <li>Filter with blur instead of a black unreadable overlay on the inactive dashboard items.</li>
                <li>home page has too much empty space.</li>
                <li>profile has an offset of 3,6px.</li>
                <li>Where is the footer.</li>
            </ul>",
            ],
            [
                "slug" => "ICT Field Of Work",
                "title" => "ICT Field Of Work",
                "body" => "Hello internet! I like web development, this field of engineering allows products to be
                            developed relatively quickly and cheaply. The distribution of software is far easier than of
                            physical products. In this field, there is plenty of work available and if that was not
                            enough,
                            starting a software company is relatively easy, cheap, and low risk.",
            ],
            [
                "title" => "My programming biography",
                "slug" => "My programming biography",
                "body" => "Since 2018 I have been enjoying programming, I started by making small programs in the
                            BASIC
                            programming language in an app called “LowRes Coder”. Then I made automatic calculations
                            like the abc formula and later games like Minesweeper on my calculator in TI BASIC. Then I
                            started making games and functional programs in BASIC in LowRes Coder and later in its
                            successor LowResNX (and I still haven't stopped). Then I learned C with Arduino to make a
                            robot for my vwo profile paper. In 2022 I learned Processing JavaScript and Processing Java
                            to make a simulation for the TrashBot of the engineering course of the HZ I was taking at
                            the time. In 2023, I learned AutoHotKey because it's just convenient. I also learned React
                            and React Native so I could develop an app idea and Unity to develop another app idea. The
                            next year in 2023-2024 I learned all the ins and outs of C at Eindhoven University of
                            Technology. I passed C but unfortunately not my BSA. After that I worked with C++, even more
                            with Processing Java and with HTML with JavaScript (I appreciate the simplicity and
                            versatility of these two).",
            ],
            [
                "slug" => "Study Choice",
                "title" => "Study Choice",
                "body" => "Hello internet! I chose this study direction because I like web development and I plan
                            to make online tools and apps to enrich the lives of many. I am not worried about the
                            programming aspect of this study because I have passed harder programming exams before: Last
                            year I passed a university C-exam with time to spare. I develop a JavaScript application in
                            my free time and I am starting to like JavaScript!",
            ],
            [
                "slug" => "SWOT Analysis",
                "title" => "SWOT Analysis",
                "body" => "<ul>
                            <li>
                                <h3>Strengths</h3>
                                <ul>
                                    <li>I have a good amount of coding experience.</li>
                                    <li>I like making online tools in Javascript.</li>
                                </ul>
                            </li>
                            <li>
                                <h3>Weaknesses</h3>
                                <ul>
                                    <li>I can lose focus of the main goal.</li>
                                    <li>I may not study in time.</li>
                                </ul>
                            </li>
                            <li>
                                <h3>Opportunities</h3>
                                <ul>
                                    <li>I will be able to find new friends in the field.</li>
                                    <li>I will be able to meet companies.</li>
                                    <li>I will get a recognized grade.</li>
                                </ul>
                            </li>
                            <li>
                                <h3>Threats</h3>
                                <ul>
                                    <li>I may not be able to find an internship.</li>
                                    <li>AI may take any future jobs from me.</li>
                                    <li>Big companies may be able to steal any idea I may be working on and outpace me
                                        in its development or use their legal capabilities against me.</li>
                                </ul>
                            </li>
                        </ul>",
            ]
        ];
    }
}
