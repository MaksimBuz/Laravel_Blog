<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function  __invoke(){
    $PostData=Post::paginate();
    $RandPost=Post::get();
    $Tag=Tag::all();
    return view('main.blog',compact('PostData','RandPost','Tag'));


    }
  
}
