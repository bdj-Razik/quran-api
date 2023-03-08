<?php

namespace Database\Seeders;

use App\Models\Ayah;
use App\Models\Surah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AyahSeeder extends Seeder
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
        ini_set('max_execution_time', 6000);

        $json = File::get(public_path('../database/seeders/src/quran-complete.json'));

        $elSurats = json_decode($json);

        foreach ($elSurats as $surat) {

            $surat_id = Surah::where('name', $surat->name)->first();

            foreach ($surat->verses as $verse) {

                Ayah::UpdateOrcreate([

                    'number' => $verse->number,
                    'ayah' => $verse->text,
                    'translation_en' => $verse->translation_en,
                    'surat_id' => $surat_id->id,

                ]);
            }

        }
    }
}
