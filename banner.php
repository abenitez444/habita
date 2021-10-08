<?php
include ("admin/config.php");
$sql="SELECT * FROM banner WHERE banner_id='1'";
// $result = mysql_query($sql,$db);
// 	$result = mysql_query($sql,$db);
// 	$conteo = mysql_num_rows($result);
// while ($myrow = mysql_fetch_array($result))
// {
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

while ($myrow = $result->fetch_assoc()) {
$banner_url=$myrow["banner_url"];
$banner_img=$myrow["banner_img"];
?>
  <a href="<?php echo $banner_url?>" target="_blank"><img src="images/banners/<?php echo $banner_img?>"  border="0"></a>
<?php } ?>
