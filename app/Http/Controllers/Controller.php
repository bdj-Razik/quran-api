<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Quran",
 *      description="Quran Api",
 *      @OA\Contact(
 *          name="Razik",
 *          email="razikjob16@gmail.com"
 *      ),
 *      @OA\Tag(
 *          name="Quran",
 *          description="Quran Api"
 *      ),
 *     @OA\License(
 *         name="Laravel 9",
 *         url="https://laravel.com/docs/9.x/"
 *     ),
 * ),
 *
 * @OA\Server(
 *         url=L5_SWAGGER_CONST_HOST,
 * ),
 *
 *


 * @OA\Component(
 *
 *     @OA\Schema(
 *         schema="id",
 *         type= "integer",
 *              @OA\Property(
 *                  property="id",
 *                  type="integer",
 *                  format = "int64",
 *         ),
 *     ),
 *



 * @OA\Component(
 *
 *     @OA\Schema(
 *         schema="name",
 *         type= "string",
 *              @OA\Property(
 *                  property="name",
 *                  type="string",
 *         ),
 *     ),




 *     @OA\Parameter(
 *          name="numberSurah",
 *          description="number surah",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              ref="#/components/schemas/id",
 *         ),
 *     ),


 *     @OA\Parameter(
 *          name="nameSurah",
 *          description="name surah",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              ref="#/components/schemas/name",
 *         ),
 *     ),


 *  @OA\Schema(
 *     schema="Success",
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         description="status message",
 *         example= true,
 *       ),
 *  ),


 *     @OA\Parameter(
 *          name="numberAyah",
 *          description="number ayah",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              ref="#/components/schemas/id",
 *         ),
 *     ),


 *     @OA\Parameter(
 *          name="ayah",
 *          description="ayah",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              ref="#/components/schemas/name",
 *         ),
 *     ),






 *  @OA\Schema(
 *     schema="Failed",
 *     type= "string",
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         description="status message",
 *         example= false,
 *       ),
 *  ),
 *
 *
 *  @OA\Schema(
 *     schema="ModelNotFound",
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         description="status message",
 *         example= false,
 *       ),
 *     @OA\Property(
 *         property="message",
 *         type="string",
 *         description="error message",
 *         example="Model Not Found",
 *     ),
 *  ),
 *
 *
 *  @OA\Schema(
 *     schema="IncorrectUrlTryAgain",
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         description="status message",
 *         example= false,
 *       ),
 *       @OA\Property(
 *           property="message",
 *           type="string",
 *           description="error message",
 *           example="Incorrect Url for api",
 *       ),
 *  ),
 * ),
 *


 *
 */

class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
