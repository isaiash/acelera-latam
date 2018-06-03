@extends('cliente.estructura')

@section('content')


<div id="contenido">


  <h1>Evaluación del estado de la empresa</h1>

        <form method="post"  action="clasifica">  
    	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>"> 


   <h2>¿Tiene producto mínimo viable?</h2>

            <label>
                <input type="radio" name="mpv" value="si" checked> Si<br>
            </label>
            <label>
                <input type="radio" name="mpv" value="no"> No<br>
            </label>  


   <h2>¿Usted posee ventas?</h2>
   
            <label>
                <input type="radio" name="ventas" value="si" checked> Si<br>
            </label>
            <label>
                <input type="radio" name="ventas" value="no"> No<br>
            </label>



    
   <br>
   <br>
		
		  <button type="submit" class="btn btn-danger">Enviar</button>

        </form>

<br>

<a href="logout" class="btn btn-danger" style="color: #fff">​Salir</a>

</div>	


@stop




<!--

     
  

-->