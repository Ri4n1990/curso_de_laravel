<?php


namespace App\Http\Controllers ;
use Illuminate\Http\Request;

class Prat extends Controller{

   


    public function cadastro(Request $request){

        $request->validate([
            'nome' => ['required', 'max:20'],
            'cpf' => ['required' , 'max:11']
        ],
    [
        'nome.required' => 'digita o nome animal'
    ]);

        return 'Tudo certo!' ;

    }
}