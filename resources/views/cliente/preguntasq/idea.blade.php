@extends('cliente.estructura')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>        
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<div id="contenido">


  <h1>Q1: modelo de negocios</h1>

        <form method="post"  action="q1">  
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>"> 


   <h2>¿Cuál es la propuesta de valor de su empresa?</h2>

      <label>
            <input type="text" class="form-control" name="p1" >
      </label>


        <h2>¿Ha realizado un estudio de mercado?</h2>
   
            <label>
                <input type="radio" name="p2" value="si"> Si<br>
            </label>
            <label>
                <input type="radio" name="p2" value="no"> No<br>
            </label>




        <h2>¿Tiene segmentación de clientes?</h2>
   
            <label>
                <input type="radio" name="p3" value="si"> Si<br>
            </label>
            <label>
                <input type="radio" name="p3" value="no"> No<br>
            </label>




        <h2>¿Tiene canales de distribución?</h2>
   
            <label>
                <input type="radio" name="p4" value="si"> Si<br>
            </label>
            <label>
                <input type="radio" name="p4" value="no"> No<br>
            </label>     




    
   <br>
   <br>
        
          <button type="submit" class="btn btn-danger">Enviar</button>

        </form>

<br>

<a href="logout" class="btn btn-danger" style="color: #fff">​Salir</a>

</div>  


@stop


