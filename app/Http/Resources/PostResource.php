<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PostResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $shortBody = Str::limit($this->body,100,'...');
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->when(!$request->routeIs('posts.index')&&$this->id===1,$this->body),
            'html' => $this->html,
            'short_body' => $shortBody,
            'updated_at' => $this->updated_at,
        ];
    }
}
