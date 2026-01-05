<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;


use Illuminate\Support\Facades\Log ;

class  Show extends Controller{

    public function requisicoes(Request $request){

        // Log::debug($request->filled('nome'));
        if($request->hasFile('foto')){
            $extensao = $request->file('foto')->getClientOriginalExtension();
            $arq = 'tomadanosharp.'. $extensao;
            $request->file('foto')->storeAs('images',$arq);
             Log::debug('oi');

        }
       

        
        
        
        return "nada"; 
    }

    public function init(Request $request): View{
        Log::debug(url()->current());
        session()->put('usuarios' , ['pletiz','popus']);
        session()->push('usuarios' , 'clunis');
        $users = session()->get('usuarios');
        Log::debug($users);

        
        
        // $nome = session()->get('usuarios');
        
        return view('pagina_principal');
    }
}
























// class Show extends Controller implements HasMiddleware{


//     public static function middleware(): array{

//         return [
//             new Middleware('Verificacao', only:['test'])
//         ];

//     }

//     public function init(): View{
        
//         return view('pagina_principal');
//     }


//     public function test(){
//         return 'Eae' ;
//     }
    

    
    


    
// }

