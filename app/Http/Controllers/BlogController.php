<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogFormRequest;

class BlogController extends Controller
{
    public function store(BlogFormRequest $request){
        $data=$request->validated();

        $blog=new Blog;
        $blog->title=$data['title'];
        $blog->description=$data['description'];

        $blog->save();
        return redirect(route('viewblogs'))->with('message','Blog Added Successfully');
        
   }

   public function index(){
        $blogs=Blog::all();
        return view('blogs.index',compact('blogs'));
   }
}
