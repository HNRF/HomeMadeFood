<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../cssArchivos/estilos.css">
</head>
<body>
<form method="post" action="logear.php" name="signin-form">
    <h1> Inicio sesion </h1>
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" id="nombre" name="nombre" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" id="clave" name="clave" required />
    </div>
    <input type="submit" name="login" id="login">
</form>
    
</body>
</html>
