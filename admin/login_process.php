<?php
include_once("config.php");
$miusuario = $_REQUEST[miusuario];
$mipass = $_REQUEST[mipass];
$mipass = hash('sha512', $mipass);
$pagina = $_REQUEST[pagina];
$sql="SELECT * FROM usuarios2 WHERE u_usuario='$miusuario' AND u_password='$mipass'";
// $rs = mysql_query($sql) or die ("Query failed");
// $filas = mysql_num_rows($rs);
// if($filas==1){
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    header("location:loginerror.php");
}
else {
    //$username=$HTTP_POST_VARS[miusuario];
    session_start();
    $_SESSION['miusuario']=$miusuario;
    header("location:index.php");
}
// if($filas!=1) {
// header("location:loginerror.php");
// }

?>