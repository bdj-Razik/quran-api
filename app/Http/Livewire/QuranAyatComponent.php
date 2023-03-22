<?php

namespace App\Http\Livewire;

use App\Models\Ayah;
use Livewire\Component;

class QuranAyatComponent extends Component
{

    public $ayahRandomBefor, $ayahRandom, $ayahRandomAfter;
    public $surah;

    public function random()
    {

        $random = rand(1, 6236);

        $this->ayahRandomBefor = Ayah::find($random - 1);
        $this->ayahRandom = Ayah::find($random);
        $this->ayahRandomAfter = Ayah::find($random + 1);

        $this->surah = $this->ayahRandom->sura;


    }

    public function render()
    {
        return view('livewire.quran-ayat-component');
    }
}
