<?php
/*session_start();

if (isset($_POST['correo'])) {
    $link = mysqli_connect('localhost', 'root', '', 'ekothazi');
    $usuario = $_POST['correo'];
    $contrase�a = $_POST['clave'];
    $log = "SELECT * FROM usuarios WHERE email='".$usuario."' AND contrase�a='".$contrase�a."'";
    $result = mysqli_query($link, $log);
    echo $log;
    echo $result;
    if (mysql_num_rows($result) > 0) {
        $row = mysql_fetch_array($log);
        $_SESSION["email"] = $row['email'];
        echo 'Iniciando sesi�n para ' . $_SESSION['email'] . ' <p>';
    } else {
        echo '<script> alert("Usuario o contrase�a incorrectos.");</script>';
        echo '<script> window.location="index.php"; </script>';
    }
}
*/
$link = mysqli_connect('localhost', 'root', '', 'ekothazi');
$usuario = $_POST['correo'];
$contrase�a = $_POST['clave'];
$consulta = "SELECT * FROM usuarios WHERE email='".$usuario."' AND contrase�a='".$contrase�a."'";
$resultado = mysql_query( $link, $consulta ) or die( mysql_error() );
$datos = mysql_fetch_array( $resultado );

if($datos['email'] != $usuario or $datos['contrase�a'] != $contrase�a)
{
	echo "datos incorrectos";
	exit();
}
else
{
	// Inicias la sesion
	session_start();
	$_SESSION['email'] = $datos['email'];
	echo 'Iniciando sesi�n para ' . $_SESSION['email'] . ' <p>';
	// Muestras el contenido de la pagina
}  
?>