<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

// use Services\InterventionImage; 使用できなかった。


class ImageService
{
  public static function upload($imageFile, $folderName){

    $fileName = uniqid(rand().'_');
    $extension = $imageFile->extension();
    $fileNameToStore = $fileName. '.' . $extension;
    $resizedImage = InterventionImage::make($imageFile)->resize(1920, 1080)->encode();
    Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizedImage );
    
    return $fileNameToStore;
  }
}