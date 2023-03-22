<div>

    <div class="row my-3">
        <div class="d-grid gap-2">
            <button wire:click='random' class="btn btn-primary" type="submit">Random</button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="direction: rtl">
                    {{ $ayahRandom->ayah ?? '' }}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 my-3">
            <div class="card">
                <div class="card-header text-center">
                    {{ isset($surah->name) ? $surah->name_ar . ' - ' . $surah->name_en : '' }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        عدد الآيات - Number of ayah : <span>{{ $surah->number_of_ayah ?? '' }}</span>
                    </li>
                    <li class="list-group-item">
                        رقم السورة - Number of surah : <span>{{ $surah->number_of_surah ?? '' }}</span>
                    </li>
                    <li class="list-group-item">
                        مكان - Place : <span>{{ $surah->place ?? '' }}</span>
                    </li>
                    <li class="list-group-item">
                        صنف - Type : <span>{{ $surah->type ?? '' }}</span>
                    </li>

                </ul>
            </div>
        </div>
    </div>


</div>
