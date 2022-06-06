<?php 

require("./con_db.php");


	    $Nombre = $_POST['nombre'];
        $Contraseña = $_POST['clave'];
		session_start();
		$_SESSION['nombre']=$Nombre;

	    $consulta="SELECT * FROM usuarios WHERE Nombre='$Nombre' AND Contraseña='$Contraseña'";
		$resultado= mysqli_query($conex,$consulta);

		$filas=mysqli_num_rows($resultado);

		if($filas){
			header("location:../index.html");

		}else{
			?>
			<?php
			include("login.php");
			?>
			<h3 class="bad">¡Ups ha ocurrido un error! Verifica tus datos</h3>
			<?php
		}



		mysqli_free_result($resultado);
		mysqli_close($conex);

?>