<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Ayah\AyahResource;
use App\Models\Ayah;
use Illuminate\Http\Request;

class AyahNameController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *     path="/ayah_name/{ayah}",
     *     tags={"ayat"},
     *     description="Return ayah",
     *     summary="search ayah with search",
     *      @OA\Parameter(
     *               ref="#/components/parameters/ayah",
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
        return AyahResource::make(Ayah::with('sura')->where('ayah', 'like', '%' . trim($search) . '%')->orWhere('translation_en', 'like', '%' . trim($search) . '%')->first());
    }
}
