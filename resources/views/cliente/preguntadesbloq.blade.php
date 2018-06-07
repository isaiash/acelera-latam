@extends('cliente.estructura')

@section('content')


<div id="contenido">

 <form method="post"  action="clasificaconf">  
   <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
   <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>">

<h2>¿Cuantas ventas realiza al año?</h2>
        <select name="cantidadventas">
            <option value="op1">Ventas inferiores a 2400 UF</option>
            <option value="op2">Ventas entre 2400 y 25000 UF</option>
            <option value="op3">Ventas entre 25000 y 100000 UF</option>
            <option value="op4">Ventas superiores a 100000 UF</option>
        </select>
	
   <br>
   <br>
		  <button type="submit" class="btn btn-danger">Enviar</button>

        </form>

<br>

<a href="logout" class="btn btn-danger" style="color: #fff">​Salir</a>
        

</div>	


@stop
