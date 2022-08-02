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

    public function create(){

//        FakeSuggestion::create($suggestArr);

        return view('fake_suggest.create');
    }

    /*
     * Функция добавления в базу новых записей
     * */

    public function suggestPlant()
    {
        $suggestArr = [
            ['name' => 'Витий',
            'description' => 'Албанская кармитка',
            'lat' => 32.445,
            'lng' => 15.234,
            'file_url' => '',
            'file_name' => '',],

                ['name' => 'Егорченко',
                'description' => 'Где это я?',
                'lat' => 32.445,
                'lng' => 15.234,
                'file_url' => 'фывфыв',
                'file_name' => 'вввв',]
        ];
        foreach ($suggestArr as $value) {
            Suggestion::create($value);
        }
    }

    /*
    *  Функция обновления записей в базе
     * суджест айди - это айди записи которую мы хотим апдейтить
     * апдейт - это массив с новыми значениями каждого атрибута
     * например:
     * $suggest_id = 1;
     * $update = [
            'name' => 'Егор Летов',
            'description' => 'нашел на железной дороге путь в валхалу',
            'lat' => 32.445,
            'lng' => 15.234,
            'file_url' => 'asda2113wSAD',
            'file_name' => 'valhala_photo',
        ];
    * */

    public function updatePlant($suggest_id, $update)
    {
        $update = [
            'name' => 'Летов',
            'description' => 'Приветули валхалу',
            'lat' => 32.445,
            'lng' => 15.234,
            'file_url' => 'asda2113wSAD',
            'file_name' => 'Фот Очка',
        ];
        $suggest = Suggestion::find($suggest_id);


        $suggest->update([
            'name' => $update['name'],
            'description' => $update['description'],
            'lat' => $update['lat'],
            'lng' => $update['lng'],
            'file_url' => $update['file_url'],
            'file_name' => $update['file_name'],
        ]);
    }

    public function deletePlant()
    {
        $suggest = Suggestion::find(6);
        $suggest->delete();
        dd($suggest);
    }

    public function firstOrCreate (){
        $nick_name = 'TdX';
        $sugggest = Suggestion::firstOrCreate(
            ['name' => $nick_name],
            []);
    }


    public function updateOrCreate (){
        $update = [
            'name' => 'Miwa',
            'description' => 'Description',
            'lat' => 32.445,
            'lng' => 15.234,
            'file_url' => 'asda2113wSAD',
            'file_name' => 'Фот Очка',
        ];
        $suggest = Suggestion::updateOrCreate([
            'name' => $update['name']
        ],$update);
        dump ($suggest->description);
        dd('done');
    }
}
