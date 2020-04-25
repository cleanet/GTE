<style>
  .botones{
    margin: 2%;
    text-decoration: none;
    border: 2px solid #2e9afe;
    padding: 5px;
    color: blue;
    border-style: dashed;
    cursor:pointer;
    font-family: segoe print;
  }
  .botones:hover{
    background: rgba(46, 154, 254,0.3);
  }
  .numero{
    margin: 2%;
    text-decoration: none;
    border: 2px solid #2e9afe;
    padding: 5px;
    color: blue;
    border-style: dashed;
    font-family: segoe print;
    width: 5%;
    display: inline-block;
  }
    table {
    font-family: Segoe script;
    color: #666;
    font-size: 1.5vw;
    text-shadow: 1px 1px 0px #fff;
    background: #eaebec;
    margin: 20px;
    border: #ccc 1px solid;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -moz-box-shadow: 0 1px 2px #d1d1d1;
    -webkit-box-shadow: 0 1px 2px #d1d1d1;
    box-shadow: 0 1px 2px #d1d1d1;
    width: 80%;
}
.no_table{
    width: 7vw;
}
@media screen and (max-width: 600px){
  body .no_table{
    width:40%!important;
    left:50%;
    position:relative;
  }
    #tabla1 {
        font-family: Segoe script;
        color: #666;
        font-size: 8vw;
        text-shadow: 1px 1px 0px #fff;
        background: #eaebec;
        margin: 20px;
        border: #ccc 1px solid;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        -moz-box-shadow: 0 1px 2px #d1d1d1;
        -webkit-box-shadow: 0 1px 2px #d1d1d1;
        box-shadow: 0 1px 2px #d1d1d1;
        width: 182%;
    }
    .navegacion_actividades_tabla{
    	width: 200%;
    }
  body #botones{
    margin: 2%;
    text-decoration: none;
    border: 2px solid #2e9afe;
    padding: 5px;
    color: blue;
    border-style: dashed;
    font-size:10vw;
    cursor:pointer;
  }
  body #numero{
    margin: 2%;
    text-decoration: none;
    border: 2px solid #2e9afe;
    padding: 5px;
    color: blue;
    border-style: dashed;
    font-family: segoe print;
    font-size: 10vw;
    width: 20%;
    display: inline-block;
  }
}
@media screen and (max-width: 768px) {
  body .no_table{
    width:15vw;
  }
    body table {
        font-family: Segoe script;
        color: #666;
        font-size: 3vw;
        text-shadow: 1px 1px 0px #fff;
        background: #eaebec;
        margin: 20px;
        border: #ccc 1px solid;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        -moz-box-shadow: 0 1px 2px #d1d1d1;
        -webkit-box-shadow: 0 1px 2px #d1d1d1;
        box-shadow: 0 1px 2px #d1d1d1;
        width: 80%;
    }
	#botones{
		margin: 2%;
		text-decoration: none;
		border: 2px solid #2e9afe;
		padding: 5px;
		color: blue;
		border-style: dashed;
		font-size:3vw;
		cursor:pointer;
	}
	#numero{
		margin: 2%;
		text-decoration: none;
		border: 2px solid #2e9afe;
		padding: 5px;
		color: blue;
		border-style: dashed;
		font-family: segoe print;
		font-size: 3vw;
		display: inline-block;
		width: 40%;
	}
}
table th {
    padding: 5px 25px 5px 25px;
    border-top: 1px solid #fafafa;
    border-bottom: 1px solid #e0e0e0;
    background: #ededed;
    background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
    background: -moz-linear-gradient(top, #ededed, #ebebeb);+
}
 table tr {
    text-align: center;
    padding-left: 20px;
}
table td {
    padding: 10px;
    border-top: 1px solid #ffffff;
    border-bottom: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
table tr.even td {
    background: #f6f6f6;
    background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
    background: -moz-linear-gradient(top, #f8f8f8, #f6f6f6);
}
table tr:hover td {
    background: #f2f2f2;
    background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
    background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}

/*fin estilos visuales de la tabla*/

.table-container
{
    width: 100%;
    overflow-y: auto;
    _overflow: auto;
    margin: 0 0 1em;
}
/* añadimos las barras para dispositivos IOS */

.table-container::-webkit-scrollbar
{
    -webkit-appearance: none;
    width: 14px;
    height: 5px;
}
.table-container::-webkit-scrollbar-thumb
{
    border-radius: 8px;
    border: 3px solid #fff;
    background-color: rgba(0, 0, 0, .3);
}
</style>
<?php
    $conexion = new mysqli("localhost","username","password","database");
    if (!$conexion) {
        die("Error al conectar con la DB". $conexion->connect_error);
    }
    $por_pagina = 10;
    if (isset($_GET['pagina'])) {
    	$pagina = $_GET['pagina'];
    }else{
    	$pagina = 1;
    }
    $empieza = ($pagina-1) * $por_pagina;
    $query = "SELECT * FROM 3eso LIMIT $empieza, $por_pagina";
    $res = $conexion->query($query);
    if ($res->num_rows > 0) {
        echo "<div id='table-container'>";
        echo "<table id='tabla1'>";
        echo "<tr>";
        echo "<th colspan='4' width='1000'><center><font face='segoe script' color='#333333'>Actividades Interactivas de 1 ESO</font></center></th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th><center><font face='segoe script' color='#333333'>ID</font></center></th>";
        echo "<th><center><font face='segoe script' color='#333333'>Materia</font></center></th>";
        echo "<th><center><font face='segoe script' color='#333333'>Tema</font><center></th>";
        echo "</tr>";
        while($row = $res->fetch_assoc()){
            echo "<tr>";
            echo "<td><center><font face='segoe script' color='#333333'>".$row["id"]."</font></center></td>";
            echo "<td><center><font face='segoe script' color='#333333'>".$row["fecha"]."</font></center></td>";
            echo "<td><center><font face='segoe script' color='#333333'><a href='".$row["tarea"]."' target='_blank'>".$row["materia"]."</a></font></center></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        echo "<div class='navegacion_actividades_tabla'>";
        $query = "SELECT * FROM 3eso";
        $resultado = mysqli_query($conexion, $query);

        $total_registros = mysqli_num_rows($resultado);
        $total_paginas = ceil($total_registros / $por_pagina);
        $inicio = 1;
        $cantidad_paginas = 5;
        $anterior = $pagina - 1;
        $siguiente = $pagina + 1;
        $total_penultima_pagina = $total_paginas - 1;
        echo "<center>";
        if ($total_paginas < 2) { // si solo hay 1 pagina
        	echo "";
        }elseif(($total_paginas > 1)&&(($_GET['pagina'] == 1)||(empty($_GET['pagina'])))){
            echo "<p class='numero' id='numero'>".$pagina." / ".$total_paginas."</p>";
            echo "<a href='index.php?pagina=".$siguiente."' class='botones' id='botones'><font>>></font></a>";
            echo "<a href='index.php?pagina=$total_paginas' class='botones' id='botones'><font>&Uacute;ltima</font></a>";
        }elseif(($total_paginas > 1)&&($_GET['pagina'] <= $total_penultima_pagina)){
        	echo "<a href='index.php?pagina=1' class='botones' id='botones'><font>Primera</font></a>";
            echo "<a href='index.php?pagina=".$anterior."' class='botones' id='botones'><font><<</font></a>";
			echo "<p class='numero' id='numero'>".$pagina." / ".$total_paginas."</p>";
            echo "<a href='index.php?pagina=".$siguiente."' class='botones' id='botones'><font>>></font></a>";
            echo "<a href='index.php?pagina=$total_paginas' class='botones' id='botones'><font>&Uacute;ltima</font></a>";
        }elseif(($total_paginas > 1)&&($_GET['pagina'] = $total_paginas)){
        	echo "<a href='index.php?pagina=1' class='botones' id='botones'><font>Primera</font></a>";
            echo "<a href='index.php?pagina=".$anterior."' class='botones' id='botones'><font><<</font></a>";
            echo "<p class='numero' id='numero'>".$pagina." / ".$total_paginas."</p>";
        }
	    echo "</center>";
	    echo "</div>";
    }else{
      if (file_exists("../imagenes/logo_tabla_equiz.png")) {
        echo "<img src='../imagenes/logo_tabla_equiz.png' class='no_table' id='no_table'>";
        echo "<br>";
      }else{
        echo "<img src='imagenes/logo_tabla_equiz.png' class='no_table' id='no_table'>"; 
        echo "<br>";
      }
    }
?>
