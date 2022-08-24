<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function authenticate(Request $request) {
        $request->validate([
           'username' => 'required',
           'password' => 'required',
        ]);
        $data = $request->json()->all();
        $user = User::validateUser($data);
        if (!empty($user)) {
            $request->session()->regenerate();
            return response('Successfull autorization', 200);
        }
        else {
            return response('Ошибка авторизации, падла', 401);
        }
    }
    public function logout() {

    }

}
