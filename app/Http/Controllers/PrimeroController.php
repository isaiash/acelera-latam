<?php namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class PrimeroController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

		



	public function clasifica(Request $request)
	{
 		$data=$request->all();
		$idUsuario=$data["id_usuario"];
		$mpv = $data["mpv"];
		$ventas = $data["ventas"];
		$usuario=User::find($idUsuario);


		if(isset($mpv) and $mpv == 'no'){
		if(isset($ventas) and $ventas == 'si'){		
				return "Opción invalida";
			}
		}

		if(isset($mpv) and $mpv == 'no'){
		if(isset($ventas) and $ventas == 'no'){		
				$usuario->etapa = 'Idea';
			}
		}



		if(isset($mpv) and $mpv == 'si'){
		if(isset($ventas) and $ventas == 'no'){	
				$usuario->etapa = 'Semilla';
			}			
		}
		


		if(isset($mpv) and $mpv == 'si'){
		if(isset($ventas) and $ventas == 'si'){		
			return view('cliente.preguntadesbloq')->with("usuario",  $usuario);
			}
		}



		$resul= $usuario->save();

		if($resul){            
           return view('cliente.etapa')->with("usuario",  $usuario);  
		}
		else
		{            
             return "ERROR!!";  
		}
}





public function clasificaconf(Request $request)
	{

		$data=$request->all();
		$idUsuario=$data["id_usuario"];
		$cantidadventas = $data["cantidadventas"];
		$usuario=User::find($idUsuario);

			if(isset($cantidadventas) and $cantidadventas == 'op1'){		
				$usuario->etapa = 'Temprana';
			}

			if(isset($cantidadventas) and $cantidadventas == 'op2'){		
				$usuario->etapa = 'Expansión';
			}

			if(isset($cantidadventas) and $cantidadventas == 'op3'){		
				$usuario->etapa = 'Internacionalización';
			}

			if(isset($cantidadventas) and $cantidadventas == 'op4'){		
				$usuario->etapa = 'Optimización/Declive';
			}



		$resul= $usuario->save();

		if($resul){            
           return view('cliente.etapa')->with("usuario",  $usuario); 
		}
		else
		{            
            return "ERROR!!"; 
		}


}




}
