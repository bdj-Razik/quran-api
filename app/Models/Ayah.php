<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
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
}
