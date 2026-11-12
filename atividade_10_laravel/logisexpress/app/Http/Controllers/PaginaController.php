<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function sobre()
    {
        $sistema = 'LogisExpress';
        $mensagem = 'Organizando entregas com eficiência.';
        return view('sobre', ['sistema' => $sistema, 'mensagem' => $mensagem]);
    }
}
