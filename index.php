<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../cssArchivos/estilos.css">
</head>
<body>
    <form action = "registrar.php" method="post">
    	<h1>Resgistro de usuario</h1>
        
            <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre" required></p>

            <input type="text" id="apellidos" name="apellidos" placeholder="Introduce tu primer apellido" required></p>

            <input type="password" id="clave" name="clave" placeholder="Introduce tu clave" required></p>

			<input type="email" name="email" placeholder="Email" required> </p>

			<input type="submit" name="register">

    </form>
    
</body>
</html>
