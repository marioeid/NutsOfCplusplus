<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class Postcontroller extends Controller
{
    //
      public function store(Request $request)
      {
            $this->validate($request,['body'=>'required','title'=>'required']);
            $post=new Post;
            $post->body=request('body');
            $post->title=request('title');
            $request->user()->posts()->save($post);
          // $post->id = $id;
            $response = array(
            'status' => 'success',
            'data' => $post,
        );
            return response()->json($response); 
      }
      public function destroy($id)
      {
            $post=Post::find($id);
            $post->delete();
            $response = array('status' => 'success');
             return response()->json($response); 
      }
}
