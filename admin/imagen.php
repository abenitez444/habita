<?php	function resizePic1($prefix1,$formSrc1,$dDir1,$maxWidth,$maxHeight,$resizeFlag1,$imgName1){
if (@!copy($_FILES[$formSrc1]["tmp_name"],$dDir1.$_FILES[$formSrc1]["name"])) {
	print ("");}
if ($imgName1 == "") { $imgName1 = mt_rand().".jpg"; }
	$src_img1 = $dDir1.$_FILES[$formSrc1]["name"];
	$dest1 = $dDir1.$imgName1;$src_dims1 = getImageSize($src_img1);
	switch ($src_dims1[2]) {case 1:
	$srcImage1 = imagecreatefromgif($src_img1);break;
    case 2:$srcImage1 = imagecreatefromjpeg($src_img1);break;
    case 3:$srcImage1 = imagecreatefrompng($src_img1); break;
    default:return false;break;}
	$srcRatio1 = $src_dims1[0]/$src_dims1[1]; 
	$destRatio1 = $maxWidth/$maxHeight;
	if ($destRatio1 > $srcRatio1) {
	$destSize1[1] = $maxHeight;
	$destSize1[0] = $maxHeight*$srcRatio1;}
	else {$destSize1[0] = $maxWidth;
	$destSize1[1] = $maxWidth/$srcRatio1;}
	if ($resizeFlag1 == 1) {
	$destSiz1e[0] = $maxWidth;
	$destSize1[1] = $maxHeight;}
    $thumb_w1 = $destSize1[0];
    $thumb_h1 = $destSize1[1];
    $dst_img1 = imageCreateTrueColor($thumb_w1,$thumb_h1);
    imageCopyResampled($dst_img1,$srcImage1,0,0,0,0,$thumb_w1,$thumb_h1,$src_dims1[0],$src_dims1[1]);
    switch ($src_dims1[2]) {case 1:imagegif($dst_img1, $dest1, 75);break;
    case 2:imagejpeg($dst_img1, $dest1, 75);break;
    case 3:imagepng($dst_img1, $dest1, 9);break;}
    @unlink($src_img1);return $imgName1;}
	?>