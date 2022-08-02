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

    public function store()
    {
        $func = $_POST['func'];
        if ($func === 'func_data') {
            $arr['coordinates'] = $_POST['Coordinates'];
            dd(json_encode($arr));
        }

        $data = request()->validate([
            'name'=>'string',
            'description'=>'string',
        ]);

        Suggestion::create($data);

        return view('success');
    }
}

