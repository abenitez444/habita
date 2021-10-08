<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
echo '<meta http-equiv="refresh" content="5;URL=propiedades.php" />';
 ?>
<?php include ('header.php');

include ("../fields/propiedadesrequest.php");
$x = rand();
include ("imagen.php");
	
	 if (@is_uploaded_file($_FILES["upload_file1"]["tmp_name"]))
	{$imgName1 = mt_rand().".jpg";
	$img_name1 = resizePic1("","upload_file1","../imagenes/propiedades/",320,240,0,"$imgName1");
	} else {$imgName1 = 'none.jpg';}
	$p_img1b= $imgName1;
	
	 if (@is_uploaded_file($_FILES["upload_file2"]["tmp_name"]))
	{$imgName2 = mt_rand().".jpg";
	$img_name2 = resizePic1("","upload_file2","../imagenes/propiedades/",64,48,0,"$imgName2");
	} else {$imgName2 = 'none.jpg';}
	$p_img2b= $imgName2;
	
	 if (@is_uploaded_file($_FILES["upload_file3"]["tmp_name"]))
	{$imgName3 = mt_rand().".jpg";
	$img_name3 = resizePic1("","upload_file3","../imagenes/propiedades/",64,48,0,"$imgName3");
	} else {$imgName3 = 'none.jpg';}
	$p_img3b= $imgName3;
	
	 if (@is_uploaded_file($_FILES["upload_file4"]["tmp_name"]))
	{$imgName4 = mt_rand().".jpg";
	$img_name4 = resizePic1("","upload_file4","../imagenes/propiedades/",64,48,0,"$imgName4");
	} else {$imgName4 = 'none.jpg';}
	$p_img4b= $imgName4;
	
	 if (@is_uploaded_file($_FILES["upload_file5"]["tmp_name"]))
	{$imgName5 = mt_rand().".jpg";
	$img_name5 = resizePic1("","upload_file5","../imagenes/propiedades/",64,48,0,"$imgName5");
	} else {$imgName5 = 'none.jpg';}
	$p_img5b= $imgName5;
	
	 if (@is_uploaded_file($_FILES["upload_file6"]["tmp_name"]))
	{$imgName6 = mt_rand().".jpg";
	$img_name6 = resizePic1("","upload_file6","../imagenes/propiedades/",64,48,0,"$imgName6");
	} else {$imgName6 = 'none.jpg';}
	$p_img6b= $imgName6;
	
	 if (@is_uploaded_file($_FILES["upload_file7"]["tmp_name"]))
	{$imgName7 = mt_rand().".jpg";
	$img_name7 = resizePic1("","upload_file7","../imagenes/propiedades/",64,48,0,"$imgName7");
	} else {$imgName7 = 'none.jpg';}
	$p_img7b= $imgName7;
	
	 if (@is_uploaded_file($_FILES["upload_file8"]["tmp_name"]))
	{$imgName8 = mt_rand().".jpg";
	$img_name8 = resizePic1("","upload_file8","../imagenes/propiedades/",64,48,0,"$imgName8");
	} else {$imgName8 = 'none.jpg';}
	$p_img8b= $imgName8;
	
	if (@is_uploaded_file($_FILES["upload_file9"]["tmp_name"]))
	{$imgName9 = mt_rand().".jpg";
	$img_name9 = resizePic1("","upload_file9","../imagenes/propiedades/",64,48,0,"$imgName9");
	} else {$imgName9 = 'none.jpg';}
	$p_img9b= $imgName9;
	
	if (@is_uploaded_file($_FILES["upload_file10"]["tmp_name"]))
	{$imgName10 = mt_rand().".jpg";
	$img_name10 = resizePic1("","upload_file10","../imagenes/propiedades/",64,48,0,"$imgName10");
	} else {$imgName10 = 'none.jpg';}
	$p_img10b= $imgName10;
	
	if (@is_uploaded_file($_FILES["upload_file11"]["tmp_name"]))
	{$imgName11 = mt_rand().".jpg";
	$img_name11 = resizePic1("","upload_file11","../imagenes/propiedades/",64,48,0,"$imgName11");
	} else {$imgName11 = 'none.jpg';}
	$p_img11b= $imgName11;
	
$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file1']['name']); 
if(move_uploaded_file($_FILES['upload_file1']['tmp_name'], $target_path)) {
} else{
}
$p_img1 =  basename( $_FILES['upload_file1']['name']); 
if ($p_img1==""){$p_img1="none.jpg";}
	
$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file2']['name']); 
if(move_uploaded_file($_FILES['upload_file2']['tmp_name'], $target_path)) {
} else{
}
$p_img2 =  basename( $_FILES['upload_file2']['name']); 
if ($p_img2==""){$p_img2="none.jpg";}
	
$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file3']['name']); 
if(move_uploaded_file($_FILES['upload_file3']['tmp_name'], $target_path)) {
} else{
}
$p_img3 =  basename( $_FILES['upload_file3']['name']); 
if ($p_img3==""){$p_img3="none.jpg";}
	
$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file4']['name']); 
if(move_uploaded_file($_FILES['upload_file4']['tmp_name'], $target_path)) {
} else{
}
$p_img4 =  basename( $_FILES['upload_file4']['name']); 
if ($p_img4==""){$p_img4="none.jpg";}
	
$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file5']['name']); 
if(move_uploaded_file($_FILES['upload_file5']['tmp_name'], $target_path)) {
} else{
}
$p_img5 =  basename( $_FILES['upload_file5']['name']); 
if ($p_img5==""){$p_img5="none.jpg";}
	
$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file6']['name']); 
if(move_uploaded_file($_FILES['upload_file6']['tmp_name'], $target_path)) {
} else{
}
$p_img6 =  basename( $_FILES['upload_file6']['name']); 
if ($p_img6==""){$p_img6="none.jpg";}
	
$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file7']['name']); 
if(move_uploaded_file($_FILES['upload_file7']['tmp_name'], $target_path)) {
} else{
}
$p_img7 =  basename( $_FILES['upload_file7']['name']); 
if ($p_img7==""){$p_img7="none.jpg";}
	
$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file8']['name']); 
if(move_uploaded_file($_FILES['upload_file8']['tmp_name'], $target_path)) {
} else{
}
$p_img8 =  basename( $_FILES['upload_file8']['name']); 
if ($p_img8==""){$p_img8="none.jpg";}


$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file9']['name']); 
if(move_uploaded_file($_FILES['upload_file9']['tmp_name'], $target_path)) {
} else{
}
$p_img9 =  basename( $_FILES['upload_file8']['name']); 
if ($p_img9==""){$p_img9="none.jpg";}

$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file10']['name']); 
if(move_uploaded_file($_FILES['upload_file10']['tmp_name'], $target_path)) {
} else{
}
$p_img10 =  basename( $_FILES['upload_file10']['name']); 
if ($p_img10==""){$p_img10="none.jpg";}

$target_path = "../imagenes/propiedades/";
$target_path = $target_path . basename( $_FILES['upload_file11']['name']); 
if(move_uploaded_file($_FILES['upload_file11']['tmp_name'], $target_path)) {
} else{
}
$p_img11 =  basename( $_FILES['upload_file11']['name']); 
if ($p_img11==""){$p_img11="none.jpg";}


	
$p_subcategoria = $_REQUEST[las_categorias];
include('config.php');
$sql = "INSERT INTO propiedades (p_nombre, p_ubicacion, p_categoria, p_subcategoria, p_precio, p_desc, p_destacada, p_recamaras, p_banos, p_autos, p_construccion, p_edad, p_areas, p_servicios, p_img1, p_img1b, p_img2, p_img2b, p_img3, p_img3b, p_img4, p_img4b, p_img5, p_img5b, p_img6, p_img6b, p_img7, p_img7b, p_img8, p_img8b, p_img9, p_img9b, p_img10, p_img10b, p_img11, p_img11b) VALUES ('$p_nombre', '$p_ubicacion', '$p_categoria', '$p_subcategoria', '$p_precio', '$p_desc', '$p_destacada', '$p_recamaras', '$p_banos', '$p_autos', '$p_construccion', '$p_edad', '$p_areas', '$p_servicios', '$p_img1', '$p_img1b', '$p_img2', '$p_img2b', '$p_img3', '$p_img3b', '$p_img4', '$p_img4b', '$p_img5', '$p_img5b', '$p_img6', '$p_img6b', '$p_img7', '$p_img7b', '$p_img8', '$p_img8b', '$p_img9', '$p_img9b', '$p_img10', '$p_img10b', '$p_img11', '$p_img11b')";
 //$result = mysql_query($sql);
 if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

$sql2="SELECT * FROM propiedades ORDER BY p_id DESC LIMIT 1";
// $result2= mysql_query($sql2,$db);
// $filas2 = mysql_num_rows($result2);
// $myrow2 = mysql_fetch_array($result2);
if (!$result2 = $mysqli->query($sql2)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result2->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}
$myrow2 = $result2->fetch_assoc();
$pid = $myrow2["p_id"];

			$talla = $_REQUEST[talla];
			$size2 = count($talla); 
			for($n = 0; $n < $size2; $n ++){ 
    			$sql3 = "INSERT INTO atributos_propiedades (p_id, a_id, a_tipo) VALUES ('$pid', '$talla[$n]', 'talla')";
    			//$result3 = mysql_query($sql3);
    			if (!$result3 = $mysqli->query($sql3)) {
                    echo "Lo sentimos, este sitio web está experimentando problemas.";
                }
			}	

			$color = $_REQUEST[color];
			$size2 = count($color); 
			for($n = 0; $n < $size2; $n ++){ 
			
			$target_path = "../imagenes/colores/";
			$nombrearchivo = $ap_img[$i];
			$posicion =  $color[$n];
			$imagenn = 'ap_img'.$color[$n];
			$target_path = $target_path . basename( $_FILES[$imagenn]['name']); 
			if(move_uploaded_file($_FILES[$imagenn]['tmp_name'], $target_path)) {
				$archivo =  basename( $_FILES[$imagenn]['name']); 
			} else{
				echo "<p>No se subio ningun archivo<br />";
			}


			$sql3 = "INSERT INTO atributos_propiedades (p_id, a_id, a_tipo, ap_img) VALUES ('$pid', '$color[$n]', 'color', '$archivo')";
			//$result3 = mysql_query($sql3);
			if (!$result3 = $mysqli->query($sql3)) {
                echo "Lo sentimos, este sitio web está experimentando problemas.";
            }
			
			}	

			$material = $_REQUEST[material];
			$size2 = count($material); 
			for($n = 0; $n < $size2; $n ++){ 
    			$sql3 = "INSERT INTO atributos_propiedades (p_id, a_id, a_tipo) VALUES ('$pid', '$material[$n]', 'material')";
			    //$result3 = mysql_query($sql3);
			    if (!$result3 = $mysqli->query($sql3)) {
                    echo "Lo sentimos, este sitio web está experimentando problemas.";
                }
			}	

?>

<h1>El propiedad se ha dado de alta exitosamente</h1>
 <p>&nbsp;</p>
<div align="center"><strong>El proceso de alta de su propiedad fu&eacute; exitoso</strong></div>
 <p>&nbsp;</p>
        <p><a href="propiedades.php" style="font-weight: bold">Regresar al inicio</a></p>
<p>&nbsp;</p>
 <p>&nbsp;</p>
    <?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include ('footer.php');?>