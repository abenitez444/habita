<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
?><?php include ('header2.php'); ?>
<?php include ("config.php");?>
<?php $u_id = $_REQUEST[u_id];
if ($u_id ==""){ echo "<p class='error'>Por favor selecciona un usuario para ver sus datos.</p>";}
if ($u_id !=""){
$sqlz="SELECT * FROM usuarios2 WHERE u_id='$u_id' LIMIT 1";
// $resultz = mysql_query($sqlz,$db);
// $myrow = mysql_fetch_array($resultz);
if (!$resultz = $mysqli->query($sqlz)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($resultz->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}
$myrow = $resultz->fetch_assoc();
include ("../fields/usuarios2rows.php");
?>
<h1>Modificar usuario &raquo; <?php echo $u_usuario?></h1>
<?php 
// Si la forma fue enviada
if(isset($_POST['submit'])) { 

include ("../fields/usuarios2request.php");
$sql2 = "UPDATE usuarios2 SET u_usuario='$u_usuario', u_password='$u_password' WHERE u_id=$u_id";
//$result2 = mysql_query($sql2);
if (!$result2 = $mysqli->query($sql2)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}
echo "<p class='exito'>El elemento en usuarios ha sido modificado exitosamente!</p>";
 }
// Si hay error o si la forma no se ha enviado
 if(!isset($_POST['submit'])) { 
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
<input type="hidden" name="u_id" value="<?php echo $u_id?>">
<table width="99%" border="0" align="center" cellpadding="5" cellspacing="2" class="tableleft">
                <tr>
                  <td width="54%" valign="top" bgcolor="#E4E4E4"><span style="font-weight: bold">Nombre:</span></td>
                  <td width="44%" valign="top" bgcolor="#E4E4E4"><span style="font-weight: bold">Password:</span></td>
                  </tr>
                <tr>
                  <td valign="top"><input name="u_usuario" type="text" class="buscainput" id="u_usuario" style="width:100%;" value="<?php echo $u_usuario?>" /></td>
                  <td valign="top"><input name="u_password" type="password" class="buscainput" id="u_password" style="width:100%;" value="<?php echo $u_password?>" /></td>
                  </tr>
  <tr>
    <td colspan="3" valign="top"><input name="submit" type="submit" id="submit" style="width:100%;" onClick="MM_validateForm('u_usuario','','R','u_password','','R','usuario_email','','RisEmail');return document.MM_returnValue" value="Enviar" class="btngo" /></td>
  </tr>
                <tr>
                  <td colspan="3"><div align="right"></div></td>
                  </tr>
              </table>
</form>
<?php } ?>
<p>&nbsp;</p>
<p><a href="usuarios2.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
<?php } ?>
 <?php } else {
header("location:index.html");
 } ?><?php include 'footer.php'; ?>