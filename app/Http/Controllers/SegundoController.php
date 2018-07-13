<?php namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Respuesta;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Pregunta;

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
	    $respuesta5 = new Respuesta;
	    $respuesta6 = new Respuesta;
	    $respuesta7 = new Respuesta;
	    $respuesta8 = new Respuesta;
	    $respuesta9 = new Respuesta;
	    $respuesta10 = new Respuesta;
	    $respuesta11 = new Respuesta;
	    $respuesta12 = new Respuesta;
	    $respuesta13 = new Respuesta;
	    $respuesta14 = new Respuesta;
	    $respuesta15 = new Respuesta;
	    $respuesta16 = new Respuesta;
	    $respuesta17 = new Respuesta;
	    $respuesta18 = new Respuesta;
	    $respuesta19 = new Respuesta;
	    $respuesta20 = new Respuesta;
	    $respuesta21 = new Respuesta;
	    $respuesta22 = new Respuesta;
	    $respuesta23 = new Respuesta;
	    $respuesta24 = new Respuesta;
	    $respuesta25 = new Respuesta;
	    $respuesta26 = new Respuesta;
	    $respuesta27 = new Respuesta;
	    $respuesta28 = new Respuesta;
	    $respuesta29 = new Respuesta;
	    $respuesta30 = new Respuesta;
	    $respuesta31 = new Respuesta;
	    $respuesta32 = new Respuesta;
	    $respuesta33 = new Respuesta;
	    $respuesta34 = new Respuesta;
	    $respuesta35 = new Respuesta;
	    $respuesta36 = new Respuesta;
	    $respuesta37 = new Respuesta;
	    $respuesta38 = new Respuesta;

		$idUsuario = $data["id_usuario"];
		$p1 = $data["p1"];
		$p2 = $data["p2"];
		$p3 = $data["p3"];
		$p4 = $data["p4"];
		$p5 = $data["p5"];
		$p6 = $data["p6"];
		$p7 = $data["p7"];
		$p8 = $data["p8"];
		$p9 = $data["p9"];
		$p10 = $data["p10"];
		$p11 = $data["p11"];
		$p12 = $data["p13"];
		$p13 = $data["p14"];
		$p14 = $data["p15"];
		$p15 = $data["p16"];
		$p16 = $data["p17"];
		$p17 = $data["p18"];
		$p18 = $data["p19"];
		$p19 = $data["p20"];
		$p20 = $data["p21"];
		$p21 = $data["p22"];
		$p22 = $data["p23"];
		$p23 = $data["p24"];
		$p24 = $data["p25"];
		$p25 = $data["p26"];
		$p26 = $data["p27"];
		$p27 = $data["p28"];
		$p28 = $data["p29"];
		$p29 = $data["p30"];
		$p30 = $data["p31"];
		$p31 = $data["p32"];
		$p32 = $data["p33"];
		$p33 = $data["p34"];
		$p34 = $data["p35"];
		$p35 = $data["p36"];
		$p36 = $data["p37"];
		$p37 = $data["p38"];
		$p38 = $data["p39"];



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

		$respuesta5->respuesta = $p5;
		$respuesta5->user_id = $idUsuario;
		$respuesta5->pregunta_id = '5';

		$respuesta6->respuesta = $p6;
		$respuesta6->user_id = $idUsuario;
		$respuesta6->pregunta_id = '6';

		$respuesta7->respuesta = $p7;
		$respuesta7->user_id = $idUsuario;
		$respuesta7->pregunta_id = '7';

		$respuesta8->respuesta = $p8;
		$respuesta8->user_id = $idUsuario;
		$respuesta8->pregunta_id = '8';

		$respuesta9->respuesta = $p9;
		$respuesta9->user_id = $idUsuario;
		$respuesta9->pregunta_id = '9';

		$respuesta10->respuesta = $p10;
		$respuesta10->user_id = $idUsuario;
		$respuesta10->pregunta_id = '10';

		$respuesta11->respuesta = $p11;
		$respuesta11->user_id = $idUsuario;
		$respuesta11->pregunta_id = '11';

		$respuesta12->respuesta = $p12;
		$respuesta12->user_id = $idUsuario;
		$respuesta12->pregunta_id = '12';

		$respuesta13->respuesta = $p13;
		$respuesta13->user_id = $idUsuario;
		$respuesta13->pregunta_id = '13';

		$respuesta14->respuesta = $p14;
		$respuesta14->user_id = $idUsuario;
		$respuesta14->pregunta_id = '14';

		$respuesta15->respuesta = $p15;
		$respuesta15->user_id = $idUsuario;
		$respuesta15->pregunta_id = '15';

		$respuesta16->respuesta = $p16;
		$respuesta16->user_id = $idUsuario;
		$respuesta16->pregunta_id = '16';

		$respuesta17->respuesta = $p17;
		$respuesta17->user_id = $idUsuario;
		$respuesta17->pregunta_id = '17';

		$respuesta18->respuesta = $p18;
		$respuesta18->user_id = $idUsuario;
		$respuesta18->pregunta_id = '18';

		$respuesta19->respuesta = $p19;
		$respuesta19->user_id = $idUsuario;
		$respuesta19->pregunta_id = '19';

		$respuesta20->respuesta = $p20;
		$respuesta20->user_id = $idUsuario;
		$respuesta20->pregunta_id = '20';

		$respuesta21->respuesta = $p21;
		$respuesta21->user_id = $idUsuario;
		$respuesta21->pregunta_id = '21';

		$respuesta22->respuesta = $p22;
		$respuesta22->user_id = $idUsuario;
		$respuesta22->pregunta_id = '22';

		$respuesta23->respuesta = $p23;
		$respuesta23->user_id = $idUsuario;
		$respuesta23->pregunta_id = '23';

		$respuesta24->respuesta = $p24;
		$respuesta24->user_id = $idUsuario;
		$respuesta24->pregunta_id = '24';

		$respuesta25->respuesta = $p25;
		$respuesta25->user_id = $idUsuario;
		$respuesta25->pregunta_id = '25';

		$respuesta26->respuesta = $p26;
		$respuesta26->user_id = $idUsuario;
		$respuesta26->pregunta_id = '26';

		$respuesta27->respuesta = $p27;
		$respuesta27->user_id = $idUsuario;
		$respuesta27->pregunta_id = '27';

		$respuesta28->respuesta = $p28;
		$respuesta28->user_id = $idUsuario;
		$respuesta28->pregunta_id = '28';

		$respuesta29->respuesta = $p29;
		$respuesta29->user_id = $idUsuario;
		$respuesta29->pregunta_id = '29';

		$respuesta30->respuesta = $p30;
		$respuesta30->user_id = $idUsuario;
		$respuesta30->pregunta_id = '30';

		$respuesta31->respuesta = $p31;
		$respuesta31->user_id = $idUsuario;
		$respuesta31->pregunta_id = '31';

		$respuesta32->respuesta = $p32;
		$respuesta32->user_id = $idUsuario;
		$respuesta32->pregunta_id = '32';

		$respuesta33->respuesta = $p33;
		$respuesta33->user_id = $idUsuario;
		$respuesta33->pregunta_id = '33';

		$respuesta34->respuesta = $p34;
		$respuesta34->user_id = $idUsuario;
		$respuesta34->pregunta_id = '34';

		$respuesta35->respuesta = $p35;
		$respuesta35->user_id = $idUsuario;
		$respuesta35->pregunta_id = '35';

		$respuesta36->respuesta = $p36;
		$respuesta36->user_id = $idUsuario;
		$respuesta36->pregunta_id = '36';

		$respuesta37->respuesta = $p37;
		$respuesta37->user_id = $idUsuario;
		$respuesta37->pregunta_id = '37';

		$respuesta38->respuesta = $p38;
		$respuesta38->user_id = $idUsuario;
		$respuesta38->pregunta_id = '38';

		
		$resul1= $respuesta1->save();
		$resul2= $respuesta2->save();
		$resul3= $respuesta3->save();
		$resul4= $respuesta4->save();
		$resul5= $respuesta5->save();
		$resul6= $respuesta6->save();
		$resul7= $respuesta7->save();
		$resul8= $respuesta8->save();
		$resul9= $respuesta9->save();
		$resul10= $respuesta10->save();
		$resul11= $respuesta11->save();
		$resul12= $respuesta12->save();
		$resul13= $respuesta13->save();
		$resul14= $respuesta14->save();
		$resul15= $respuesta15->save();
		$resul16= $respuesta16->save();
		$resul17= $respuesta17->save();
		$resul18= $respuesta18->save();
		$resul19= $respuesta19->save();
		$resul20= $respuesta20->save();
		$resul21= $respuesta21->save();
		$resul22= $respuesta22->save();
		$resul23= $respuesta23->save();
		$resul24= $respuesta24->save();
		$resul25= $respuesta25->save();
		$resul26= $respuesta26->save();
		$resul27= $respuesta27->save();
		$resul28= $respuesta28->save();
		$resul29= $respuesta29->save();
		$resul30= $respuesta30->save();
		$resul31= $respuesta31->save();
		$resul32= $respuesta32->save();
		$resul33= $respuesta33->save();
		$resul34= $respuesta34->save();
		$resul35= $respuesta35->save();
		$resul36= $respuesta36->save();
		$resul37= $respuesta37->save();
		$resul38= $respuesta38->save();




		

	 if($resul38){            
           return view('cliente.aviso')->with("msj","Respuestas registradas correctamente");  
		}



	}

public function q2(Request $request){

		$data = $request->all();
	    $respuesta39 = new Respuesta;
	    $respuesta40 = new Respuesta;
	    $respuesta41 = new Respuesta;
	    $respuesta42 = new Respuesta;
	    $respuesta43 = new Respuesta;
	    $respuesta44 = new Respuesta;

	    $idUsuario = $data["id_usuario"];
		$p39 = $data["p40"];
		$p40 = $data["p41"];
		$p41 = $data["p42"];
		$p42 = $data["p43"];
		$p43 = $data["p44"];
		$p44 = $data["p45"];

		$usuario=User::find($idUsuario);

		$respuesta39->respuesta = $p39;
		$respuesta39->user_id = $idUsuario;
		$respuesta39->pregunta_id = '39';

		$respuesta40->respuesta = $p40;
		$respuesta40->user_id = $idUsuario;
		$respuesta40->pregunta_id = '40';

		$respuesta41->respuesta = $p41;
		$respuesta41->user_id = $idUsuario;
		$respuesta41->pregunta_id = '41';

		$respuesta42->respuesta = $p42;
		$respuesta42->user_id = $idUsuario;
		$respuesta42->pregunta_id = '42';

		$respuesta43->respuesta = $p43;
		$respuesta43->user_id = $idUsuario;
		$respuesta43->pregunta_id = '43';

		$respuesta44->respuesta = $p44;
		$respuesta44->user_id = $idUsuario;
		$respuesta44->pregunta_id = '44';

		$resul39= $respuesta39->save();
		$resul41= $respuesta41->save();
		$resul42= $respuesta42->save();
		$resul43= $respuesta43->save();
		$resul44= $respuesta44->save();

		if($resul44){            
           return view('cliente.aviso')->with("msj","Respuestas registradas correctamente");  
		}

}

public function q3(Request $request){

		$data = $request->all();
		$respuesta45 = new Respuesta;
	    $respuesta46 = new Respuesta;
	    $respuesta47 = new Respuesta;
	    $respuesta48 = new Respuesta;
	    $respuesta49 = new Respuesta;
	    $respuesta50 = new Respuesta;
	    $respuesta51 = new Respuesta;

	    $idUsuario = $data["id_usuario"];
	    $p45 = $data["p46"];
	    $p46 = $data["p47"];
		$p47 = $data["p48"];
		$p48 = $data["p49"];
		$p49 = $data["p50"];
		$p50 = $data["p51"];
		$p51 = $data["p52"];

		$usuario=User::find($idUsuario);

		$respuesta45->respuesta = $p45;
		$respuesta45->user_id = $idUsuario;
		$respuesta45->pregunta_id = '45';

		$respuesta46->respuesta = $p46;
		$respuesta46->user_id = $idUsuario;
		$respuesta46->pregunta_id = '46';

		$respuesta47->respuesta = $p47;
		$respuesta47->user_id = $idUsuario;
		$respuesta47->pregunta_id = '47';

		$respuesta48->respuesta = $p48;
		$respuesta48->user_id = $idUsuario;
		$respuesta48->pregunta_id = '48';

		$respuesta49->respuesta = $p49;
		$respuesta49->user_id = $idUsuario;
		$respuesta49->pregunta_id = '49';

		$respuesta50->respuesta = $p50;
		$respuesta50->user_id = $idUsuario;
		$respuesta50->pregunta_id = '50';

		$respuesta51->respuesta = $p51;
		$respuesta51->user_id = $idUsuario;
		$respuesta51->pregunta_id = '51';

		$resul45= $respuesta45->save();
		$resul46= $respuesta46->save();
		$resul47= $respuesta47->save();
		$resul48= $respuesta48->save();
		$resul49= $respuesta49->save();
		$resul50= $respuesta50->save();
		$resul51= $respuesta51->save();


		if($resul51){            
           return view('cliente.aviso')->with("msj","Respuestas registradas correctamente");  
		}





}


public function q4(Request $request){

		$data = $request->all();
		$respuesta52 = new Respuesta;
	    $respuesta53 = new Respuesta;
	    $respuesta54 = new Respuesta;
	    $respuesta55 = new Respuesta;


		$idUsuario = $data["id_usuario"];
		$p52 = $data["p53"];
		$p53 = $data["p54"];
		$p54 = $data["p55"];
		$p55 = $data["p56"];


		$usuario=User::find($idUsuario);

		$respuesta52->respuesta = $p52;
		$respuesta52->user_id = $idUsuario;
		$respuesta52->pregunta_id = '52';

		$respuesta53->respuesta = $p53;
		$respuesta53->user_id = $idUsuario;
		$respuesta53->pregunta_id = '53';

		$respuesta54->respuesta = $p54;
		$respuesta54->user_id = $idUsuario;
		$respuesta54->pregunta_id = '54';

		$respuesta55->respuesta = $p55;
		$respuesta55->user_id = $idUsuario;
		$respuesta55->pregunta_id = '55';

		$resul52= $respuesta52->save();
		$resul53= $respuesta53->save();
		$resul54= $respuesta54->save();
		$resul55= $respuesta55->save();


		if($resul55){            
           return view('cliente.aviso')->with("msj","Respuestas registradas correctamente");  
		}



}


public function q5(Request $request){

		$data = $request->all();
		$respuesta56 = new Respuesta;

		$idUsuario = $data["id_usuario"];
		$p56 = $data["p57"];

		$usuario=User::find($idUsuario);

		$respuesta56->respuesta = $p56;
		$respuesta56->user_id = $idUsuario;
		$respuesta56->pregunta_id = '56';

		$resul56= $respuesta56->save();

		if($resul56){            
           return view('cliente.aviso')->with("msj","Respuestas registradas correctamente");  
		}




}


}

