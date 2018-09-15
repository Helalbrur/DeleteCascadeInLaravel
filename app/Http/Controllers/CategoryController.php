<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
   public function index(){
    	return view('createCategory');
    }
    public function save(Request $request){
    	$this->validate(request(),[
    		'category_name' => 'required'
    	]);
    	//dd($request->all());
    	category::create(request(['category_name']));
    	return redirect('categoryList');
    }
    public function categoryList(){
        return view('categoryList');
    }
    public function delete_cat($id){
        $cat=category::find($id);
        $cat->post()->delete();
        $cat->delete();
        return redirect('categoryList');
    }
}
