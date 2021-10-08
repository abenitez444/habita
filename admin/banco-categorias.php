<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
     include('config.php');
     $sql="SELECT * FROM categorias ORDER BY cat_nombre ASC ";
    //  $result = mysql_query($sql,$db);
    //  while ($myrow = mysql_fetch_array($result))
    //  {
    if (!$result = $mysqli->query($sql)) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
    }
    
    if ($result->num_rows === 0) {
        echo "Lo sentimos. No se pudo encontrar una coincidencia";
    }
    
    while ($myrow = $result->fetch_assoc()) {
    $cat_id = $myrow["cat_id"];
    $cat_nombre = $myrow["cat_nombre"];
    if(isset($_GET['codigoCat'])){
      
      switch($_GET['codigoCat']){
    case "$cat_nombre":
    
     $sql2="SELECT * FROM subcategorias WHERE sub_parent='$cat_nombre' ORDER BY sub_nombre ASC ";
    //  $result2 = mysql_query($sql2,$db);
    //  while ($myrow2 = mysql_fetch_array($result2))
    //  {
    if (!$result2 = $mysqli->query($sql2)) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
    }
    
    if ($result2->num_rows === 0) {
        echo "Lo sentimos. No se pudo encontrar una coincidencia";
    }
    
    while ($myrow2 = $result2->fetch_assoc()) {
     $sub_nombre = $myrow2["sub_nombre"];
     echo "obj.options[obj.options.length] = new Option('$sub_nombre','$sub_nombre');\n";
    	 	 }
          break;
    	}
    
    }
    }
} else {
    // header("location:loginerror.php");
    header("location:index.html");
 }
?>