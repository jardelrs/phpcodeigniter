<?php

namespace App\Controllers;

use App\Models\PessoaModel;

class PessoaController extends BaseController
{
    //para listagem de dados
    public function index()
    {

        $pessoaModel = new PessoaModel();
        $data["Dados"] = $pessoaModel->where("id >", 0)->findAll(); 

        return view('Pessoa/list', $data);
    }

    //formulário
    public function new()
    {
        return view('Pessoa/new');
    }

    //salvar no banco de dados
    public function create()
    {
        helper(['form', 'url']);
        $dados = [
            'nome' => $this->request->getPost("nome"),
            'email' => $this->request->getPost("email"),
            'telefone' => $this->request->getPost("telefone"),
        ];
        
        $model = new PessoaModel();
        $model->insert($dados);

         return redirect()->to("http://localhost/henrique/public/pessoa/");
    }

    //formulário de edição
    public function edit($id = 0)
    {
        $model = new PessoaModel();
        $dados["pessoa"] = $model->find($id);

        return view('pessoa/edit', $dados);
    }

    //salvar no banco de dados
    public function update($id = 0)
    {
        $model = new PessoaModel();
        
        $dados = [
            'nome' => $this->request->getPost("nome"),
            'email' => $this->request->getPost("email"),
            'telefone' => $this->request->getPost("telefone"),
        ];

        $model->update($id, $dados);

        return redirect()->to("http://localhost/henrique/public/pessoa/");
    }

    //
    public function delete($id = 0)
    {
        $model = new PessoaModel();
        $model->delete($id);

        return redirect()->to("http://localhost/henrique/public/pessoa/");
    }

    
}
