<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class NawaituController extends Controller
{
    public function index()
    {
        return response()->json(
            [
                "products" => [
                    [
                        "id" => 1,
                        "img" => URL::to('/storage/nawaitu/ImagesUIUX.svg'),
                        "judul" => "Kursus Desain UI/UX",
                        "price" => 150000,
                        "category" => "ui/ux"
                    ],
                    [
                        "id" => 2,
                        "img" => URL::to('/storage/nawaitu/PicturePM.svg'),
                        "judul" => "Kursus Manajemen Produk",
                        "price" => 250000,
                        "category" => "product management"
                    ],
                    [
                        "id" => 3,
                        "img" => URL::to('/storage/nawaitu/PictureFSD.svg'),
                        "judul" => "Kursus Pengembang Full Stack",
                        "price" => 300000,
                        "category" => "full stack developer"
                    ],
                    [
                        "id" => 4,
                        "img" => URL::to('/storage/nawaitu/PictureLeadership.svg'),
                        "judul" => "Kursus Pemrograman Python",
                        "price" => 120000,
                        "category" => "full stack developer"
                    ],
                    [
                        "id" => 5,
                        "img" => URL::to('/storage/nawaitu/ImagesUIUX.svg'),
                        "judul" => "Kursus Desain Grafis",
                        "price" => 180000,
                        "category" => "ui/ux"
                    ],
                    [
                        "id" => 6,
                        "img" => URL::to('/storage/nawaitu/PictureLeadership.svg'),
                        "judul" => "Kursus Analisis Data",
                        "price" => 200000,
                        "category" => "product management"
                    ],
                    [
                        "id" => 7,
                        "img" => URL::to('/storage/nawaitu/PictureFSD.svg'),
                        "judul" => "Kursus Pengembangan Web Front-end",
                        "price" => 220000,
                        "category" => "full stack developer"
                    ],
                    [
                        "id" => 8,
                        "img" => URL::to('/storage/nawaitu/PictureFSD.svg'),
                        "judul" => "Kursus Pemrograman Java",
                        "price" => 180000,
                        "category" => "full stack developer"
                    ],
                    [
                        "id" => 9,
                        "img" => URL::to('/storage/nawaitu/ImagesUIUX.svg'),
                        "judul" => "Kursus Desain User Interface",
                        "price" => 160000,
                        "category" => "ui/ux"
                    ],
                    [
                        "id" => 10,
                        "img" => URL::to('/storage/nawaitu/PicturePM.svg'),
                        "judul" => "Kursus Manajemen Produk Agil",
                        "price" => 350000,
                        "category" => "product management"
                    ]
                ]
            ]
        );
    }
}
