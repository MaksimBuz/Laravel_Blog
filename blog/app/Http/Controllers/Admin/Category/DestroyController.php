<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Cetegory\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
  public function  __invoke(Category $category){
    $category->delete();
    return redirect()->route('admin.category.index',compact('category'));

    }
  
}
