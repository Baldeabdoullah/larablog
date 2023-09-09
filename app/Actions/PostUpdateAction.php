<?php

namespace App\Actions;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostUpdateAction


{
    public function handle(Request $request, Post $post): void

    {


        $arrayUpdate = [
            'title' => $request->title,
            'content' => $request->content
        ];

        $post->category()->associate(Category::find($request->category));

        if ($request->image != null) {
            $imageName = $request->image->store('posts');
            $arrayUpdate = array_merge($arrayUpdate, [
                'image' => $imageName
            ]);
        }

        $post->update($arrayUpdate);
    }
}
