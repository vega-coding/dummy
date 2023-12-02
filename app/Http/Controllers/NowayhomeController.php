<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class NowayhomeController extends Controller
{
    public function index()
    {
        return response()->json(
            [
                "products" => [
                    [
                        "id" => 1,
                        "img" => URL::to("/storage/nowayhome/1.jpg"),
                        "title" => "Nike Air Max 97",
                        "price" => 96.0,
                        "diskon" => null
                    ],
                    [
                        "id" => 2,
                        "img" => URL::to("/storage/nowayhome/2.jpg"),
                        "title" => "Nike Air Jordan",
                        "price" => 96.0,
                        "diskon" => null
                    ],
                    [
                        "id" => 3,
                        "img" => URL::to("/storage/nowayhome/3.jpg"),
                        "title" => "Nike SB Dunk",
                        "price" => 96.0,
                        "diskon" => null
                    ],
                    [
                        "id" => 4,
                        "img" => URL::to("/storage/nowayhome/4.jpg"),
                        "title" => "Nike Air Force 1",
                        "price" => 96.0,
                        "diskon" => null
                    ],
                    [
                        "id" => 5,
                        "img" => URL::to("/storage/nowayhome/a.png"),
                        "title" => "Adidas Munchen",
                        "price" => 96.0,
                        "diskon" => null
                    ],
                    [
                        "id" => 6,
                        "img" => URL::to("/storage/nowayhome/c.png"),
                        "title" => "Adidas Samba OG",
                        "price" => 96.0,
                        "diskon" => null
                    ],
                    [
                        "id" => 7,
                        "img" => URL::to("/storage/nowayhome/d.png"),
                        "title" => "Adidas Handball Spezial",
                        "price" => 96.0,
                        "diskon" => null
                    ],
                    [
                        "id" => 8,
                        "img" => URL::to("/storage/nowayhome/e.png"),
                        "title" => "Adidas Hamburg",
                        "price" => 96.0,
                        "diskon" => null
                    ],
                    [
                        "id" => 9,
                        "img" => URL::to("/storage/nowayhome/f.png"),
                        "title" => "Adidas Hamburg",
                        "diskon" => 100.0,
                        "price" => 96.0
                    ],
                    [
                        "id" => 10,
                        "img" => URL::to("/storage/nowayhome/g.png"),
                        "title" => "Nike SB Dunk",
                        "diskon" => 100.0,
                        "price" => 96.0
                    ],
                    [
                        "id" => 11,
                        "img" => URL::to("/storage/nowayhome/h.png"),
                        "title" => "Adidas Munchen",
                        "diskon" => 100.0,
                        "price" => 96.0
                    ],
                    [
                        "id" => 12,
                        "img" => URL::to("/storage/nowayhome/1.jpg"),
                        "title" => "Nike Air Force 1",
                        "diskon" => 100.0,
                        "price" => 96.0
                    ],
                    [
                        "id" => 13,
                        "img" => URL::to("/storage/nowayhome/1.jpg"),
                        "title" => "Adidas Handball Spezial",
                        "diskon" => 100.0,
                        "price" => 96.0
                    ]
                ]
            ]
        );
    }
}
