<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('config.php');
include ("../fields/propiedadesrequest.php");

$sql = "SELECT * FROM propiedades WHERE p_id ='$p_id' LIMIT 1";
// $result = mysql_query($sql);

// $filas = mysql_num_rows($result);
// if ($filas==0){
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
	 echo "No se pudo obtener la propiedad";
 }else{
 	//$fila = mysql_fetch_object($result);
 	$fila = $result->fetch_object();
    if ($fila->activo==1){
	    $activo=0;
	    $respuesta['clase']="noactivo";
	    $respuesta['titulo']="Activar";
    }else{
	    $activo=1;
	    $respuesta['clase']="activo";
	    $respuesta['titulo']="Desactivar";
    }
    
 	//mysql_free_result($result);
 	$result->free();
 	$sql = "UPDATE propiedades SET activo='$activo' WHERE p_id ='$p_id' LIMIT 1";
	//$result = mysql_query($sql);
	if (!$result = $mysqli->query($sql)) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
    }
	//echo $activo;
}

$respuesta['activo']=$activo;
echo json_encode($respuesta);

//$sql = "DELETE FROM propiedades WHERE p_id ='$p_id'";$result = mysql_query($sql);
//$sql = "DELETE FROM atributos_propiedades WHERE p_id ='$p_id'";$result = mysql_query($sql);

?>
<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?>