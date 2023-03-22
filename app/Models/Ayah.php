<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Ayah extends Model implements Searchable
{
    use HasFactory;
    protected $table = 'ayahs';
    public $timestamps = true;
    protected $primaryKey = 'id';

    protected $fillable = [
        'number',
        'ayah',
        'translation_en',
        'surat_id',

    ];

    public function sura()
    {

        return $this->belongsTo(Surah::class, 'surat_id');
    }


    public function getSearchResult(): SearchResult
     {


         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->ayah,
            // $url
         );
     }
}
