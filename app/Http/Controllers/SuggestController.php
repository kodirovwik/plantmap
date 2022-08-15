<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Orchid\Screen\Layouts\Modal;
use phpDocumentor\Reflection\Types\Void_;


class SuggestController extends Controller
{

    /*
     * Посмотреть все предложения
     * */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);
        $user = $this->validateUser($validated);
        if (!empty($user)){
            $suggestions = Suggestion::all();
            return view('suggest.index', compact('suggestions'));
        }
        else {
            $user = 'Привет';
            return view ('about',compact('user'));
            dump();
        }
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

        if (!empty($request->file('userfile'))) {
           $file = $request->file('userfile')->store('public/user_files',[
               'disks' => 'public'
           ]);
        }
        else {
            return 'Выбери файл, петух!';
        }
        $suggest_data = [
            'name' => $request['name'],
            'description' => $request['description'],
            'lat' => $coordinates [0],
            'lng' => $coordinates [1],
            'file_name' => $request->file('userfile')->getClientOriginalName(),
            'file_url' => $file,
        ];

        Suggestion::create($suggest_data);

        return view('success',compact ('suggest_data'));
//        return redirect()->route('suggestions.index');
    }

    private function validateUser(array $validated)
    {
        if (!empty($validated)) {
            return DB::table('users')->where([
                'name' => $validated['name'],
                'password' => $validated['password'],
            ])->first();
        }
        else {
            return false;
        }
    }
}

