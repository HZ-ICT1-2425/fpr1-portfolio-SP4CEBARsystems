<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function blogShow() {
        return view(
            'articles.show',
            [
                'article' => findArticle(request('id'))
            ]
        );
    }

    function blogIndex() {
        return view('articles.index');
    }
}
