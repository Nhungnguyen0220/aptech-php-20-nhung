<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$_POST['title'] || !$_POST['content'])
                {
                    dd("Vui lòng nhập đầy đủ thông tin. Vui lòng quay Trở lại");
                    
                }
        else{

        $posts = Post::get();
        foreach($posts as $post){
            Post::insert([
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'content' => $_POST['content']
            ]);
            $posts = Post::get();
            return view('posts.index', ['posts' => $posts]);
           }
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::where('id','=', $id)->first();
        return view('posts.show',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        if (!$_POST['title'] || !$_POST['content'])
        {
            dd("Vui lòng nhập đầy đủ thông tin. Vui lòng quay Trở lại");
        }
        else{
            
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('posts.index');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        $posts= Post::get();
        return view('posts.index',['posts' => $posts]);
    }
}
