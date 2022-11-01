<?php

namespace App\Http\Traits;

trait ImageTraits
{
    private function uploadImage($file, $fileName, $path, $oldImage = null)
    {
        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/' . $path),$fileName);
    }
}
