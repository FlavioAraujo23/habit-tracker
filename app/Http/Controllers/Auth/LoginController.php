<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]));

        if (Auth::attempt($credentials)) {
            // se o usuario estiver autenticado, regenera a sessao
            $request->session()->regenerate();

            // envia ele para home
            return redirect()->intended('/dashboard');
        } else {
            // se as credenciais forem invalidas, retorna com erro
            return back()->withErrors([
                'email' => 'Credenciais inválidas.',
            ]);
        }
    }
}
