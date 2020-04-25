<html>
  <head>
    <title>1&ordm; A</title>
    <link rel="icon" type="image/ico" href="/profesorado/imagenes/logo_GTE_profesorado.png">
    <meta charset="utf-8">
    <link rel="icon" type="image/ico" href="/imagenes/logo_GTE.ico">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="funciones.js"></script>
    <meta name="viewport" content="width=device-width">
    <script src="/plugins/jquery_1.11.3.min.js"></script><!-- Este script permite jquery externo / This script lets external jquery-->
    <script src="/plugins/jquery-lastest.js"></script><!-- Este script permite el menú fijo / This script lets fixed menu-->
    <link rel="stylesheet" type="text/css" href="calendario/estilos_calendario.php"><!--estilos del calendario / calendar's styles-->
    <script src="/plugins/jquery-3.4.1.min.js"></script>
  </head>
  <body id="fondo">
    <div>
      <div class="gridcontainer">
        <div class="gridwrapper" id="header1">
          <a href="/profesorado/">
            <img src="/profesorado/imagenes/logo_GTE_profesorado.png" class="logo_inicio" id="logo_inicio1">
          </a>
        </div>
      </div>
      <nav class="menu">
          <ul class="submenus">
            <li class="dropdown">
              <a href="/profesorado/GTE/1_eso" class="dropbtn">1 ESO</a>
              <div class="dropdown-content">
                <a href="/profesorado/GTE/1_eso/1A">1&ordm; A</a>
                <a href="/profesorado/GTE/1_eso/1B">1&ordm; B</a>
                <a href="/profesorado/GTE/1_eso/1C">1&ordm; C</a>
                <a href="/profesorado/GTE/1_eso/1D">1&ordm; D</a>
                <a href="/profesorado/GTE/1_eso/1E">1&ordm; E</a>
                <a href="/profesorado/GTE/1_eso/1F">1&ordm; F</a>
                <a href="/profesorado/GTE/1_eso/1G">1&ordm; G</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="/profesorado/GTE/2_eso" class="dropbtn">2 ESO</a>
              <div class="dropdown-content">
                <a href="/profesorado/GTE/2_eso/2A">2&ordm; A</a>
                <a href="/profesorado/GTE/2_eso/2B">2&ordm; B</a>
                <a href="/profesorado/GTE/2_eso/2C">2&ordm; C</a>
                <a href="/profesorado/GTE/2_eso/2D">2&ordm; D</a>
                <a href="/profesorado/GTE/2_eso/2E">2&ordm; E</a>
                <a href="/profesorado/GTE/2_eso/2F">2&ordm; F</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="/profesorado/GTE/3_eso" class="dropbtn">3 ESO</a>
              <div class="dropdown-content">
                <a href="/profesorado/GTE/3_eso/3A">3&ordm; A</a>
                <a href="/profesorado/GTE/3_eso/3B">3&ordm; B</a>
                <a href="/profesorado/GTE/3_eso/3C">3&ordm; C</a>
                <a href="/profesorado/GTE/3_eso/3D">3&ordm; D</a>
                <a href="/profesorado/GTE/3_eso/3E">3&ordm; E</a>
                <a href="/profesorado/GTE/3_eso/3F">3&ordm; F</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="/profesorado/GTE/4_eso" class="dropbtn">4 ESO</a>
              <div class="dropdown-content">
                <a href="/profesorado/GTE/4_eso/4A">4&ordm; A</a>
                <a href="/profesorado/GTE/4_eso/4B">4&ordm; B</a>
                <a href="/profesorado/GTE/4_eso/4C">4&ordm; C</a>
                <a href="/profesorado/GTE/4_eso/4D">4&ordm; D</a>
                <a href="/profesorado/GTE/4_eso/4E">4&ordm; E</a>
                <a href="/profesorado/GTE/4_eso/4F">4&ordm; F</a>
              </div>
            </li>
            <li class="icons" id="icons">
              <a href="/profesorado/">
                <i class="fa fa-home"></i>
              </a>
            </li>
            <li class="icons" id="icons">
              <a href="//quinessomos.com" target="_blank">
                <i class="fa fa-users"></i>
              </a>
            </li>
          </ul>
      </nav>
      <font id="title_1A">1 ESO A</font>
      <select id="tipoEventos">
        <option value="editar" id="seleccion_titulo">-Editar...-</option>
        <option value="Vacaciones_de_Pascua">Vacaciones de Pascua</option>
        <option value="Vacaciones_de_Navidad">Vacaciones de Navidad</option>
        <option value="Dias_festivos">Dias festivos</option>
        <option value="inicio_de_curso">Inicio de curso</option>
      </select><form method="POST" id="form_fecha" style="display: none;"><textarea id="seleccionar_fecha" name="seleccionar_fecha" hidden></textarea></form>
      <?php
        include("calendario/index.php");
      ?>
      <script src="calendario/funciones_calendario.js"></script>
      <br><br>
      <table align="center" class="legenda_calendario">
          <tbody>
            <tr>
                <th colspan="2" class="subtitulo">Inicio de curso y vacaciones</th>
                <th class="titulo">otros</th>
            </tr>
            <tr>
                <td class="td">Inicio de curso:&nbsp;<canvas height="20" width="20"></canvas></td>
                <td class="td">Vacaciones de navidad:&nbsp;<canvas height="20" width="20"></canvas></td>
                <td class="td">Hoy:&nbsp;<canvas height="20" width="20"></canvas></td>
            </tr>
            <tr>
                <td class="td">Vacaciones de Pascua:&nbsp;<canvas height="20" width="20"></canvas></td>
                <td class="td">Dias festivos:&nbsp;<canvas height="20" width="20" ></canvas></td>
                <td class="td">eventos:&nbsp;<canvas height="20" width="20"></canvas></td>
            </tr>
        </tbody>
      </table>
      <div class="gridwrapper" id="footer">
        <div class="schools_links" id="schools_links">School's links / Enlaces web del instituto</div>
        <a href="mailto:nombre@instituto.com"><i class="fa fa-envelope mail" title="nombre@instituto.com"></i></a>
        <a href="tel:+00 000 000 000"><i class="fa fa-tty telefono" title="+00 000 000 000"></i></a>
        <a href="fax:+00 000 000 000"><i class="fa fa-fax fax1" title="+00 000 000 000"></i></a>
        <a href="//quienessomos.com" target="_blank" title="�Quienes somos? / Who we are?"><i class="fa fa-users equipo" id="equipo18"></i></a>
        <a href="/guia.pdf" download="/guia.pdf"><i class="fa fa-file-pdf-o descarga"></i></a>
        <div class="red">
      	    <div class="social" id="social" data-hide="false">
      	        <div>
      	          <a href="//facebook.com" target="_blank" class="fa fa-facebook-official facebook"></a>
      	        </div>
      	        <div>
      	          <a href="//youtube.com" target="_blank" class="fa fa-youtube-play youtube"></a>
      	        </div>
      	        <div>
      	          <a href="//plus.google.com" target="_blank" class="fa fa-google-plus googleplus"></a>
      	        </div>
      	        <div>
      	          <a href="mailto:nombre@instituto.com" class="fa fa-envelope correo" title="nombre@instituto.com"></a>
      	        </div>
      	        <div>
      	          <a href="tel:+00 000 000 000" class="fa fa-volume-control-phone telf" title="+00 000 000 000"></a>
      	        </div>
      	        <div>
      	          <a href="fax:+00 000 000 000" class="fa fa-fax mensaje" title="+00 000 000 000"></a>
      	        </div>
                  <div>
                    <a href="/profesorado/GTE/" class="fa fa-square-o volver_cursos" title="Volver a los cursos / back to courses"></a>
                  </div>
                  <div>
                    <a href=".." class="fa fa-arrow-left volver" title="Volver / To back"></a>
                  </div>
      	    </div>
      	    <div class="otros">
      	      <i class="fa fa-eye-slash" title="Esconder barra social / To hide social bar"></i>
      	    </div>
      	</div>
      </div>
      <div id="contactos_div"></div>
    </div>
    <div id="correcto_insertar">
      <font>insertado correctamente</font>
    </div>
    <div id="error_insertar">
      <font>Error al insertar las vacaciones</font>
    </div>
    <div id="correcto_eliminar">
      <font>eliminado correctamente</font>
    </div>
    <div id="error_eliminar">
      <font>Error al eliminar las vacaciones</font>
    </div>
    <ul class="context">
      <li class="opciones  opcion1" title="Eliminar vacaciones">Eliminar</li>
      <li class="opciones  opcion2" title="Eliminar todas las vacaciones del evento seleccionado">Eliminar las vacaciones de...</li>
      <li class="opciones  opcion3" title="Eliminar todas las vacaciones del calendario">Eliminar todo</li>
    </ul>
  </body>
</html>
