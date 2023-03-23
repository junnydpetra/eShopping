<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        $data = [];

        if ($request->isMethod('POST'))
        {
            $login = $request->input('login');
            $senha = $request->input('senha');

            $credencial = ['login' => $login, 'password' => $senha];

            if (Auth::attempt($credencial))
            {
                // dd($credencial);
                return redirect()->route('home');
            } else {
                $request->session()->flash('err', 'Dados inválidos!');
                return redirect()->route('login');
            }
        }


        return view('login', $data);
    }
}
