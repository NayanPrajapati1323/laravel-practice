<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CommentResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'author' => [
                'id' => $this->user?->id,
                'name' => $this->user?->name,
            ],
            'comments' => CommentResource::collection(
                $this->whenLoaded('comments')
            ),
            'created_at' => $this->created_at,
        ];
    }
}
