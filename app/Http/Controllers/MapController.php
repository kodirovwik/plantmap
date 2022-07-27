<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class MapController extends Controller
{
    public function index()
    {
        return view('map');
    }
}
