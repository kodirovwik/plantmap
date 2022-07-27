<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class SuggestController extends Controller
{
    /*
         * Посмотреть все предложения
         * */
    public function index()
    {
        $suggestions = Suggestion::all();

        return view('suggest.index', compact('suggestions'));
    }

    /*
     * Функция добавления в базу новых записей
     * */

    public function create()
    {
//        Suggestion::create($suggestArr);

        return view ('suggest.create');
    }
}
