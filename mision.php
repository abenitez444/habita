<?php include("header.php");?>
<?php
$categoria = $_REQUEST[categoria];
include('social_media.php');

?>
  <table width="100%" border="0">
  <tr>
    <td width="79%" height="40" bgcolor="#AC4843" class="propiedades"><strong>Misi&oacute;n</strong></td>
    <td width="6%" align="center" valign="middle"><a href="<?php echo $facebook?>" target="_blank"><img src="png/facebook.png" alt="Facebook" width="25" height="25" border="0"/></a></td>
    <td width="5%" align="center" valign="middle"><a href="<?php echo $twitter?>" target="_blank"><img src="png/twitter.png" alt="Twitter" width="25" height="25" border="0"/></a></td>
    <td width="10%" align="center" valign="middle"><a href="<?php echo $youtube?>" target="_blank"><img src="png/youtube.png" alt="YouTube" width="63" height="25" border="0"/></a></td>
  </tr>
</table>
  <table width="100%" border="0" cellpadding="10">
    <tr>
    <td width="253" colspan="4" valign="top">
    <?php
     $sql5="SELECT * FROM cat WHERE cat_id='1'";
//  $result5 = mysql_query($sql5,$db);
//  $myrow = mysql_fetch_array($result5);
if (!$result5 = $mysqli->query($sql5)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result5->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

$myrow = $result5->fetch_assoc();

 $desc = $myrow["cat_desc"];
 echo $desc;
?></td>
    <td width="166" align="center" valign="top">
    <?php include ("banner.php"); ?>    </td>
    </tr>
  </table>
<?php include("footer.php");?>
