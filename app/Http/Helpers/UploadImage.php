<?php

namespace App\Http\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Request;


class UploadImage {

    public static function saveImage(UploadedFile $image, $url) {
        return $image->store($url);
    }

}