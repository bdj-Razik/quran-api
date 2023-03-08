<?php

namespace Database\Seeders;

use App\Models\Surah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ini_set('memory_limit', -1);

        $json = File::get(public_path('../database/seeders/src/quran-complete.json'));
    
        $elSurat = json_decode($json);
    
        foreach ($elSurat as $surah) {
    
    
            Surah::UpdateOrcreate([
    
                'name' => $surah->name,
                'name_ar' => $surah->name_translations->ar,
                'name_en' => $surah->name_translations->en,
    
                'number_of_ayah' => $surah->number_of_ayah,
                'number_of_surah' => $surah->number_of_surah,
                'place' => $surah->place,
                'type' => $surah->type,
    
            ]);
    
        }
    
    }
}
