<?php namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class PrimeroController extends Controller{
    public function __construct(){
		$this->middleware('auth');
	}

	public function clasifica(Request $request){
 		$data=$request->all();
		$idUsuario=$data["id_usuario"];
		$mpv = $data["mpv"];
		$ventas = $data["ventas"];
		$cantidadventas = $data["cantidadventas"];
		$usuario=User::find($idUsuario);

		if(isset($mpv) and $mpv == 'no' and isset($ventas) and $ventas == 'si'){	
			return "Opción invalida";
		}

		if(isset($mpv) and $mpv == 'no' and isset($ventas) and $ventas == 'no'){
			$usuario->etapa = 'Idea';
		}

		if(isset($mpv) and $mpv == 'si' and isset($ventas) and $ventas == 'no'){
			$usuario->etapa = 'Semilla';
		}
		
		if(isset($mpv) and $mpv == 'si' and isset($ventas) and $ventas == 'si'){
			if(isset($cantidadventas) and $cantidadventas == 'op1'){		
				$usuario->etapa = 'Temprana';
			}

			else if(isset($cantidadventas) and $cantidadventas == 'op2'){		
				$usuario->etapa = 'Expansión';
			}
	
			else if(isset($cantidadventas) and $cantidadventas == 'op3'){		
				$usuario->etapa = 'Internacionalización';
			}
	
			else if(isset($cantidadventas) and $cantidadventas == 'op4'){		
				$usuario->etapa = 'Optimización/Declive';
			}
		}
		$resul= $usuario->save();

		if($resul){            
           return view('cliente.etapa')->with("usuario",  $usuario); 
		}
		else{            
            return "ERROR!!"; 
		}
	}	
}
