<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class FileHelpers {

    public static function upload_file($path, $file)
    {
        $couter = 0;
        $name_of_upload = $file->getClientOriginalName();
        $original_name = pathinfo($name_of_upload, PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();

        if($file->isValid()) {
            while(Storage::disk('public')->exists($path.'/'.$name_of_upload)) {
                $couter++;
                $name_of_upload = $original_name." (".$couter.").".$ext;
            }
            $path = $file->storeAs($path, $name_of_upload, 'public');
            return $path;
        }
    }
}