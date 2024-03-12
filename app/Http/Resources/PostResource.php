<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Str;

class PostResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
//        $sotBody = Str::limit($this->body,100,'...');
//        return [
//            'id' => $this->id,
//            'title' => $this->title,
//            'slug' => $this->slug,
//            'body' => $this->body,
//            'author' => $this->user()?->name,
//            'updated_at' => $this->updated_at,
//        ];

        return [
            'posts' => $this->collection,
        ];
    }
}
