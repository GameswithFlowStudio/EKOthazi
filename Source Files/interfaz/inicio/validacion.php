<?php
session_start();

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
?>