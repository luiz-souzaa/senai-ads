<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntregaController extends Controller
{
    public function index(){
        $entregas = [
            ['id' => 1, 'destinatario' => 'Luiz', 'endereco' => 'Rua SENAI, 123, Cruzeiro - SP', 'status' => 'Entregue'],
            ['id' => 2, 'destinatario' => 'Andreza', 'endereco' => 'Rua SENAI, 456, Lorena - SP', 'status' => 'Em trânsito'],
            ['id' => 3, 'destinatario' => 'Paulo Skaf', 'endereco' => 'Avenida Paulista, 80, São Paulo - SP', 'status' => 'Pendente'],
            ['id' => 4, 'destinatario' => 'Felipe', 'endereco' => 'Avenida SENAI, 920, Lorena - SP', 'status' => 'Pendente']
        ];
        return view('entregas', ['entregas' => $entregas]);
    }
}
