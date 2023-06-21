<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Cetegory\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
  public function  __invoke( StoreRequest $requiest){
    $data=$requiest->validated();
    Category::firstOrCreate( ['title'=>$data['title']]); 
    return redirect()->route('admin.category.index');
    }
  
}
