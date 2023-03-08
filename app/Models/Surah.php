<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    use HasFactory;
    protected $table = 'surahs';
    public $timestamps = true;
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'name_ar',
        'name_en',

        'number_of_ayah',
        'number_of_surah',
        'place',
        'type',
    ];

    public function ayat()
    {

        return $this->hasMany(Ayah::class, 'surat_id');
    }
}
