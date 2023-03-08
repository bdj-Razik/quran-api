<?php

namespace App\Http\Resources\Surah;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SurahCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'السور / Surates / Surat';

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
