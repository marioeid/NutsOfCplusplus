<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;
use App\Post;
class commentscontroller extends Controller
{
    //
    public function store(Request $request)
      {
            $this->validate($request,['body'=>'required']);
            $comment=new comments;
            $comment->body=request('body');
            $comment->post_id=request('post_id');
            $comment->user_name=request('user_name');
            $comment->save();
            // $post->id = $id;
            $response = array(
            'status' => 'success',
            'data' => $comment,
                );
        return response()->json($response); 
     
      }
      public function destroy($id)
      {
            $comment=comments::find($id);
            $comment->delete();
            $response = array(
            'status' => 'success'   
      );
             return response()->json($response); 
      }
}
