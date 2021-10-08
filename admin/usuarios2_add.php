<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
?><?php include ('header2.php'); ?>
<?php include ("config.php");?>
<h3>Agregar un elemento en usuarios</h3>
<?php 
// Si la forma fue enviada
if(isset($_POST['submit'])) { 

include ("../fields/usuarios2request.php");
 
//Insertar el usuario
		
$sql = "INSERT INTO usuarios2 (u_usuario, u_password) VALUES ('$u_usuario', '$u_password')";
//$result = mysql_query($sql);
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

echo "<p class='exito'>El elemento en usuarios se ha agregado exitosamente!</p>";

 }
// Si hay error o si la forma no se ha enviado
 if(!isset($_POST['submit'])) { 
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
  <table width="99%" border="0" align="center" cellpadding="5" cellspacing="2" class="tableleft">
    <tr>
      <td width="54%" valign="top" bgcolor="#E4E4E4"><span style="font-weight: bold">Nombre:</span></td>
      <td width="44%" valign="top" bgcolor="#E4E4E4"><span style="font-weight: bold">Password:</span></td>
    </tr>
    <tr>
      <td valign="top"><input name="u_usuario" type="text" class="buscainput" id="u_usuario" style="width:100%;" /></td>
      <td valign="top"><input name="u_password" type="password" class="buscainput" id="u_password" style="width:100%;" /></td>
    </tr>
    <tr>
      <td colspan="3" valign="top"><input name="submit" type="submit" id="submit" style="width:100%;" onclick="MM_validateForm('u_usuario','','R','u_password','','R');return document.MM_returnValue" value="Enviar" class="btngo" /></td>
    </tr>
    <tr>
      <td colspan="3"><div align="right"></div></td>
    </tr>
  </table>
</form>
<?php  } ?>
<p><a href="usuarios2.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
<p>&nbsp;</p>
 <?php } else {
header("location:index.html");
 } ?><?php include 'footer.php'; ?>