<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\APIBaseController;
use Illuminate\Http\Request;

class CompressorAPIController extends APIBaseController
{

    /**
     * @OA\GET (
     *   path="/hosting-checker",
     *   summary="Get Hosting Data.",
     *   tags={"Hosting"},
     *   @OA\Response(
     *     response=200,
     *     description="Response.",
     *     @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="title",
     *                     description="API title response.",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="descriptione",
     *                     description="API descriptione response.",
     *                     type="string"
     *                 )
     *                 ),
     *             ),
     *         ),
     *   ),
     * ),
     */

    ########### Get Data ############
    public function index()
    {

        if (!$data) {
            return $this->sendError('Data not found');
        }

        return $this->sendResponse($data, 'Data retrieved successfully');
    }
}
