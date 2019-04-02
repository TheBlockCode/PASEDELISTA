<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devide-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }

        body {
            background: #DEDEDE;
            display: flex;
            min-height: 100vh;
        }

        form{
            margin: auto;
            width: 50%;
            max-width: 500px;
            background: #F3F3F3;
            padding: 30px;
            border: 1px solid rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: rgba(0,0,0,0.5);
        }

        input {
            display: block;
            padding: 10px;
            width: 100%;
            margin:30px 0;
            font-size: 20px;
        }

        input[type="submit"] {
            background: linear-gradient(#0090FF, #005699);
            border: 0px;
            color: white;
            opacity: 0.8;
            cursor: pointer;
            border-radius: 20px;
            margin-bottom: 0;
        }

        input[type="submit"]:hover {
            opacity: 1;
        }

        input[type="submit"]:active {
            transform: scale(0.95);
        }
    </style>

</head>
<body>
	<form>
		<h2>Listado de alumnos de la modelo</h2>
		<input type="text" placeholder="&#128272; Usuario" name="usuario">
		<input type="password" placeholder="&#128272; Contraseña" name="clave">
		<input type="submit" value="Ingresar">
	</form>
</body>
</html>