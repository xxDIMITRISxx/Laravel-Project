<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        //$posts = Post::paginate(10);
        //$posts = Auth::user()->posts()->get();
        return view('posts.index', ['posts' => $posts]);
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
        
        $validateData = $request->validate([
            'title'=> 'required|max:50',
            'post'=> 'required|max:500',
            'region'=> 'required|max:50',
        ]);

        $p = new Post;

        $p->title = $validateData['title'];
        $p->description = $validateData['post'];
        $p->region = $validateData['region'];
        $p->user_id = Auth::user()->id;
        $p->save();

        //session()->flash('message', 'Post was created.');

        return redirect()->route('posts.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $post->id)->paginate(5);                                   
        return view('posts.show', ['post' => $post, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        if ($post->user_id !== Auth::id()) {
            return abort(404);
        }
        return view('posts.edit', compact('post'));
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
            'title'=> 'required|max:50',
            'post'=> 'required|max:500',
            'region'=> 'required|max:50',
        ]);
        
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->description = $request->post;
        $post->region = $request->region;
        $post->user_id = Auth::user()->id;
        
        $post->update();

        return redirect()->route('users.show', ['user' => $post->user->username]);
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        session()->flash('message', 'Post was deleted!');
        
        return redirect()->route('posts.index');
    }
}
