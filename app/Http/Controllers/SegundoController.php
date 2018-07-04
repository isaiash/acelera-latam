<?php namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Respuesta;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SegundoController extends Controller
{
    
     public function __construct(){
		$this->middleware('auth');
	}






public function continue(){

 $usuarioactual=\Auth::user();

        if( $usuarioactual->etapa == 'No definida'){

             return view('cliente.home')->with("usuario",  $usuarioactual);
        }

      if( $usuarioactual->etapa == 'Idea'){

             return view('cliente.preguntasq.idea')->with("usuario",  $usuarioactual);
        }

      else{
       return view('cliente.aviso')->with("msj","Falta agregar dimensiones"); 

      }


}





	public function q1(Request $request){

	    $data = $request->all();
	    $respuesta1 = new Respuesta;
	    $respuesta2 = new Respuesta;
	    $respuesta3 = new Respuesta;
	    $respuesta4 = new Respuesta;
		$idUsuario = $data["id_usuario"];
		$p1 = $data["p1"];
		$p2 = $data["p2"];
		$p3 = $data["p3"];
		$p4 = $data["p4"];
		$usuario=User::find($idUsuario);



		$respuesta1->respuesta = $p1;
		$respuesta1->user_id = $idUsuario;
		$respuesta1->pregunta_id = '1';

		$respuesta2->respuesta = $p2;
		$respuesta2->user_id = $idUsuario;
		$respuesta2->pregunta_id = '2';

		$respuesta3->respuesta = $p3;
		$respuesta3->user_id = $idUsuario;
		$respuesta3->pregunta_id = '3';

		$respuesta4->respuesta = $p4;
		$respuesta4->user_id = $idUsuario;
		$respuesta4->pregunta_id = '4';


		$resul1= $respuesta1->save();
		$resul2= $respuesta2->save();
		$resul3= $respuesta3->save();
		$resul4= $respuesta4->save();



		

	 if($resul4){            
           return view('cliente.aviso')->with("msj","Respuestas registradas correctamente");  
		}



	}



}
