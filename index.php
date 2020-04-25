<html>
  <head>
    <title>G.T.E</title>
    <meta charset="utf-8">
    <meta name="keyworks" content="Tareas, Deberes, Gesti�n,  Escolares, Escolar, Controles, Ex�menes">
    <meta name="description" content="Aplicaci�n web para la gesti�n de tus tareas de la escuela">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="/plugins/jquery_1.6.1.min.js"></script>
    <script src="funciones.js"></script>
    <script type="text/javascript" src="/plugins/jquery_1.6.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="imagenes/logo_GTE.ico">
    <meta charset="utf-8">
  </head>
  <body id="fondo1">
    <div>
      <div class="gridcontainer">
        <div class="gridwrapper" id="header">
          <!-- header -->
          <a href="http://www.instituto.com" target="_blank">
            <img src="imagenes/school_logo.png" class="logo_instituto">
          </a>
          <a href="/imagenes/google_maps.png" target="_blank" id="url">
            <img src="imagenes/google_maps.png" id="mapa_sitio" class="imagen_ubicacion">
          </a>
          <i class="fa fa-map boton_mapa" title="Modo mapa / Map mode"></i>
          <i class="fa fa-globe boton_satelite" title="Modo satelital / Satellite mode"></i>
          <a href="https://goo.gl/maps/Z7XrooJ8Tu3XQgmB6" target="_blank" id="url_googlemaps">
            <font face="segoe script" class="texto_instituto">[Instituto/ Secundary School]</font>
            <br>
            <font face="segoe script" class="texto_direccion">[direcci&oacute;n / Address street]</font>
          </a>
        </div>
        <div class="portadam" id="body">
          <!-- Contenido -->
          <div class="flexslider">
              <ul class="slides">
                  <li>
                      <img src="imagenes/bg-slider-pizarra.jpg" id="portada1">
                      <section class="flex-caption" id="contenido_portada">
                        <div class="logo_page">
                          <img src="imagenes/logo_GTE.png" id="logoGTE" style="">
                        </div>
                        <img src="imagenes/titulo6.png" id="titulo">
                        <i class="fa fa-sign-in" onclick="location.href='GTE/'" title="entrar / enter" id="entry"></i>
                      </section>
                  </li>
              </ul>
          </div>
        </div>
        <div class="gridwrapper" id="footer">
          <!-- pie de p�gina / footer -->
          <div class="schools_links" id="schools_links">School's links / Enlaces web del instituto</div>
          <a href="mailto:nombre@instituto.com"><i class="fa fa-envelope mail" title="nombre@instituto.com"></i></a>
          <a href="tel:+00 000 000 000"><i class="fa fa-tty telefono" title="+00 000 000 000"></i></a>
          <a href="fax:+00 000 000 000"><i class="fa fa-fax fax1" title="+00 000 000 000"></i></a>
          <a href="https://quienessomos.com" target="_blank" title="�Quienes somos? / �Who we are?"><i class="fa fa-users equipo" id="equipo18"></i></a>
          <a href="/guia.pdf" download="/guia.pdf"><i class="fa fa-file-pdf-o descarga"></i></a>
          <div class="red">
                  <div class="social" id="social" data-hide="false">
                      <div>
                        <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook-official facebook"></a>
                      </div>
                      <div>
                        <a href="https://www.youtube.com" target="_blank" class="fa fa-youtube-play youtube"></a>
                      </div>
                      <div>
                        <a href="https://plus.google.com" target="_blank" class="fa fa-google-plus googleplus"></a>
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
                  </div>
                  <div class="otros">
                    <i class="fa fa-eye-slash" title="Esconder barra social / To hide social bar"></i>
                  </div>
          </div>
        </div>
        <!-- Contactos / Contacts -->
        <div id="contactos_div">
        </div>
      </div>
    </div>
  </body>
</html>
