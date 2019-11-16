<?php

namespace App\Helpers;
use Illuminate\Support\Str;


/*******************************
 *  class uppload
 *  take the file
 *  return name if save
 * ****************************/
class UploadFile
{
    public static $path = "";
    public static function uploadBase64(String $base64, String $path) : string
    {
        $image     = base64_decode($base64);
        $imgName = uniqid() . '-' . time() . '-' . Str::random(10) . '.jpg';
        $p = 'images/' . $path;
        file_put_contents(public_path($p) . $imgName, $image);
        return (string) $imgName;
    }

    public static function uploadImage ($image, String $path) : string
    {
        $extension = $image->getClientOriginalExtension();
        $imgName = uniqid() . '-' . time() . '-' . Str::random(10) . '.' . $extension;
        $p =   UploadFile::$path ? UploadFile::$path : public_path();
        $p = $p.DIRECTORY_SEPARATOR.$path;
        if (!file_exists($p))
            mkdir($p,0777,true);
        if(!is_writable($p))
            chmod($p, 0755);
        $image->move($p, $imgName);
        return (string) $imgName;
    }

    public static function uploadFile ($image, String $path) : string
    {
        $extension = $image->getClientOriginalExtension();
        $fileName = uniqid() . '-' . time() . '-' . Str::random(10) . '.' . $extension;
        $p =   UploadFile::$path ? UploadFile::$path : public_path();
        $p = $p.DIRECTORY_SEPARATOR . $path;
        if (!file_exists($p))
            mkdir($p,0777,true);
        if(!is_writable($p))
            chmod($p, 0755);
        $image->move($p, $fileName);
        return (string) $fileName;
    }
}

UploadFile::$path = public_path();