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
       $posts =Post::all(); 
	   return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {	  
		if($request->hasFile('thumbnail') && $request->thumbnail->isValid())
		{
		$extension = $request->file('thumbnail')->extension();
		$filename =time()."_.".$extension;
		$request->thumbnail->move(public_path('images'),$filename);
	}  else {
		$filename="no-image.png";
	}

         \App\Post::create([
		  'title'=>$request->title,
           'body'=>$request->blogtest,
		   'thumbnail'=>$filename,
		 
		 
		 ]);
		 return redirect('post/show')->with('message','your post is added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

		
        $posts = Post::find($post);
		//dd($posts);
		return view('post.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {    dd($post);
        $posts = Post::find($post);
		return view('post.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //dd($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
