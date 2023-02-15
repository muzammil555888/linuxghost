<?php

use Intervention\Image\Facades\Image as Image;

/**
 * Store the Thumbnail to storage and return its full path.
 */
function storeThumbnail($image)
{
    if (!$image) {
        return null;
    }

    $path ='images/'.(date("Ymd").time()).'.'.$image->getClientOriginalExtension();

    Image::make($image)->resize(400, 300, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    })->save( public_path($path));

    return $path;
}

/**
 * Update the new Thumbnail to storage and return its full path. Remove old image.
 */
function updateThumbnail($image, $current_image)
{
    if (!$image) {
        return $current_image;
    }

    if (File::exists(public_path($current_image))) {
        File::delete(public_path($current_image));
    }

    $path ='images/'.(date("Ymd").time()).'.'.$image->getClientOriginalExtension();

    Image::make($image)->resize(400, 300, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    })->save( public_path($path));

    return $path;
}

/**
 * Store the image to storage and return its full path.
 */
function storeImage($image)
{
    if (!$image) {
        return null;
    }

    $path ='images/'.(date("Ymd").time()).'.'.$image->getClientOriginalExtension();

    Image::make($image)->resize(1200, 675, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    })->save( public_path($path));

    return $path;
}

/**
 * Update the new image to storage and return its full path. Remove old image.
 */
function updateImage($image, $current_image)
{
    if (!$image) {
        return $current_image;
    }

    if (File::exists(public_path($current_image))) {
        File::delete(public_path($current_image));
    }

    $path ='images/'.(date("Ymd").time()).'.'.$image->getClientOriginalExtension();

    Image::make($image)->resize(1200, 675, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    })->save( public_path($path));

    return $path;
}
