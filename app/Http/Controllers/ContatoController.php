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
        
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
        
        //SiteContato::create($request->all());
    }

}
