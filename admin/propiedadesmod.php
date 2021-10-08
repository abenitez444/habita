<?php
//echo '<meta http-equiv="refresh" content="5;URL=propiedades.php" />';
 ?>
 
<?php 
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include ('header.php');
include ("../fields/propiedadesrequest.php");
$x = rand();
include ("imagen.php");

	 if (@is_uploaded_file($_FILES["upload_file1"]["tmp_name"]))
	{$imgName1 = mt_rand().".jpg";
	$img_name1 = resizePic1("","upload_file1","../images/propiedades/",320,240,0,"$imgName1");
	} else {$imgName1 = $p_img1ba;}
	$p_img1b= $imgName1;
	
	 if (@is_uploaded_file($_FILES["upload_file2"]["tmp_name"]))
	{$imgName2 = mt_rand().".jpg";
	$img_name2 = resizePic1("","upload_file2","../images/propiedades/",64,48,0,"$imgName2");
	} else {$imgName2 = $p_img2ba;}
	$p_img2b= $imgName2;
	
	 if (@is_uploaded_file($_FILES["upload_file3"]["tmp_name"]))
	{$imgName3 = mt_rand().".jpg";
	$img_name3 = resizePic1("","upload_file3","../images/propiedades/",64,48,0,"$imgName3");
	} else {$imgName3 = $p_img3ba;}
	$p_img3b= $imgName3;
	
	 if (@is_uploaded_file($_FILES["upload_file4"]["tmp_name"]))
	{$imgName4 = mt_rand().".jpg";
	$img_name4 = resizePic1("","upload_file4","../images/propiedades/",64,48,0,"$imgName4");
	} else {$imgName4 = $p_img4ba;}
	$p_img4b= $imgName4;
	
	 if (@is_uploaded_file($_FILES["upload_file5"]["tmp_name"]))
	{$imgName5 = mt_rand().".jpg";
	$img_name5 = resizePic1("","upload_file5","../images/propiedades/",64,48,0,"$imgName5");
	} else {$imgName5 = $p_img5ba;}
	$p_img5b= $imgName5;
	
	 if (@is_uploaded_file($_FILES["upload_file6"]["tmp_name"]))
	{$imgName6 = mt_rand().".jpg";
	$img_name6 = resizePic1("","upload_file6","../images/propiedades/",64,48,0,"$imgName6");
	} else {$imgName6 = $p_img6ba;}
	$p_img6b= $imgName6;
	
	 if (@is_uploaded_file($_FILES["upload_file7"]["tmp_name"]))
	{$imgName7 = mt_rand().".jpg";
	$img_name7 = resizePic1("","upload_file7","../images/propiedades/",64,48,0,"$imgName7");
	} else {$imgName7 = $p_img7ba;}
	$p_img7b= $imgName7;
	
	 if (@is_uploaded_file($_FILES["upload_file8"]["tmp_name"]))
	{$imgName8 = mt_rand().".jpg";
	$img_name8 = resizePic1("","upload_file8","../images/propiedades/",64,48,0,"$imgName8");
	} else {$imgName8 = $p_img8ba;}
	$p_img8b= $imgName8;
	
	if (@is_uploaded_file($_FILES["upload_file9"]["tmp_name"]))
	{$imgName9 = mt_rand().".jpg";
	$img_name9 = resizePic1("","upload_file9","../images/propiedades/",64,48,0,"$imgName9");
	} else {$imgName9 = $p_img9ba;}
	$p_img9b= $imgName9;
	
	if (@is_uploaded_file($_FILES["upload_file10"]["tmp_name"]))
	{$imgName10 = mt_rand().".jpg";
	$img_name10 = resizePic1("","upload_file10","../images/propiedades/",64,48,0,"$imgName10");
	} else {$imgName10 = $p_img10ba;}
	$p_img10b= $imgName10;
	
	if (@is_uploaded_file($_FILES["upload_file11"]["tmp_name"]))
	{$imgName11 = mt_rand().".jpg";
	$img_name11 = resizePic1("","upload_file11","../images/propiedades/",64,48,0,"$imgName11");
	} else {$imgName11 = $p_img11ba;}
	$p_img11b= $imgName11;
	
	
$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file1']['name']); 
if(move_uploaded_file($_FILES['upload_file1']['tmp_name'], $target_path)) {
$p_img1 =  basename( $_FILES['upload_file1']['name']); 
} else{
}
if ($p_img1==""){$p_img1=$p_img1a;}
	
$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file2']['name']); 
if(move_uploaded_file($_FILES['upload_file2']['tmp_name'], $target_path)) {
$p_img2 =  basename( $_FILES['upload_file2']['name']); 
} else{
}
if ($p_img2==""){$p_img2=$p_img2a;}
	
$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file3']['name']); 
if(move_uploaded_file($_FILES['upload_file3']['tmp_name'], $target_path)) {
$p_img3 =  basename( $_FILES['upload_file3']['name']); 
} else{
}if ($p_img3==""){$p_img3=$p_img3a;}
	
$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file4']['name']); 
if(move_uploaded_file($_FILES['upload_file4']['tmp_name'], $target_path)) {
$p_img4 =  basename( $_FILES['upload_file4']['name']); 
} else{
}if ($p_img4==""){$p_img4=$p_img4a;}
	
$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file5']['name']); 
if(move_uploaded_file($_FILES['upload_file5']['tmp_name'], $target_path)) {
$p_img5 =  basename( $_FILES['upload_file5']['name']); 
} else{
}
if ($p_img5==""){$p_img5=$p_img5a;}
	
$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file6']['name']); 
if(move_uploaded_file($_FILES['upload_file6']['tmp_name'], $target_path)) {
$p_img6 =  basename( $_FILES['upload_file6']['name']); 
} else{
}
if ($p_img6==""){$p_img6=$p_img6a;}
	
$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file7']['name']); 
if(move_uploaded_file($_FILES['upload_file7']['tmp_name'], $target_path)) {
$p_img7 =  basename( $_FILES['upload_file7']['name']); 
} else{
}
if ($p_img7==""){$p_img7=$p_img7a;}
	
$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file8']['name']); 
if(move_uploaded_file($_FILES['upload_file8']['tmp_name'], $target_path)) {
$p_img8 =  basename( $_FILES['upload_file8']['name']); 
} else{
}
if ($p_img8==""){$p_img8=$p_img8a;}

$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file9']['name']); 
if(move_uploaded_file($_FILES['upload_file9']['tmp_name'], $target_path)) {
$p_img9 =  basename( $_FILES['upload_file9']['name']); 
} else{
}
if ($p_img9==""){$p_img9=$p_img9a;}

$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file10']['name']); 
if(move_uploaded_file($_FILES['upload_file10']['tmp_name'], $target_path)) {
$p_img10 =  basename( $_FILES['upload_file10']['name']); 
} else{
}
if ($p_img10==""){$p_img10=$p_img10a;}

$target_path = "../images/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file11']['name']); 
if(move_uploaded_file($_FILES['upload_file11']['tmp_name'], $target_path)) {
$p_img11 =  basename( $_FILES['upload_file11']['name']); 
} else{
}
if ($p_img11==""){$p_img11=$p_img11a;}

					
@chmod("../images/propiedades/$p_img1", 0777);

$p_subcategoria = $_REQUEST[las_categorias];

include('config.php');
 $sql2 = "UPDATE propiedades SET p_nombre='$p_nombre', p_ubicacion='$p_ubicacion', p_categoria='$p_categoria', p_subcategoria='$p_subcategoria', p_precio='$p_precio', p_desc='$p_desc', p_destacada='$p_destacada', p_recamaras='$p_recamaras', p_banos='$p_banos', p_autos='$p_autos', p_construccion='$p_construccion', p_edad='$p_edad', p_areas='$p_areas', p_terreno='$p_terreno', p_servicios='$p_servicios', p_img1='$p_img1', p_img1b='$p_img1b', p_img2='$p_img2', p_img2b='$p_img2b', p_img3='$p_img3', p_img3b='$p_img3b', p_img4='$p_img4', p_img4b='$p_img4b', p_img5='$p_img5', p_img5b='$p_img5b', p_img6='$p_img6', p_img6b='$p_img6b', p_img7='$p_img7', p_img7b='$p_img7b', p_img8='$p_img8', p_img8b='$p_img8b', p_img9='$p_img9', p_img9b='$p_img9b', p_img10='$p_img10', p_img10b='$p_img10b', p_img11='$p_img11', p_img11b='$p_img11b'       WHERE p_id=$p_id";
 
 //$result2 = mysql_query($sql2);
 
 if (!$result2 = $mysqli->query($sql2)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}
 
?>

<h1>Actualizacion de propiedad</h1>
            <div align="center"><strong>La propiedad ha sido modificado<br />
</strong></div>
 <p>&nbsp;</p>
        <p>Esta siendo redirigido automaticamente al inicio en 5 segundos.</p>
        <p><a href="propiedades.php" class="square1">Haga click aqui si no es redirigido</a></p>
        <p>&nbsp;</p>
  <?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?>  <?php include ('footer.php');?>