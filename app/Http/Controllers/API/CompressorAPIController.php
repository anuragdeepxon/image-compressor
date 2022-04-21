<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\APIBaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;



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
    public function image_compressor(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'image' => 'mimes:jpeg,jpg,png|max:1024000',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first());
        }

        if ($request->file('image')) {
            $image = $request->file('image');

            $imageName = time() . '_' . $image->getClientOriginalName();
            $imageName = preg_replace('#[ -]+#', '-', $imageName);

            $originalSize = $image->getSize();

            $img = Image::make($image->getRealPath());

            $img = $img->encode('jpg', 17);

            dd(floor($img->filesize() / 1024));
        }

        if (!$data) {
            return $this->sendError('Image compression failed');
        }

        return $this->sendResponse(null, 'Image compressed successfully');
    }
}
