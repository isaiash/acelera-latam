@extends('cliente.estructura')

@section('content')


<div id="contenido">


<h1>Usted está en etapa:  <?= $usuario->etapa; ?></h1>


<br>
<br>
<br>

<a href="logout" class="btn btn-danger" style="color: #fff">​Salir</a>
        

</div>	


@stop