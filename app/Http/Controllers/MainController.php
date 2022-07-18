<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class MainController extends Controller
{
    public function main()
    {
        return 'Privet';
    }
}
