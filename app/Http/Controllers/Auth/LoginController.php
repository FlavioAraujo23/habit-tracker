<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // se o usuario estiver autenticado, regenera a sessao
            $request->session()->regenerate();

            // envia ele para home
            return redirect()->intended(route('site.dashboard'));
        }

        // se as credenciais forem invalidas, retorna com erro
        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);

    }

    // logout do usuario, retorna uma RedirectResponse
    public function logout(Request $request): RedirectResponse
    {
        // desloga o usuario
        Auth::logout();

        // invalida a sessao e regenera o token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('site.index'));
    }
}
