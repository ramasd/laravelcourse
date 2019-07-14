<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourtController extends Controller
{
    public function getCourt($title)
    {
        return view('court', ['title' => $title]);
    }
}
