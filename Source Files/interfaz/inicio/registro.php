<?php
?>
<html>
<head>
</head>
<body>
	<?php 
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$contrasena = $_POST['contrasena'];
	$contrasenaComprobacion = $_POST['contrasenaComprobacion'];
	if($contrasena != $contrasenaComprobacion){
	    echo '<script language="javascript">alert("Las contrase�as no coinciden");</script>';

	    header('Location: inicio.php');
	}else{
	    return true;
	}
	function comprobacionContrase�a(){
	   
	}
	
	?>
</body>
</html>