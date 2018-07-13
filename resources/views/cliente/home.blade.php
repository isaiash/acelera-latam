@extends('cliente.estrucaviso')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>        
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<div id="contenido">

  <h1>Evaluación del estado de la empresa</h1>

        <form method="post"  action="clasifica">  
    	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>"> 

    <div id="pregunta1">
    <h2>¿Tiene producto mínimo viable?</h2>
        <label>

            <input type="radio" name="mpv" value="si" onclick="show1()"> Si<br>
        </label>
        <label>
            <input type="radio" name="mpv" value="no" onclick="show1()"> No<br>
        </label>
    </div>

    <div style="display:none;" id="pregunta2">
    <h2>¿Usted posee ventas?</h2>
            <label>
                <input type="radio" name="ventas" value="si" onclick="show2()"> Si<br>
            </label>
            <label>
                <input type="radio" name="ventas" value="no" onclick="show3()"> No<br>
            </label>
    </div>

    <script>function show1(){
        document.getElementById("pregunta2").style.display ='block';        
      }
    </script>
    <script>function show2(){
            document.getElementById("pregunta3").style.display ='block';
          }
    </script>
    <script>function show3(){
            document.getElementById("pregunta3").style.display ='none';
          }
    </script>


    <div style="display:none;" id="pregunta3">
            <h2>¿Cuantas ventas realiza al año?</h2>
            <select name="cantidadventas">
                <option value="op1">Ventas inferiores a 2400 UF</option>
                <option value="op2">Ventas entre 2400 y 25000 UF</option>
                <option value="op3">Ventas entre 25000 y 100000 UF</option>
                <option value="op4">Ventas superiores a 100000 UF</option>
            </select>
        <br>
    </div>


    <br>
    <br>
    <button type="submit" class="btn btn-danger">Enviar</button>

    </form>


<br>

<a href="logout" class="btn btn-danger" style="color: #fff">​Salir</a>

</div>	

 <br>
    <br>
     <br>
    <br>


@stop




<!--

     
  

-->