<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Cetegory\UpdateRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShowController extends Controller
{
  public function  __invoke(Post $post){
    $PostData=Post::paginate();
    $RandPost=Post::get();
    $Tag=Tag::all();
    return view('main.show',compact('post','Tag','PostData'));


    }
  
}
