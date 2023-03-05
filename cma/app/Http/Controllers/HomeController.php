<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    /**
     * Exibe a página principal da aplicação.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $mensagem = 'Bem-vindo(a) ao meu projeto Laravel!';

        return view('main', compact('mensagem'));
    }
}
