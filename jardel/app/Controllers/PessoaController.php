<?php

namespace App\Controllers;

class PessoaController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    //formulario em branco
    public function new()
    {
        return view('welcome_message');
    }

    //salvar no banco de dados
    public function create()
    {
        return view('welcome_message');
    }

    //formulario de edição
    public function edit()
    {
        return view('welcome_message');
    }

    //formulario atualizado
    public function update()
    {
        return view('welcome_message');
    }

    public function delete()
    {
        return view('welcome_message');
    }
}
