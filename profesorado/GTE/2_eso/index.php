<html>
  <head>
    <title>2 ESO</title>
    <link rel="icon" type="image/ico" href="/profesorado/imagenes/logo_GTE_profesorado.png">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="tabla/estilos.css">
    <script type="text/javascript" src="funciones.js"></script>
    <meta charset="utf-8">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="/plugins/jquery_1.11.3.min.js"></script><!-- Este script permite jquery externo / This script lets external jquery-->
    <script src="/plugins/jquery-lastest.js"></script><!-- Este script permite el menú fijo / This script lets fixed menu-->
  </head>
  <body id="fondo1">
    <div class="gridcontainer">
      <!-- cabecera / header -->
      <div class="gridwrapper" id="header1">
        <a href="/profesorado/">
          <img src="/profesorado/imagenes/logo_GTE_profesorado.png" class="logo_inicio" id="logo_inicio1">
        </a>
      </div>
      <!-- contenido / content -->
      <div class="gridwrapper contenido" id="body">
        <!-- menu-->
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
        <center>
          <font class="ESO"> 2 ESO</font>
        </center>
        <!-- portal de clases / classes portal-->
        <div class="btn_ESO">
          <img src="imagenes/2A.png" class="imagenes_ESO  btn_ESO_2_A  image_ESO">
          <img src="imagenes/2B.png" class="imagenes_ESO  btn_ESO_2_B  image_ESO">
          <img src="imagenes/2C.png" class="imagenes_ESO  btn_ESO_2_C  image_ESO">
          <img src="imagenes/2D.png" class="imagenes_ESO  btn_ESO_2_D  image_ESO">
          <img src="imagenes/2E.png" class="imagenes_ESO  btn_ESO_2_E  image_ESO">
          <img src="imagenes/2F.png" class="imagenes_ESO  btn_ESO_2_F  image_ESO">
        </div>
       <img src="imagenes/lapiz_separador_1.png" class="lapiz">
        <span id="popup">
          <center>
           <font face="segoe script" color="#333333" id="act_int1">Actividades Interactivas de 2 ESO (enlaces)</font>
          </center>
          <i class="fa fa-question-circle" id="infromacion1"></i>
          <!-- popup para autorizados / authorizeds popup -->
          <div class="ctl00_ContenidoPagina_ctl06_spnTooltip" id="aviso">
            <font color="#FA5858"><big>Solo para autorizados&#58;</big></font> Para a&ntilde;adir un enlace en la tabla, tiene que ir a su curso y grupo.
          </div>
        </span>
      </div>
      <center>
        <?php include('tabla/index.php'); ?>
      </center>
      <!-- pie de página / footer -->
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
                    <a href="/profesorado/GTE" class="fa fa-square-o volver_cursos" title="Volver a los cursos / back to courses"></a>
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
    </div>
  </body>
</html>