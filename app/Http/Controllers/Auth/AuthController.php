<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use AuthenticatesUsers;
use RegistersUsers;
use ResetsPasswords;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */




    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
      
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   


//login

       protected function getLogin()
    {
        return view("login");
    }


       

<<<<<<< HEAD
        public function postLogin(Request $request)
   {
    $this->validate($request, [
        'rut' => 'required',
        'password' => 'required',
    ]);



    $credentials = $request->only('rut', 'password');

    if ($this->auth->attempt($credentials, $request->has('remember')))
    {

        $usuarioactual=\Auth::user();
       return view('cliente.home')->with("usuario",  $usuarioactual);
    }

    return "contraseña o email incorrectos";

=======
    public function postLogin(Request $request){
        $this->validate($request, [
            'rut' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('rut', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember'))){
            $usuarioactual=\Auth::user();
            if($usuarioactual->etapa == "No definida"){
                return view('cliente.home')->with("usuario",  $usuarioactual);
            }
            else{
                return view('pagina.aaa')->with("usuario",$usuarioactual);
            }
            
        }
        return "contraseña o email incorrectos";
>>>>>>> 246777eb114a0db805402cbb9b401efda300bee2
    }


//login

 //registro   


        protected function getRegister()
    {
        return view("cliente.registro");
    }


        

        protected function postRegister(Request $request)

   {
$this->validate($request, [
        'name' => 'required',
        'rut' => 'required',
        'password' => 'required',
    ]);


  $data=$request->all();
        $usuario= new User;
        $usuario->rut  = $data["rut"];
        $usuario->name  = $data["name"];
        $usuario->numero_telefono  = $data["numero_telefono"];
        $usuario->email = $data["email"];      
        $usuario->password=bcrypt($data["password"]);
      
        


    if($usuario->save()){

         return "cliente registrado correctamente";
               
    }

   

}

//registro

protected function getLogout()
    {
        $this->auth->logout();

        Session::flush();

        return redirect('inicio');
    }






}
