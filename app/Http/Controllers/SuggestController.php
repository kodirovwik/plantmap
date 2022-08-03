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
 * Функция создания новых записей
 * */

    public function create()
    {
        return view('suggest.create');
    }

    /*
* Функция добавления в базу новых записей
* */

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name'=>'required|string',
            'description'=>'required|string',
            'coords' => 'required|string',
        ]);
        $coordinates = explode(',',$validated['coords']);

        $suggest_data = [
            'name' => $request['name'],
            'description' => $request['description'],
            'lat' => $coordinates [0],
            'lng' => $coordinates [1],
        ];

        return view('success',compact ('suggest_data'));
    }
}

