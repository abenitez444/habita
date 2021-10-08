<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
?><?php include ('header.php'); ?>
    <h1>Borrar elementos</h1>
    <p>&nbsp;</p>
<?php
	include('config.php'); 
	$u_id = $_REQUEST[u_id];
	$usuario = $_REQUEST[usuario];
    $size = count($usuario); 
	for($i = 0; $i < $size; $i ++){ 
			$sql4 = "DELETE FROM usuarios2 WHERE u_id='$usuario[$i]'";
			//$result4 = mysql_query($sql4);
			if (!$result4 = $mysqli->query($sql4)) {
                echo "Lo sentimos, este sitio web está experimentando problemas.";
            }
		}
	?>
    <p align="center">Los elementos selecionados en <strong>usuarios</strong> han sido borados con exito. </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a href="usuarios2.php" class="square1">Regresar</a></p>     
    <p>&nbsp;</p> <?php } else {
header("location:index.html");
 } ?><?php include 'footer.php'; ?>