<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }
}
