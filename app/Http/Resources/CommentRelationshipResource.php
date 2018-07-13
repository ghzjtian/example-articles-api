<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;


/**
 * 获得相关联的别的 Resource 的类
 * Class CommentRelationshipResource
 * @package App\Http\Resources
 */
class CommentRelationshipResource extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'author'   => [
                'data'  => new AuthorIdentifierResource($this->author),
            ],
        ];

    }

    public function with($request)
    {
        return [
            'links' => [
                'self' => route('comments.index'),
            ],
        ];
    }
}
