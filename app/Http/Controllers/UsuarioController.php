<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        $data = [];

        if ($request->isMethod('POST'))
        {
            $login = $request->input('login');
            $senha = $request->input('senha');

            $login = preg_replace("/[^0-9]/", "", $login);

            $credencial = ['login' => $login, 'password' => $senha];

            if (Auth::attempt($credencial))
            {
                return redirect()->route('home');
            } else {
                $request->session()->flash('err', 'Dados inválidos!');
                return redirect()->route('login');
            }
        }


        return view('login', $data);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
