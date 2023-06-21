<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\StoreRequest;

class StoreController extends BaseController
{
  public function  __invoke( StoreRequest $requiest){
    $data=$requiest->validated();
    $this->service->store($data);
    return redirect()->route('admin.post.index');
    }
  
}
