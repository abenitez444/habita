<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
include ('header.php');
echo '<meta http-equiv="refresh" content="5;URL=index.php" />';
$cat_id = $_REQUEST[cat_id];
$cat_desc = $_REQUEST[cat_desc];

include('config.php');
 $sql2 = "UPDATE cat SET cat_desc='$cat_desc' WHERE cat_id=$cat_id";
 //$result2 = mysql_query($sql2);
 if (!$result2 = $mysqli->query($sql2)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}
?>

<h1>Actualizacion de seccion</h1>
            <div align="center"><strong>La seccion ha sido modificada<br />
</strong></div>
 <p>&nbsp;</p>
        <p>Esta siendo redirigido automaticamente al inicio en 5 segundos.</p>
        <p><a href="index.php" class="square1">Haga click aqui si no es redirigido</a></p>
<p>&nbsp;</p>
<?php } else {
header("location:index.html");
 } include ('footer.php');?>