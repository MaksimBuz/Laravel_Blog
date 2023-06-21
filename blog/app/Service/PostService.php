<?php 
namespace App\Service;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;

class PostService
{
  public function store($data) {
    $tagIds=$data['tag_ids'];
    unset($data['tag_ids']);

    $data['preview_img']=Storage::disk('public')->put('/images',$data['preview_img'] );
    $data['main_img']=Storage::disk('public')->put('/images',$data['main_img'] );
    $post=  Post::firstOrCreate( $data);
    $post->tags()->attach($tagIds);
        
    }


    public function update($data,$post) {
        $tagIds=$data['tag_ids'];
        unset($data['tag_ids']);
        
        if (isset($data['preview_img'])) {
          $data['preview_img']=Storage::disk('public')->put('/images',$data['preview_img'] );
        }
    
        if (isset($data['main_img'])) {
          $data['main_img']=Storage::disk('public')->put('/images',$data['main_img'] );
        }
        $post->update( $data);
        $post->tags()->sync($tagIds);

        return $post;
            
        }
}



?>