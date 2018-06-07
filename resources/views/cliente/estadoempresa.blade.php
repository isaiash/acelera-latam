<html>
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Registro</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <!-- Bootstrap 3.3.5 -->
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
            <!-- iCheck -->
            <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
            
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <h1>Evaluación del estado de la empresa</h1>
    <h2>¿Tiene producto mínimo viable?</h2>
        <form>
            <label>
                <input type="radio" name="mpv" value="Si" checked> Si<br>
            </label>
            <label>
                <input type="radio" name="mpv" value="No"> No<br>
            </label>
        </form>
    <h2>¿Usted posee ventas?</h2>
        <form>
            <label>
                <input type="radio" name="ventas" value="Si" checked> Si<br>
            </label>
            <label>
                <input type="radio" name="ventas" value="No"> No<br>
            </label>
        </form>
    <h2>¿Cuantas ventas realiza al año?</h2>
        <select name="cantidadventas">
            <option value="op1">Ventas inferiores a 2400 UF</option>
            <option value="op2">Ventas entre 2400 y 25000 UF</option>
            <option value="op3">Ventas entre 25000 y 100000 UF</option>
            <option value="op4">Ventas superiores a 100000 UF</option>
        </select>
    
</html>
