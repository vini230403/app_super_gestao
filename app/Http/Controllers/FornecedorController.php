<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function fornecedores(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '11', // São Paulo(SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', // Fortaleza(CE)
                'telefone' => '1234-5678'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', // Juiz de Fora(MG)
                'telefone' => '8765-4321'
            ]
        ];
        
        
        
        return view('site.fornecedores', compact('fornecedores'));
    }
}
