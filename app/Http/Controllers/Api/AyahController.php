<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Ayah\AyahCollection;
use App\Models\Ayah;
use Illuminate\Http\Request;

class AyahController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *     path="/ayat",
     *     tags={"ayat"},
     *     description="Return all ayat par page and each page 50 ayat",
     *     summary="Get all ayat par page",
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
    public function __invoke(Request $request)
    {
        //
        return AyahCollection::make(Ayah::paginate(50));

    }
}
