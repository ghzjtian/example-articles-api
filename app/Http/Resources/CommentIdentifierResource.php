<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

/**
 * 给别的 Resource 使用的方法
 * Class CommentIdentifierResource
 * @package App\Http\Resources
 */
class CommentIdentifierResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type'          => 'comments',
            'id'            => (string)$this->id,
        ];
    }
}
