<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
            'nome'=>'Fornecedor 1',
            'status'=> 'N',
            'cnpj'=> '0',
            'ddd' => '11', ///Sao paulo - sp
            'telefone'=> '0000-0000'
            ],
            1 => [
                'nome' => 'Forncedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd'=> '85', // fortaleza - ce
                'telefone'=> '0000-0000'
            ],
            2 => [
                'nome' => 'Forncedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd'=> '32', // juiz de fora - mg
                'telefone'=> '0000-0000'
            ]
    ];

    

        return view('app.fornecedor.index', compact('fornecedores'));

    }
}
