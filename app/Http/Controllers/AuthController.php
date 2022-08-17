<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request) {
        $data = $request->json()->all();
        $user = User::validateUser($data);
        if (!empty($user)) {
            $session = session(['session_id' => session()->getId()]);
            return redirect()->route('suggestions.index', compact('session'));
        }
        else {
            return response('Ошибка авторизации', 422);
        }
    }
    public function logout() {
        session()->forget('laravel_session');
    }

}
