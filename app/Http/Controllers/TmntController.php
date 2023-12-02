<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TmntController extends Controller
{
    public function index()
    {
        return response()->json(
            [
                "products" => [
                    [
                        "id" => 1,
                        "title" => "Krudung A",
                        "description" => "Deskripsi untuk Krudung A",
                        "price" => 45000,
                        "category" => "headpiece",
                        "image" => URL::to("/storage/tmnt/IMG_2196.png")
                    ],
                    [
                        "id" => 2,
                        "title" => "Krudung B",
                        "description" => "Deskripsi untuk Krudung B",
                        "price" => 73000,
                        "category" => "hairpiece",
                        "image" => URL::to("/storage/tmnt/IMG_2223.png")
                    ],
                    [
                        "id" => 3,
                        "title" => "Krudung C",
                        "description" => "Deskripsi untuk Krudung C",
                        "price" => 64000,
                        "category" => "bandana",
                        "image" => URL::to("/storage/tmnt/IMG_2224.png")
                    ],
                    [
                        "id" => 4,
                        "title" => "Krudung D",
                        "description" => "Deskripsi untuk Krudung D",
                        "price" => 30000,
                        "category" => "headpiece",
                        "image" => URL::to("/storage/tmnt/IMG_2225.png")
                    ],
                    [
                        "id" => 5,
                        "title" => "Krudung E",
                        "description" => "Deskripsi untuk Krudung E",
                        "price" => 78000,
                        "category" => "bandana",
                        "image" => URL::to("/storage/tmnt/IMG_2245.png")
                    ],
                    [
                        "id" => 6,
                        "title" => "Krudung F",
                        "description" => "Deskripsi untuk Krudung F",
                        "price" => 39000,
                        "category" => "hairpiece",
                        "image" => URL::to("/storage/tmnt/IMG_2246.png")
                    ],
                    [
                        "id" => 7,
                        "title" => "Krudung G",
                        "description" => "Deskripsi untuk Krudung G",
                        "price" => 54000,
                        "category" => "bandana",
                        "image" => URL::to("/storage/tmnt/IMG_2196.png")
                    ],
                    [
                        "id" => 8,
                        "title" => "Krudung H",
                        "description" => "Deskripsi untuk Krudung H",
                        "price" => 48000,
                        "category" => "hairpiece",
                        "image" => URL::to("/storage/tmnt/IMG_2223.png")
                    ],
                    [
                        "id" => 9,
                        "title" => "Krudung I",
                        "description" => "Deskripsi untuk Krudung I",
                        "price" => 31000,
                        "category" => "bandana",
                        "image" => URL::to("/storage/tmnt/IMG_2224.png")
                    ],
                    [
                        "id" => 10,
                        "title" => "Krudung J",
                        "description" => "Deskripsi untuk Krudung J",
                        "price" => 67000,
                        "category" => "hairpiece",
                        "image" => URL::to("/storage/tmnt/IMG_2225.png")
                    ]
                ]
            ]
        );
    }
}
