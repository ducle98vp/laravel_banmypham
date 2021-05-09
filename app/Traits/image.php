<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;

trait Image
{
    function uploadImage($file)
    {
            $imgName = $file->getClientOriginalName();//lấy ra tên file ảnh
            $imgName = time() . rand(0, 999999) . $imgName;//đặt lại tên file ảnh
            $dir_uploads = public_path('assets/uploads');// tao ra thu muc voi duong dan assets/upload
            $file->move($dir_uploads, $imgName);// di chuyen file va duong dan vua tao o tren
            return $imgName;// tra ve ten file vua luu
    }
    function deleteImage($image)
    {
        $image_path = "images/products/".$image;
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }
    function deleteMultiImage($images)
    {
        foreach ($images as $image)
        {
            $this->deleteImage($image);
        }
    }
}
