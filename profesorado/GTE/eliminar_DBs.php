<?php
	function limpiar_DBs($DB1,$DB2){
		try {
			$lista_dbs=array();
			array_push($lista_dbs, $DB1,$DB2);
			$lon_dbs=count($lista_dbs);
			$lista_tablas=array();
			for($x=0;$x<=$lon_dbs-1;$x++){
				$conexion=new mysqli("localhost","username","password",$lista_dbs[$x]);
				if (!$conexion) {
					die("error DB: ".$conexion->connect_error);
				}
				$query="SHOW TABLES FROM ".$lista_dbs[$x];
				$stmt=$conexion->prepare($query);
				$ok=$stmt->execute();
				if ($ok) {
					$stmt->bind_result($tabla);
					while ($stmt->fetch()){
						array_push($lista_tablas, $tabla);
					}
				}
				$stmt->close();
				$conexion->close();
				$long_lista=count($lista_tablas);
				for ($i=0; $i <= $long_lista-1 ; $i++) {
					$conexion=new mysqli("localhost","username","password",$lista_dbs[$x]);
					if (!$conexion) {
						die("Error DB: ".$conexion->connect_error);
					}
					$truncate = "TRUNCATE TABLE ".$lista_tablas[$i];
					$stmt=$conexion->prepare($truncate);
					$ok=$stmt->execute();
					$stmt->close();
					$conexion->close();
				}
			}
			echo true;
		} catch (\Exception $e) {
			echo "Se produjo un error!\n";
			$e->Message()."\n";
		}
	}
	limpiar_DBs("username","database");

?>
