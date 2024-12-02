<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato() {
        
        $motivo_contatos = MotivoContato::all();

        return view('site.contato',['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }
    
   /* public function processaContato(Request $request){
          
        
        $contato = new SiteContato();
        $contato->nome = $request->input('nome_');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();*/

        /*
        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('site.contato',['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    
    }*/

    public function salvar(Request $request){

        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required|min:12|max:13|unique:site_contatos',
            'email' => 'email|unique:site_contatos',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres',
            'unique' => ':Attribute informado já está cadastrado',
            'required' => 'O campo :attribute deve ser preenchido',
            'email.email' => 'Digite um email válido',
            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres'
        ];
        
        $request->validate($regras, $feedback);
        
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }

}
