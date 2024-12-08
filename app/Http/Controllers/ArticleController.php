<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Author;
use App\Models\Article;
use App\Models\Category;
use App\Models\ArticleTag;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Article::with("author","categories","tags")->get();
        $authors = Author::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('article.index', compact("data","authors","categories"));
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
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string'
        ]);

        $article = Article::create([
            'title' =>  $request->title,
            'content' => $request->content,
            "author_id" => $request->author_id
        ]);
        foreach ($request->tagId as $key => $value) {
            ArticleTag::create([
                "article_id" =>$article->id,
                "tag_id" =>$value,
            ]);
        }
        foreach ($request->categoryId as $key => $categoryValue) {
            ArticleCategory::create([
                "article_id" =>$article->id,
                "category_id" =>$categoryValue,
            ]);
        }
        return redirect()->back()->with("success", "berhasil membuat article baru");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        try {
            $article->delete();
            return redirect()->route('article.index')->with('success', 'Data has been successfully deleted!');
        } catch (\Exception $e) {
            return redirect()->route('article.index')->with('error', 'Failed to delete data. Please try again.');
        };
    }
}