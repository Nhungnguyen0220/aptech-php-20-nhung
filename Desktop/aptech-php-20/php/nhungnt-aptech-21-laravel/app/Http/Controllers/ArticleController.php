<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::get();
        return view('articles.index', ['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$_POST['title'] || !$_POST['title_slug'] || !$_POST['content'])
        {
            dd("Vui lòng nhập đầy đủ thông tin. Vui lòng quay Trở lại");
            
        }
        else{

        $articles = Article::get();
        foreach($articles as $article){
            Article::insert([
                'title' => $_POST['title'],
                'title_slug' => $_POST['title_slug'],
                'description' => $_POST['description'],
                'content' => $_POST['content'],
            ]);
            $articles = Article::get();
            return view('articles.index', ['articles' => $articles]);
        }
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=Article::where('id','=', $id)->first();
        return view('articles.show',['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=Article::find($id);
        return view('articles.edit',['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$_POST['title'] || !$_POST['title_slug'] || !$_POST['content'])
        {
            dd("Vui lòng nhập đầy đủ thông tin. Vui lòng quay Trở lại");
        }
        else{
            
        $article = Article::find($id);
        $article->title = $request->title;
        $article->title_slug = $request->title_slug;
        $article->description = $request->description;
        $article->content = $request->content;
   
        $article->save();
        return redirect()->route('articles.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        $articles= Article::get();
        return view('articles.index',['articles' => $articles]);
    }
}
