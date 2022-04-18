<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Encryption\Encrypter;


/**
 * @SWG\Swagger(
 *   basePath="/api/v2",
 *   @OA\Info(
 *     title="Anurag Deep APIs",
 *     version="1.0",
 *   )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

    }
}
