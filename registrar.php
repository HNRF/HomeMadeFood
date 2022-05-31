<?php 

if (isset($_POST['register'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellidos']) >= 1 && strlen($_POST['Email']) >=1 && strlen($_POST['Contraseña']) >= 1) {
	    $Nombre = trim($_POST['Nombre']);
	    $Apellidos = trim($_POST['Apellidos']);
        $Contraseña = trim($_POST['Contraseña']);
        $Email = trim($_POST['Email']);
	    $consulta = "INSERT INTO usuarios (Nombre, Apellidos, Email, contraseña) VALUES ('$Nombre','$Apellidos','$Email','$Contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
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

?>