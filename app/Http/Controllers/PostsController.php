<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
   
    public function index()
    {
        //
        $post = Post::all();
        return response()->json( $post );
    }
    public function show()
    {
        //
        return response()->json('Show funcionando');
    }
    public function store( Request $request )
    {
        //
        $post = Post::create( $request->all() );
        return response()->json( $post );
    }
    public function update( Request $request , $id )
    {
        //
        $post = Post::find( $id );
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->views = $request->input('views');
        $post->save();

        return response()->json( $post );
    }
    public function destroy( $id )
    {
        //
        $post = Post::find( $id );
        $post->delete();
        return response()->json('Removed Successfully.');
    }


}
