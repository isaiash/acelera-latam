<?php namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



<<<<<<< HEAD
class PrimeroController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

		



	public function clasifica(Request $request)
	{
=======
class PrimeroController extends Controller{
    public function __construct(){
		$this->middleware('auth');
	}

	public function clasifica(Request $request){
>>>>>>> 246777eb114a0db805402cbb9b401efda300bee2
 		$data=$request->all();
		$idUsuario=$data["id_usuario"];
		$mpv = $data["mpv"];
		$ventas = $data["ventas"];
<<<<<<< HEAD
		$usuario=User::find($idUsuario);


=======
		$cantidadventas = $data["cantidadventas"];
		$usuario=User::find($idUsuario);

>>>>>>> 246777eb114a0db805402cbb9b401efda300bee2
		if(isset($mpv) and $mpv == 'no'){
		if(isset($ventas) and $ventas == 'si'){		
				return "Opción invalida";
			}
		}

<<<<<<< HEAD
		if(isset($mpv) and $mpv == 'no'){
=======
		else if(isset($mpv) and $mpv == 'no'){
>>>>>>> 246777eb114a0db805402cbb9b401efda300bee2
		if(isset($ventas) and $ventas == 'no'){		
				$usuario->etapa = 'Idea';
			}
		}

<<<<<<< HEAD


		if(isset($mpv) and $mpv == 'si'){
=======
		else if(isset($mpv) and $mpv == 'si'){
>>>>>>> 246777eb114a0db805402cbb9b401efda300bee2
		if(isset($ventas) and $ventas == 'no'){	
				$usuario->etapa = 'Semilla';
			}			
		}
		
<<<<<<< HEAD


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



=======
		else if(isset($mpv) and $mpv == 'si'){
			if(isset($ventas) and $ventas == 'si'){
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
		}
>>>>>>> 246777eb114a0db805402cbb9b401efda300bee2
		$resul= $usuario->save();

		if($resul){            
           return view('cliente.etapa')->with("usuario",  $usuario); 
		}
<<<<<<< HEAD
		else
		{            
            return "ERROR!!"; 
		}


}




=======
		else{            
            return "ERROR!!"; 
		}
	}	
>>>>>>> 246777eb114a0db805402cbb9b401efda300bee2
}
