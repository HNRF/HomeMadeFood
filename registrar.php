<?php 

require("./con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['email']) >=1 && strlen($_POST['clave']) >= 1) {
	    $Nombre = trim($_POST['nombre']);
	    $Apellidos = trim($_POST['apellidos']);
        $Contraseña = trim($_POST['clave']);
        $Email = trim($_POST['email']);
	    $consulta = "INSERT INTO usuarios (Nombre, Apellidos, Email, contraseña) VALUES ('$Nombre','$Apellidos','$Email','$Contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado==true) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error! Verifica tus datos</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

mysqli_close($conex);

?>