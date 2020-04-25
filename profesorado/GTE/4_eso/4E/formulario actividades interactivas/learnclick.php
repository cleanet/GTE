<?php
	$db= new mysqli("localhost","username","password","database");
	$limite = $_POST['limite'];
	$query = "SELECT ID FROM learnclick_act_4";
	$res = $db->query($query);
	$total=$res->num_rows;
	$paginas = ceil($total / 5);
	$query = "SELECT * FROM learnclick_act_4 LIMIT $limite, 5";
	$res = $db->query($query);
	if ($res->num_rows > 0) {
		while ($row = $res->fetch_assoc()) {
			echo "<div id='actividades_learnclick' class='".$row['ID']."'>";
			echo "<p id='id_act_learnclick'>".$row['ID']."</p>";
			echo "<br>";
			echo "<iframe src='".$row['actividad']."' frameborder='0' class='iframe_estilos_learnclick'></iframe>";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "</div>";
		}
	}
	echo "<div class='navegacion_actividades_learnclick'>";
	if ($limite > 0) {
		$limit = $limite-5;
		echo "<aside class=\"anterior_learnclick\" onclick=\"cargarproductos_learnclick(".$limit.")\">Anterior</aside>";
	}else{
		echo "<aside class=\"anterior_learnclick\" style='color:transparent; background:transparent;'></aside>";
	}
	foreach ($productos as $producto) {
		echo "<article>".$producto."</article>";
	}
	if ($limite<$total-5) {
		$limit=$limite+5;
		echo "<aside class=\"siguiente_learnclick\" onclick=\"cargarproductos_learnclick(".$limit.")\">Siguiente</aside>";
	}else{
		echo "<aside class=\"siguiente_learnclick\" style='color:transparent; background:transparent;'></aside>";
	}
	echo "</div>";
?>