<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Surah\SurahCollection;
use App\Models\Surah;
use Illuminate\Http\Request;

class SurahController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *     path="/surates",
     *     tags={"surates"},
     *     description="Return all surates",
     *     summary="Get all surates",
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
    public function __invoke()
    {
        //
        return SurahCollection::make(Surah::all());

    }
}
