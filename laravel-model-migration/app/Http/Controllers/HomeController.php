<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vacanza;

class HomeController extends Controller
{
    public function index()
    {
        $vacanze = Vacanza::all();

        $data = [
            "vacanze" => $vacanze
        ];

        return view('home', $data);
    }
}
