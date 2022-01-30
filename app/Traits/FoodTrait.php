<?php

namespace App\Traits;

trait FoodTrait
{
    function savePhoto($photo, $dist)
    {
        $ext = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $ext;
        $path = $dist;
        $photo->move($path, $file_name);
        return $file_name;
    }
}
