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

    public function random() {
        $message = [
            'name' => '',
            'description' => '',
            'lat' => '',
            'lng' => '',
            'file_url' => '',
            'file_name' => '',
            'is_published' => '',
        ];
        $message ['name'] = 'Пашок'.random_int (0,100);
        $message ['description'] = 'Тут какой-то текст'.random_int (0,100);
        $message ['lat'] = random_int (0,1000);
        $message ['lng'] = random_int (0,1000);
        $message ['file_url'] = 'Урл файла'.random_int (0,1000);
        $message ['file_name'] = 'Имя файла'.random_int (0,1000);
        $message ['is_published'] = random_int (0,1);

        Suggestion::create($message);
        $messages = Suggestion::all();
        dump($messages);
    }
}
