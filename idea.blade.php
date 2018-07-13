@extends('cliente.estructura')

@section('content')


1.- ¿Cuál es la propuesta de valor de su empresa? – Tipo descriptiva
2.- ¿Ha realizado un estudio de mercado? – Tipo binario
3.- ¿Tiene segmentación de clientes? – Tipo binario
4.- ¿Tiene canales de distribución? – Tipo binario


<div id="contenido">


  <h1>Preguntas para etapa idea:</h1>

        <form method="post"  action="clasifica">  
    	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>"> 


   <h2>¿Cuál es la propuesta de valor de su empresa?</h2>

          <label>
            <input type="text" class="form-control" name="rut" >
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
s