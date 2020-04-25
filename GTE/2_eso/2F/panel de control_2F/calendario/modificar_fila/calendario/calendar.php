<?php
	include("funciones.php");
	$ano=$_GET['ano'];
	$mes=$_GET["mes"];
	if (empty($ano)) {
		$ano="";
	}else if(empty($mes)){
		$mes="";
	}
	echo calendar($ano,$mes);
?>