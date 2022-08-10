<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Orchid\Screen\Layouts\Modal;
use phpDocumentor\Reflection\Types\Void_;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Support\Facades\Toast;

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

        if (validateUser($validated)) {
            $suggestions = Suggestion::all();
            return view('suggest.index', compact('suggestions'))
        }
        else {

        }


    }
    public function validateUser ($validated){
        $users = User::all();
        foreach ($users as $user) {
            if ($user->name == $validated['name'] and $user->password == $validated['password']) {
                return true;
            }
            else {
                return false;
            }
        }
    }

    public function commandBar(): array
    {
        return [
            ModalToggle::make('Launch demo modal')
                ->modal('exampleModal')
                ->method('action')
                ->icon('full-screen'),
        ];
    }
    public function layout(): array
    {
        return [
            Layout::modal('exampleModal', [
                Layout::rows([]),
            ]),
        ];
    }
    public function action(): void
    {
        Toast::info('Hello, world! This is a toast message.');
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

            $file = $request->file('userfile')->store('user_files', ['disk' => 'public']);
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
}

