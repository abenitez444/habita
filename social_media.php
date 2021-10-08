<?php
include ("admin/config.php");

$sql="SELECT * FROM cat WHERE cat_id IN ('3','4','5')";

if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

while ($myrow = $result->fetch_assoc()) {
    if($myrow["cat_id"] == '3') 
        $twitter = $myrow["cat_desc"];
    elseif($myrow["cat_id"] == '4')
        $facebook = $myrow["cat_desc"];
    else
        $youtube = $myrow["cat_desc"];
}

//include('social_media.php');
//include('admin/config.php');
 //$sql5="SELECT * FROM cat WHERE cat_id='3'";
// $result5 = mysql_query($sql5,$db);
 //$myrow = mysql_fetch_array($result5);
 //$twitter = $myrow["cat_desc"];
 //$sql5="SELECT * FROM cat WHERE cat_id='4'";
 //$result5 = mysql_query($sql5,$db);
 //$myrow = mysql_fetch_array($result5);
 //$facebook = $myrow["cat_desc"];
 //$sql5="SELECT * FROM cat WHERE cat_id='5'";
 //$result5 = mysql_query($sql5,$db);
 //$myrow = mysql_fetch_array($result5);
 //$youtube = $myrow["cat_desc"];

?>