<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('articles.index', [
            'articles' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    //: Application|Redirector|RedirectResponse
    {
//        $title = request('title');
//        $content = request('content');
//        $slug = request('slug');

        $validated = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'slug' => 'required|string'
        ]);

        Post::create($validated);
//        Post::created($validated);
//        Post::creating($validated);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
//        dd($post);
//                $this->findArticle(request('id')
        return view(
            'articles.show',
            [
                'article' => $post
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('articles.edit');
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
     * Finds the article at the specified id
     * @param int $id to access an article by
     * @return array|void the found article
     */
//    private function findArticle(int $id)
//    {
//        if ($id > count($this->loadArticles()) || $id < 1) {
//            abort(404, "Article not found");
//        } else {
//            return $this->loadArticles()[$id - 1];
//        }
//    }
}
