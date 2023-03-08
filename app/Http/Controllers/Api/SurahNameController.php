<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Surah\SurahResource;
use App\Models\Surah;
use Illuminate\Http\Request;

class SurahNameController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *     path="/surah_name/{nameSurah}",
     *     tags={"surates"},
     *     description="Return surate",
     *     summary="search surah with name",
     *      @OA\Parameter(
     *               ref="#/components/parameters/nameSurah",
     *      ),
     *     @OA\Response(
     *         response="200",
     *         description="successful operation",
     *         @OA\JsonContent(
     *               ref="#/components/schemas/Success",
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="incorrect url try again",
     *         @OA\JsonContent(
     *               ref="#/components/schemas/IncorrectUrlTryAgain",
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="model not found",
     *         @OA\JsonContent(
     *               ref="#/components/schemas/ModelNotFound",
     *         )
     *     ),
     * )
     *
     */
    public function __invoke($search)
    {
        //
        return SurahResource::make(Surah::with('ayat')->where('name', 'like', '%' . trim($search) . '%')->orWhere('name_ar', 'like', '%' . trim($search) . '%')->orWhere('name_en', 'like', '%' . trim($search) . '%')->first());
    }
}
