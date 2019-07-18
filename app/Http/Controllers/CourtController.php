<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Court;

class CourtController extends Controller
{
    public function getCourt($court_id)
    {
        $court = Court::find($court_id);
        return view('admin.courts.court', compact('court'));
    }
}
