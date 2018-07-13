<!DOCTYPE html>
<meta lang="es_CL">
<head>


	<meta charset="UTF-8">
	<title name="keywords">@yield('title', 'AceleraLatam')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="#">
        <meta name="keywords" content="#">

        <meta name="author" content="Juan Carlos Contreras Hernández">
        <link rel="shortcut icon" sizes="196x196" href="icono.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('css/main2.css') }}">


        
</head>

<body>

    @include('pagina.contenido.navbar')
	
	@yield('content')

	@include('pagina.contenido.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="{{ asset('js/main.js') }}"></script>





</body>
</html>