<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\URL;

class PowerpuffController extends Controller
{
    public function index()
    {
        return response()->json(
            [
                "products" => array(
                    [
                        "id" => 1,
                        "name" => "Beat 2016",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 70000,
                        "brand" => "honda"
                    ],
                    [
                        "id" => 2,
                        "name" => "Vario 150 2021",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 100000,
                        "brand" => "honda"
                    ],
                    [
                        "id" => 3,
                        "name" => "PCX 2023",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 120000,
                        "brand" => "honda"
                    ],
                    [
                        "id" => 4,
                        "name" => "Aerox 2018",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 100000,
                        "brand" => "yamaha"
                    ],
                    [
                        "id" => 5,
                        "name" => "NMAX 2020",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 100000,
                        "brand" => "yamaha"
                    ],
                    [
                        "id" => 6,
                        "name" => "Mio 2018",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 70000,
                        "brand" => "yamaha"
                    ],
                    [
                        "id" => 7,
                        "name" => "Burgman 2022",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 180000,
                        "brand" => "suzuki"
                    ],
                    [
                        "id" => 8,
                        "name" => "Smash 2016",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 55000,
                        "brand" => "suzuki"
                    ],
                    [
                        "id" => 9,
                        "name" => "Nex 2019",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 80000,
                        "brand" => "suzuki"
                    ],
                    [
                        "id" => 10,
                        "name" => "PRIMAVERA 2019",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 100000,
                        "brand" => "piaggio"
                    ],
                    [
                        "id" => 11,
                        "name" => "SPRINT 2020",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 120000,
                        "brand" => "piaggio"
                    ],
                    [
                        "id" => 10,
                        "name" => "S-125 2018",
                        "image" => URL::to("/storage/powerpuff/image.png"),
                        "price" => 100000,
                        "brand" => "piaggio"
                    ],

                )
            ]
        );
    }
}
