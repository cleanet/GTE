<?php
	function vacaciones($data){
		$lista=explode("-", $data);
		$dia=["00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"];
		$mes1=["00","01","02","03","04","05","06","07","08","09","10","11","12"];
		$data=$lista[0]."-".$mes1[$lista[1]]."-".$dia[$lista[2]];
		$conexion=new mysqli("localhost","username","password","database");
		if (!$conexion) {
			die("Error DB: ".$conexion->connect_error);
		}
		$consulta_navidad="SELECT * FROM vacaciones_de_navidad";
		$stmt_navidad=$conexion->prepare($consulta_navidad);
		$ok_navidad=$stmt_navidad->execute();
		if ($ok_navidad==1) {
			$stmt_navidad->store_result();
			$stmt_navidad->bind_result($fecha);
			while ($stmt_navidad->fetch()) {
				if($fecha==$data){
					return "data-navidad='true'";
				}
			}
			$stmt_navidad->close();
			$consulta_pascua="SELECT * FROM vacaciones_de_pascua";
			$stmt_pascua=$conexion->prepare($consulta_pascua);
			$ok_pascua=$stmt_pascua->execute();
			if ($ok_pascua==1) {
				$stmt_pascua->store_result();
				$stmt_pascua->bind_result($fecha);
				while ($stmt_pascua->fetch()) {
					if($fecha==$data){
						return "data-pascua='true'";
					}
				}
				$stmt_pascua->close();
				$consulta_festivos="SELECT * FROM dias_festivos";
				$stmt_festivos=$conexion->prepare($consulta_festivos);
				$ok_festivos=$stmt_festivos->execute();
				if ($ok_festivos==1) {
					$stmt_festivos->store_result();
					$stmt_festivos->bind_result($fecha);
					while ($stmt_festivos->fetch()) {
						if($fecha==$data){
							return "data-festivos='true'";
						}
					}
					$stmt_festivos->close();
					$consulta_inicio="SELECT * FROM inicio_de_curso";
					$stmt_inicio=$conexion->prepare($consulta_inicio);
					$ok_inicio=$stmt_inicio->execute();
					if ($ok_inicio==1) {
						$stmt_inicio->store_result();
						$stmt_inicio->bind_result($fecha);
						while ($stmt_inicio->fetch()) {
							if($fecha==$data){
								return "data-inicio='true'";
							}
						}
						$stmt_inicio->close();
					}
				}
			}
		}
		$conexion->close();
	}
	function popup($data){
		$lista_data=explode("-",$data);
		if (intval($lista_data[1]) < 10) {
			$mes_cero_inicial = "0".strval($lista_data[1]);
			$lista_data[1]=$mes_cero_inicial;
		}
		$data=$lista_data[0]."-".$lista_data[1]."-".$lista_data[2];
		$conexion=new mysqli("localhost","username","password","database");
		if (!$conexion) {
			die("error DB: ".$conexion->connect_error);
		}
		$consulta_evento = "SELECT * FROM 2esofcalendar WHERE fecha=?";
		$eventos=$conexion->prepare($consulta_evento);
		$eventos->bind_param("s",$data);
		$ok_evento=$eventos->execute();
		if ($ok_evento==1) {
			$eventos->bind_result($ID,$FECHA,$TIPO,$OTRO,$MATERIA,$ASUNTO,$TAREA,$EVENTO);
			$contador_linea=0;
			$eventos_numeros=0;
			$numero=0;
			echo "<span></span>";
			while ($eventos->fetch()) {
				$numero+=1;
				echo "
					<div data-num='".$numero."'>
						<i class='fa fa-hand-o-left' title='volver'></i>";
						 echo "
						<p>";
						if ($TIPO=="otro") {
							echo $OTRO;
						}else{
							echo $TIPO;
						}
						echo "</p>
						<h2>";
						echo $FECHA;
						echo "
						</h2>
						<p>";
						echo $ID;
						echo ")	";
						if (empty($MATERIA)) {
							echo $ASUNTO;
						}else{
							echo $MATERIA;
						}
						echo "
						<p>
						<p>";
						if (empty($TAREA)) {
							echo $EVENTO;
						}else{
							echo $TAREA;
						}
						echo "
						<p>
						</div>
				";
			}
		}
	}
	function num_eventos($data){
		$conexion=new mysqli("localhost","username","password","database");
		if (!$conexion) {
			die("Error DB: ".$conexion->connect_error);
		}
		$query="SELECT fecha FROM 2esofcalendar WHERE fecha=?";
		$stmt=$conexion->prepare($query);
		$ok=$stmt->bind_param("s",$data);
		$ok=$stmt->execute();
		if ($ok==1) {
			$num_eventos=0;
			$stmt->bind_result($FECHA);
			while ($stmt->fetch()) {
				$num_eventos+=1;
			}
			$numero_eventos=$num_eventos;
			if ($num_eventos>1) {
				echo "data-num-eventos='".$num_eventos."'";
			}else if($num_eventos==1){
				echo "data-evento='true'";
			}
		}
	}
	function mes_anterior(){
		if (intval($_GET['mes']-1) < 1) {
			$var_mes="12";
			$var_ano=intval($_GET['ano']-1);
		}else{
			$var_mes=intval($_GET['mes']-1);
			$var_ano=$_GET['ano'];
		}
		return $var_mes."-".$var_ano;
	}
	function mes_posterior(){
		if (intval($_GET['mes']+1) > 12) {
			$var_mes="1";
			$var_ano=intval($_GET['ano']+1);
		}else{
			$var_mes=intval($_GET['mes']+1);
			$var_ano=$_GET['ano'];
		}
		return $var_mes."-".$var_ano;
	}
	function navegador($ano_actual,$mes_actual){
		$_GET['ano']=$ano_actual;
		$_GET['mes']=$mes_actual;
		$meses=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre"];
		$ano_minimo = $ano_actual-2;
		$ano_maximo = $ano_actual+10;
		echo "<table id='calendario' class='calendario' data-fecha-actual='".date("Y-n-j")."'>
			<thead>
				<tr>
					<td colspan='2'><i class='fa fa-mail-reply' data-mes-anterior='".mes_anterior()."'></i><div><span>".$ano_actual."</span><ul>";
						for($ano=$ano_minimo;$ano<=$ano_maximo;$ano++){
							if ($ano==$ano_actual) {
								echo "<li value='".$ano."' selected>".$ano."</li>";
							}else{
								echo "<li value='".$ano."' >".$ano."</li>";
							}
						}
						echo "</ul></div>
					<td colspan='2'>
						<div><span>".$meses[$mes_actual-1]."</span><ul>";
						for($opcionmes=0;$opcionmes<=count($meses)-1;$opcionmes++){
							if ($meses[$opcionmes]==$meses[$mes_actual-1]) {
								echo "<li value='".$opcionmes."' selected>".$meses[$opcionmes]."</li>";
							}else{
								echo "<li value='".$opcionmes."'>".$meses[$opcionmes]."</li>";
							}
						}
						echo "</ul></div>
					</td>
					<td><i class='fa fa-mail-forward' data-mes-posterior='".mes_posterior()."'></i><i class='fa fa-calendar-o' title='Hoy'></i></td>
				</tr>";
	}
	function calendar($ano,$mes){
		$fecha_actual=date("Y-n-j");
		if (empty($_GET['ano']) && empty($_GET['mes'])) {
			$ano=date("Y");
			$mes=date("n");
		}
		navegador($ano,$mes);
		echo "
				<tr>
					<td>Lun</td>
					<td>Mar</td>
					<td>Mi&eacute;</td>
					<td>Jue</td>
					<td>Vie</td>
				</tr>
			</thead>
			<tbody>
		";
		$ultimo_dia_mes=cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
		$nombre_dia=["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
		for ($dia_mes=1;$dia_mes<=$ultimo_dia_mes;$dia_mes++){
			$fecha=$ano."-".$mes."-".$dia_mes;
			$nombre_dia_mes=$nombre_dia[date("N",strtotime($fecha))-1];

			if ($nombre_dia_mes == "Sábado" || $nombre_dia_mes == "Domingo") {
				continue;
			}
			if ($dia_mes==1) {
				switch ($nombre_dia_mes) {
					case 'Lunes':
						echo "
							<tr>
								<td data-fecha='".$fecha."' ".vacaciones($fecha).""; 
									echo num_eventos($fecha);
								echo "><span>".$dia_mes."</span><div>";echo popup($fecha); echo "</div></td>
						";	
						break;			
					case 'Martes':
						echo "
							<tr>
								<td></td>
								<td data-fecha='".$fecha."' ".vacaciones($fecha).""; 
									echo num_eventos($fecha);
								echo "><span>".$dia_mes."</span><div>";echo popup($fecha); echo "</div></td>
						";
						break;
					case 'Miércoles':
						echo "
							<tr>
								<td></td>
								<td></td>
								<td data-fecha='".$fecha."' ".vacaciones($fecha).""; 
									echo num_eventos($fecha);
								echo "><span>".$dia_mes."</span><div>";echo popup($fecha); echo "</div></td>
						";
						break;
					case 'Jueves':
						echo "
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td data-fecha='".$fecha."' ".vacaciones($fecha).""; 
									echo num_eventos($fecha);
								echo "><span>".$dia_mes."</span><div>";echo popup($fecha); echo "</div></td>
						";
						break;
					case 'Viernes':
						echo "
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td data-fecha='".$fecha."' ".vacaciones($fecha).""; 
									echo num_eventos($fecha);
								echo "><span>".$dia_mes."</span><div>";echo popup($fecha); echo "</div></td>
							</tr>
						";
						break;
				}
			}else if($nombre_dia_mes!="Viernes") {
				echo "<td data-fecha='".$fecha."' ".vacaciones($fecha).""; 
				echo num_eventos($fecha);	
				echo "><span>".$dia_mes."</span><div>";echo popup($fecha); echo "</div></td>";
			}else if($nombre_dia_mes=="Viernes"){
				echo "
						<td data-fecha='".$fecha."' ".vacaciones($fecha).""; 
				echo num_eventos($fecha);
				echo "><span>".$dia_mes."</span><div>";echo popup($fecha); echo "</div></td>
					</tr>
				";
			}
		}
		echo "
				</tbody>
			</table>
		";
	}
 ?>
