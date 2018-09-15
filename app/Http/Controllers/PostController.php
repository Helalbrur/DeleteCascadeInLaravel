<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
    public function createPost(){
		return view('createPost');
	}
    public function save(Request $request){
    	$this->validate(request(),[
    		'content' => 'required',
    		'category_id' => 'required',
    	]);
    	//dd($request->all());
    	post::create($request->all());
    	return redirect('postList');
    }
    public function postList(){
    	$posts=post::get();
    	return view('postList',compact('posts'));
    }
    public function delete_post($id){
    	$post=post::find($id);
    	$post->delete();
    	return redirect('postList');
    }
}
