<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Auth;

use Carbon\Carbon;

use App\Http\Requests\PostRequest;

class PostsController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except(['index','show']);

    }

    public function index()
    {
        // assuming all created users are admins by default, if logged in, able to see ALL posts
        if (Auth::check()){

    	$posts = Post::latest()->get();

        return view('posts.index', compact('posts'));

        }

        // logged out viewers may only see ACTIVE posts
        $posts = Post::where('active','1')->latest()->get();

    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request)
      {
        
        $id = $request->input('post_id');
        $post = Post::find($id);

            $post->title = $request->input('title');
            $post->body = $request->input('body');
        
            if($request->has('save'))
            {
                $post->active = $request->input('save');
            }
            else
            {
                $post->active = $request->input('publish');
                $post->published_at = Carbon::now();
            }

            $post->save();
        
        return view('posts.show', compact('post'));
        
      }


    public function store(PostRequest $request)
    {

        if(request()->has('save'))
        {
            $status = request('save');
            $publish = null;
        }
        else
        {
            $status = request('publish');
            $publish = Carbon::now();
        }

    	Post::create([

            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id(),
            'active' => $status,
            'published_at' => $publish

            ]);

    	return redirect('/');
    }

    public function destroy(Request $request, $id)
    {
    
        $post = Post::find($id);

        if($post && ($post->user_id == $request->user()->id))
        {
            $post->delete();
        }

        return redirect('/');

    }

    // tutorial code pre-refactoring
    /*
    public function store()
    {

    	//dd(request()->all());

    	// Create a new post using the request data
    	$post = new Post;

    	$post->title = request('title');

    	$post->body = request('body');

    	// Save it to the database

    	$post->save();

    	// Redirect to homepage

    	return redirect('/');
    }
    */
}
