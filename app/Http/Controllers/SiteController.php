<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $nome = "flavio";

        return view('welcome', [
            'nome' => $nome,
        ]);
    }
}
