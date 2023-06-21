<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
  public function  __invoke(){
    $UserData=User::all()->count();
    $PostData=Post::all()->count();
    $CategoryData=Category::all()->count();
    $TagData=Tag::all()->count();

    return view('admin.main.index',compact('UserData','PostData','CategoryData','TagData'));
    }
  
}
