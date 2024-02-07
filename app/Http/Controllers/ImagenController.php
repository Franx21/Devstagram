<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $imagen = $request->file('file');
        $manager = new ImageManager(new Driver());
        $nombreImagen = hexdec(uniqid()) . '.' . $imagen->getClientOriginalExtension();
        $img = $manager->read($imagen)->resize(1000, 1200)->toJpeg(80)->save(base_path('public/uploads/' . $nombreImagen));

        return response()->json(['imagen' => $nombreImagen]);
    }
}
