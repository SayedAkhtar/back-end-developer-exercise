<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

class commentsController extends Controller
{
    //
    public function create(Request $request){
        // return $request;
        $comment = new Comments;
        $comment->userid = $request->userid;
        $comment->postid = $request->postid;
        $comment->name = $request->commenter_name;
        $comment->comment = $request->comment;
        $comment->save();
        return back();
    }
    public function edit(Request $request, $id){

    }
    public function delete($id){

    }
}
