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

    }
    public function logout() {

    }

}
