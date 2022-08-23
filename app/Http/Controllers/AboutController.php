<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use phpDocumentor\Reflection\Types\Void_;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }
}
