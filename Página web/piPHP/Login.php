<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<form method="get" action="" name="signin-form">
    <h1> Inicio sesion </h1>
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="password" required />
    </div>
    <input type="submit" name="register">
</form>
    
</body>
</html>
