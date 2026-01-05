<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;

class Admins extends Controller{

    

        public function dados_cliente(){
            try{
                    return response()->json([
                    'genero' => 'Masculino',
                    'idade' => 21,
                    'pais' => 'Brasil'

                ],200);

            }catch(Exception $erro){
                return response('Algo saiu errado!', 500);

            }
        

    

    

    
    }
}