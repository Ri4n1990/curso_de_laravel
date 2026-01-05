<?php


namespace App\Http\Controllers ;

use Exception;
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Log ;

use function Pest\Laravel\session;

class Usuarios extends Controller{

    public function dados_cliente(Request $request){

        try{

            $nome = $request->nome;
            $nascimento = $request->date('nascimento');
            Log::debug("$nome $nascimento");
            Log::debug('chegou aqui');
            

            return response('eae meu galo' , 200);
            



        

        }catch(Exception $erro){
            Log::debug('Deu ruim' . $erro);
            return response('deu ruim', 500);

        }

       


    }


    public function redireciona(){
        Log::debug('chegou');
        return redirect('/');
    }

    public function dados(){

        return response()->json([
            'nome' => 'Pedrin',
            'peso' => 70.00
        ]);
        
    }


    public function nome_cliente(){
        session(['nome'=> 'clodoaudo']);
        
        return view('diretivas', ['nome' => '']);


    }


    public function produtos(){
        
        $produtos = ['Maça','Pera', 'Banana','Bergamota','Ameixa','Pêssego','Uva','Pitaya'];
        
        return view('produtos',['produtos' => $produtos]);
    }


}



