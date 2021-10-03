<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index ()
    {
        $articles = Article::with(['category'])->latest()->get();
        return view("articles.index", compact('articles'));
    }

    public function create ()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    public function show ($id)
    {
        $article = Article::with(['category'])->findOrFail($id);
        return view('articles.detail', compact('article'));
    }

    public function store (Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required|numeric|exists:categories,id',
            'content' => 'required|string|min:3'
        ]);
        $article = new Article ;
        $article->title = $request->title;
        $article->category_id = $request->category_id;
        $article->content = $request->content;
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function edit($id)
    {
         $article = Article::with(['category'])->findOrFail($id);
         $categories = Category::all();
         return view('articles.edit', compact('article','categories'));
    }

    public function update(Request $request,$id)
    {
         $request->validate([
             'title' => 'required',
             'category_id' => 'required|numeric|exists:categories,id',
             'content' => 'required'
         ]);
         $article = Article::findOrFail($id);
         $article->title = $request->title;
         $article->category_id = $request->category_id;
         $article->content = $request->content;
         $article->save();

         return redirect('/articles/' . $article->id);
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/articles');
    }
}
