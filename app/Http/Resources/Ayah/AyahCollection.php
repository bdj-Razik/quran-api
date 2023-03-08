<?php

namespace App\Http\Resources\Ayah;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AyahCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'الايات / versets / verses';

    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function with($request)
    {
        return [
            'status' => true,
        ];
    }
}
