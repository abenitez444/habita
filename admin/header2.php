<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Avita</title>
<link href="estilo.css" rel="stylesheet" type="text/css"/>
<script language="javascript" type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "textareas"
});
</script>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript">
var ajax = new Array();

function obtenerCategorias(sel)
{
	var codigoCat = sel.options[sel.selectedIndex].value;
	document.getElementById('las_categorias').options.length = 0;
	if(codigoCat.length>0){
		var index = ajax.length;
		ajax[index] = new sack();
		
		ajax[index].requestFile = 'banco-categorias.php?codigoCat='+codigoCat;
		ajax[index].onCompletion = function(){ cargarCategorias(index) };
		ajax[index].runAJAX();	
	}
}

function cargarCategorias(index)
{
	var obj = document.getElementById('las_categorias');
	eval(ajax[index].response);	
}
<!--
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>

<script type="text/javascript" src="mootools.js"></script>
</head>
<body>

<div id="fullPage" align='center'>
  <div id="enclosing" align='left'>
    <div id="inside" style="height:100%;">
    
      <div class="top1">
        <div class="button"> <a href="index.php" class="topmenu">Inicio</a></div>
        <div class="button"> <a href="../" class="topmenu" target="_blank">Ver sitio en vivo</a></div>
        <div class="button"> <a href="logout.php" class="topmenu" target="_blank">Salir</a></div>
      </div>

      <div class="top2">
      </div>
    
        
      <div style="clear:both;"></div>

      <div class="content">