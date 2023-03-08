<?php

namespace App\Http\Resources\Surah;

use App\Http\Resources\Ayah\AyahCollection;
use App\Http\Resources\Ayah\AyahResource;
use Illuminate\Http\Resources\Json\JsonResource;

class SurahResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'السورة / Sourate / Sura';

    public function toArray($request)
    {
        return [

            'name' => $this->name,
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'number_of_ayah' => $this->number_of_ayah,
            'number_of_surah' => $this->number_of_surah,
            'place' => $this->place,
            'type' => $this->type,
            'ayat' => AyahCollection::make($this->whenLoaded('ayat')),

        ];
    }

    public function with($request)
    {
        return [
            'status' => true,
        ];
    }
}
