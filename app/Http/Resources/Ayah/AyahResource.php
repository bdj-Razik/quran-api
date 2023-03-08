<?php

namespace App\Http\Resources\Ayah;

use App\Http\Resources\Surah\SurahResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AyahResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'الاية / versets / verses';

    public function toArray($request)
    {

        return [
            'number' => $this->number,
            'ayah' => $this->ayah,
            'translation_en' => $this->translation_en,
            'sura' => SurahResource::make($this->whenLoaded('sura')),

        ];

    }

    public function with($request)
    {
        return [
            'status' => true,
        ];
    }
}
