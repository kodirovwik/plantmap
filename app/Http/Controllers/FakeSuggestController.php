<?php

namespace App\Http\Controllers;

use App\Models\FakeSuggestion;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class FakeSuggestController extends Controller
{
    /*
     * Посмотреть все предложения
     * */
    public function index()
    {
        $fake_suggestions = FakeSuggestion::all();

        return view('fake_suggest.index', compact('fake_suggestions'));
    }

    /*
    * Функция добавления в базу новых записей
    */

    public function create()
    {

        return view('fake_suggest.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'descr' => 'required|string'
        ]);
        $file = $request->file('userfile')->store('user_files_shit', ['disk' => 'public']);

        $fake_suggest_data = [
            'description' => $validated ['descr'],
            'file_name' => $request->file('userfile')->getClientOriginalName(),
            'file_url' => $file,
        ];

        FakeSuggestion::create($fake_suggest_data);

        return view('success', compact('fake_suggest_data'));
    }
}
