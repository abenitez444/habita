<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
?><?php include ('header.php');?>
<h3><img src="images/iconos/bullet_key.png" alt="usuarios" width="16" height="16" /> Usuarios del sistema</h3>
<p><a href="usuarios2_add.php" class="square"><img src="images/iconos/add.png" width="16" height="16" border="0" />&nbsp;Haga click aqui para agregar un usuario</a></p>
<p>&nbsp;</p>
<form action="usuarios2accion.php" method="post">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr class="parentcell">
                          <td width="10%" height="18" valign="top"><div align="center" class="padded">Borrar</div></td>
                          <td width="40%" height="18" valign="top"><div align="center" class="padded">Usuario</div></td> 
                          <td width="10%" valign="top"><div align="center" class="padded">Acciones</div></td>
            </tr>
        </table>
<?php
include('config.php');
$sql="SELECT * FROM usuarios2 ORDER BY u_id DESC ";
//  $result = mysql_query($sql,$db);
//  $filas = mysql_num_rows($result);
//  if ($filas==0){
//  echo "<p class='error'>No se encontro ningun usuario modificable publicado en el sistema.</p>";}
//  while ($myrow = mysql_fetch_array($result))
//  {
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "<p class='error'>No se encontro ningun usuario modificable publicado en el sistema.</p>";
}

while ($myrow = $result->fetch_assoc()) {
 include ("../fields/usuarios2rows.php");
 
  
echo "<div class='hovertable'> <table width='100%' border='0'><tr>";
echo "<td width='10%' valign='top' class='singlecell' align='left'><input name='usuario[]' type='checkbox' id='usuario' value='$u_id' /></td>";
echo "<td width='40%' height='20' valign='top' class='singlecell' align='left'>$u_usuario</td>";
echo "<td width='10%' valign='top' class='singlecell' align='left'>";
echo "<a href='usuarios2_mod.php?u_id=$u_id' class='btntable'><img src='images/iconos/pencil.png' alt='Modificar' border='0' />Modificar</a>";
echo"</td></tr> </table></div>";
}
 ?>
 <table width="100%" border="0" bgcolor="#F0F0F0">
<tr>
  <td height="18" valign="top">
  <div align="center">
      <input type="submit" value="Borrar todos los elementos seleccionados" class="btngo" />   
   </div>
   </td>
  </tr>
</table>
</form>
        <p>&nbsp;</p>
        <p><a href="index.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
 <?php } else {
header("location:index.html");
 } ?><?php include 'footer.php'; ?>