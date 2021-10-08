<meta http-equiv="refresh" content="2;URL=subcategorias.php">

<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
                <h1>Subcategorias</h1>

<?php
 include('config.php');
 $sub_id = $_REQUEST[sub_id];
// mysql_query("DELETE FROM subcategorias WHERE sub_id='$sub_id'",$db); 
$sql="DELETE FROM subcategorias WHERE sub_id='$sub_id'";

if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}
echo "</br></br></br><h1>Subcategoria borrada con exito.</h1></br><p class='content'></p>"
  ?>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;                    </p>
		    <p><a href="subcategorias.php" class='btn'>Regresar.</a></p>    
	<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include ('footer.php');?>