<form method="post" action="verificar_url.php">
	<input type="text" name="url">
	<input type="submit" name="verificar" value="verificar">
</form>
<?php
$url = filter_var($_POST['url'], FILTER_VALIDATE_URL);
if ($url  == true) {
		$id= @fopen($url, 'r');
		if ($id) {
			echo "La url ".$url." existe";
		}else{
			echo "La url ".$url." no existe";
		}
}else{
	echo "La url no es valida";
}
?>