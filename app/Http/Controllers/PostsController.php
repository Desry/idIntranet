<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('adminPages.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
        ]);

        $image = $request->file('img_path');
        $new_img_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $new_img_name);

        $form_data = array(
            'title' => $request->title,
            'content' => $request->content,
            'img_path' => $new_img_name
        );        

        Post::create($form_data);

        /*$post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        
            //image upload
            if ($request->hasFile('img_path')){
                $filename = $request->img_path->getClientOriginalName();

                $request->img_path->storeAs('public/uploads', $filename);
            }

        ]);

        $post->save();*/

        return redirect('/posts')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('adminPages.posts.edit', compact('post'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required'        
        ]);


        $post = Post::find($id);
        $post->title = $request->get('title');


        // get textarea value????????
        
        $post->content = $request->get('content');


        $post->save();

        return redirect('/posts')->with('success', 'Post updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    
        return redirect('/posts')->with('success', 'Post deleted successfully');
    }
}
