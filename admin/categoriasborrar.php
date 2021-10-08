<meta http-equiv="refresh" content="2;URL=categorias.php">

<?php 
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
                <h1>Categorias</h1>

<?php
 include('config.php');
 $cat_id = $_REQUEST[cat_id];
//mysql_query("DELETE FROM categorias WHERE cat_id='$cat_id'",$db); 
$sql="DELETE FROM categorias WHERE cat_id='$cat_id'";

if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}
echo "</br></br></br><h1>Categoria borrada con exito.</h1></br><p class='content'></p>"
  ?>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;                    </p>
		    <p><a href="categorias.php" class='btn'>Regresar.</a></p>    
		    <?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include ('footer.php');?>