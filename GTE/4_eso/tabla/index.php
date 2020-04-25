<?php
    $conexion = new mysqli("localhost","username","password","database"); //conexión a DB / DB connection
    /*Si la conexión falla / The connection is failed*/
    if (!$conexion) { 
        die("Error al conectar con la DB". $conexion->connect_error);
    }
    //registros por página / registration by page
    $por_pagina = 10;
    if (isset($_GET['pagina'])) {
    	$pagina = $_GET['pagina'];
    }else{
    	$pagina = 1;
    }
    $empieza = ($pagina-1) * $por_pagina;
    $query = "SELECT * FROM 4eso LIMIT $empieza, $por_pagina";
    $res = $conexion->query($query);
    //Mostrar la tabla / To show table
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
            echo "<td><center><font face='segoe script' color='#333333'>".$row["materia"]."</font></center></td>";
            echo "<td><center><font face='segoe script' color='#333333'><a href='".$row["enlace"]."' target='_blank'>".$row["tema"]."</a></font></center></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";  
        echo "<div class='navegacion_actividades_tabla'>";
        $query = "SELECT * FROM 4eso";
        $resultado = mysqli_query($conexion, $query);

        $total_registros = mysqli_num_rows($resultado);
        $total_paginas = ceil($total_registros / $por_pagina);
        $inicio = 1;
        $cantidad_paginas = 5;
        $anterior = $pagina - 1;
        $siguiente = $pagina + 1;
        $total_penultima_pagina = $total_paginas - 1;
        echo "<center>";
        if ($total_paginas < 2) { // si solo hay 1 pagina / one page
        	echo "";
        }elseif(($total_paginas > 1)&&(($_GET['pagina'] == 1)||(empty($_GET['pagina'])))){ //primera página / first page
            echo "<p class='numero' id='numero'>".$pagina." / ".$total_paginas."</p>";
            echo "<a href='ejem.php?pagina=".$siguiente."' class='botones' id='botones'><font>>></font></a>";
            echo "<a href='ejem.php?pagina=$total_paginas' class='botones' id='botones'><font>&Uacute;ltima</font></a>";
        }elseif(($total_paginas > 1)&&($_GET['pagina'] <= $total_penultima_pagina)){ // entre páginas / between pages
        	echo "<a href='ejem.php?pagina=1' class='botones' id='botones'><font>Primera</font></a>";
            echo "<a href='ejem.php?pagina=".$anterior."' class='botones' id='botones'><font><<</font></a>";
			echo "<p class='numero' id='numero'>".$pagina." / ".$total_paginas."</p>";
            echo "<a href='ejem.php?pagina=".$siguiente."' class='botones' id='botones'><font>>></font></a>";
            echo "<a href='ejem.php?pagina=$total_paginas' class='botones' id='botones'><font>&Uacute;ltima</font></a>";  
        }elseif(($total_paginas > 1)&&($_GET['pagina'] = $total_paginas)){ // última página / last page
        	echo "<a href='ejem.php?pagina=1' class='botones' id='botones'><font>Primera</font></a>";
            echo "<a href='ejem.php?pagina=".$anterior."' class='botones' id='botones'><font><<</font></a>";
            echo "<p class='numero' id='numero'>".$pagina." / ".$total_paginas."</p>";
        }
	    echo "</center>";
	    echo "</div>"; 	
    }else{ // Si la tabla esta vacía / empty table
        echo "<img src='imagenes/logo_tabla_equiz.png' class='no_table' id='no_table'>"; 
    }
?>	
