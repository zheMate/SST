<?php

namespace App\Service;

use App\Models\Post;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            Db::beginTransaction();
            if (isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }
            $data['preview_image'] = Storage::put('/images', $data['preview_image']);
            $data['main_image'] = Storage::put('/images', $data['main_image']);
            $post = Post::firstOrCreate($data);
            if (isset($tagIds)) {
                $post->tags()->attach($tagIds);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $post)
    {

        try {
            Db::beginTransaction();
            if (isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            if (isset($data['preview_image'])) {
                if(isset($post['preview_image']))
                {
                    $destination_prev = $post->preview_image;
                    if(Storage::exists($destination_prev))
                    {
                        Storage::delete($destination_prev);
                    }


                $data['preview_image'] = Storage::put('/images', $data['preview_image']);
                }
            }




            if (isset($data['main_image'])) {
                if(isset($post['main_image']))
                {
                    $destination_main = $post->main_image;
                    if(Storage::exists($destination_main))
                    {
                        Storage::delete($destination_main);
                    }
                }


                $data['main_image'] = Storage::put('/images', $data['main_image']);

            }
            $post->update($data);
            if (isset($tagIds)) {
                $post->tags()->sync($tagIds);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            
            abort(500);
        }
        return $post;
    }
}