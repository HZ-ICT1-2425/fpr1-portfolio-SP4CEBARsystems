<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    /**
     * @return View the blog's 'index' page
     */
    public function blogIndex(): View
    {
        return view('articles.index');
    }

    /**
     * @return View the blog's 'show' page
     */
    public function blogShow(): View
    {
        return view(
            'articles.show',
            [
                'article' => $this->findArticle(request('id'))
            ]
        );
    }

    /**
     * Finds the article at the specified id
     * @param int $id to access an article by
     * @return array|void the found article
     */
    private function findArticle(int $id)
    {
        if ($id > count($this->loadArticles()) || $id < 1) {
            abort(404, "Article not found");
        } else {
            return $this->loadArticles()[$id - 1];
        }
    }

    /**
     * @return array[] all articles
     */
    private function loadArticles(): array
    {
        return [
            [
                "id" => 1,
                "page_title" => "Feedback",
                "title" => "First Feedback",
                "content" => "
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
                "created_at" => "2023-10-15 09:00:00",
                "updated_at" => "2023-10-15 09:30:00",
            ],
            [
                "id" => 2,
                "page_title" => "ICT Field Of Work",
                "title" => "ICT Field Of Work",
                "content" => "Hello internet! I like web development, this field of engineering allows products to be
                            developed relatively quickly and cheaply. The distribution of software is far easier than of
                            physical products. In this field, there is plenty of work available and if that was not
                            enough,
                            starting a software company is relatively easy, cheap, and low risk.",
                "created_at" => "2023-10-15 09:00:00",
                "updated_at" => "2023-10-15 09:30:00",
            ],
            [
                "id" => 3,
                "title" => "My programming biography",
                "page_title" => "My programming biography",
                "content" => "Since 2018 I have been enjoying programming, I started by making small programs in the
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
                "created_at" => "2023-10-15 09:00:00",
                "updated_at" => "2023-10-15 09:30:00",
            ],
            [
                "id" => 4,
                "page_title" => "Study Choice",
                "title" => "Study Choice",
                "content" => "Hello internet! I chose this study direction because I like web development and I plan
                            to make online tools and apps to enrich the lives of many. I am not worried about the
                            programming aspect of this study because I have passed harder programming exams before: Last
                            year I passed a university C-exam with time to spare. I develop a JavaScript application in
                            my free time and I am starting to like JavaScript!",
                "created_at" => "2023-10-15 09:00:00",
                "updated_at" => "2023-10-15 09:30:00",
            ],
            [
                "id" => 5,
                "page_title" => "SWOT Analysis",
                "title" => "SWOT Analysis",
                "content" => "<ul>
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
                "created_at" => "2023-10-15 09:00:00",
                "updated_at" => "2023-10-15 09:30:00",
            ]
        ];
    }
}
