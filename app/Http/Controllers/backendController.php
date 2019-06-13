<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;


class backendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::where('userid', Auth::user()->id)->get();
        // return $posts;
        return view('backend.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postIndex()
    {
        //
        return view('backend.createPost');
    }

    public function createPost(Request $request)
    {
        //
        $id = Auth::user()->id;
        $post = new Post;
        $post->title = $request->post_title; 
        $post->post = $request->post_body; 
        $post->userid = $id; 
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file->move('images/', $filename);
            $post->featured_image = $filename;
        }
        $post->save();
        return $request;
    }

    public function postEditIndex($id)
    {
        //
        $post = Post::find($id);
        return view('backend.editPost', ['post'=>$post]);
    }

    public function editPost(Request $request,$postid)
    {
        //
        $id = Auth::user()->id;
        $post = Post::find($postid);
        $post->title = $request->post_title; 
        $post->post = $request->post_body; 
        $post->userid = $id; 
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file->move('images/', $filename);
            $post->featured_image = $filename;
        }
        $post->save();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPost($id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        return back();
    }
}
