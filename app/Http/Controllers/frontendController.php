<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Post;
use App\User;
use App\Comments;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::latest()->paginate(8);
        $user = User::all();
        return View('frontend.post', ['posts' =>$posts, 'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function showPost($username,$postid)
    {
        //
        $post = Post::find($postid);
        $user = User::find($post->userid);
        $comments = Comments::where('postid',$postid)->latest()->get();
        // return [$postid, $comments];
        return view('frontend.single-post',['post'=>$post, 'user'=>$user, 'comments'=> $comments]);
    }

    public function showAllPost($username)
    {
        //
        $userid = User::where('user_name',$username)->first()->id;
        $post = Post::where('userid', $userid)->paginate(8);
        $user = User::all();
        return View('frontend.post', ['posts' =>$post, 'user'=>$user]);
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
    public function destroy($id)
    {
        //
    }
}
