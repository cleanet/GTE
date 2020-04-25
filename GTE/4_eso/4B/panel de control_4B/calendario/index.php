<html>
  <head>
    <title>calendario | 4 eso B</title>
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
  <body>
    <div class="gridcontainer">
      <div class="gridwrapper" id="header1">
        <a href="/">
          <img src="/imagenes/logo_GTE.png" class="logo_inicio" id="logo_inicio1">
        </a>
      </div>
    </div>
    <nav class="menu">
        <ul class="submenus">
          <li class="dropdown">
            <a href="/GTE/1_eso" class="dropbtn">1 ESO</a>
            <div class="dropdown-content">
              <a href="/GTE/1_eso/1A">1&ordm; A</a>
              <a href="/GTE/1_eso/1B">1&ordm; B</a>
              <a href="/GTE/1_eso/1C">1&ordm; C</a>
              <a href="/GTE/1_eso/1D">1&ordm; D</a>
              <a href="/GTE/1_eso/1E">1&ordm; E</a>
              <a href="/GTE/1_eso/1F">1&ordm; F</a>
              <a href="/GTE/1_eso/1G">1&ordm; G</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="/GTE/2_eso" class="dropbtn">2 ESO</a>
            <div class="dropdown-content">
              <a href="/GTE/2_eso/2A">2&ordm; A</a>
              <a href="/GTE/2_eso/2B">2&ordm; B</a>
              <a href="/GTE/2_eso/2C">2&ordm; C</a>
              <a href="/GTE/2_eso/2D">2&ordm; D</a>
              <a href="/GTE/2_eso/2E">2&ordm; E</a>
              <a href="/GTE/2_eso/2F">2&ordm; F</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="/GTE/3_eso" class="dropbtn">3 ESO</a>
            <div class="dropdown-content">
              <a href="/GTE/3_eso/3A">3&ordm; A</a>
              <a href="/GTE/3_eso/3B">3&ordm; B</a>
              <a href="/GTE/3_eso/3C">3&ordm; C</a>
              <a href="/GTE/3_eso/3D">3&ordm; D</a>
              <a href="/GTE/3_eso/3E">3&ordm; E</a>
              <a href="/GTE/3_eso/3F">3&ordm; F</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="/GTE/4_eso" class="dropbtn">4 ESO</a>
            <div class="dropdown-content">
              <a href="/GTE/4_eso/4A">4&ordm; A</a>
              <a href="/GTE/4_eso/4B">4&ordm; B</a>
              <a href="/GTE/4_eso/4C">4&ordm; C</a>
              <a href="/GTE/4_eso/4D">4&ordm; D</a>
              <a href="/GTE/4_eso/4E">4&ordm; E</a>
              <a href="/GTE/4_eso/4F">4&ordm; F</a>
            </div>
          </li>
          <li class="icons" id="icons">
            <a href="/">
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
    <font class="title_1A">4 ESO B</font>
    <?php
      include("calendario/index.php");
    ?>
    <script src="calendario/funciones_calendario.js"></script>
    <br><br>
    <table align="center" class="legenda_calendario">
      <tbody>
        <tr>
          <th colspan="2" class="subtitulo">Inicio de curso y vacaciones</th>
          <th colspan="3" class="titulo">otros</th>
        </tr>
        <tr>
          <td class="td">Inicio de curso:&nbsp;<canvas height="20" width="20"></canvas></td>
          <td class="td">Vacaciones de navidad:&nbsp;<canvas height="20" width="20"></canvas></td>
          <td class="td">Hoy:&nbsp;<canvas height="20" width="20"></canvas></td>
        </tr>
        <tr>
           <td class="td">Vacaciones de Pascua:&nbsp;<canvas height="20" width="20"></canvas></td>
           <td class="td">Dias festivos:&nbsp;<canvas height="20" width="20"></canvas></td>
           <td class="td">eventos:&nbsp;<canvas height="20" width="20"></canvas></td>
        </tr>
      </tbody>
    </table>
    <br>
    <img src="imagenes/lapiz separador 1.png" class="linea">
    <div>
      <center>
        <form id="demo" method="post" name="captcha-form">
         <font face="segoe script" color="#333333" class="titulo_form">Insertar eventos</font>
         <br>
         <font face="segoe script" color="#333333" class="data_text_form">Data:</font><input type="date" name="databox" id="data" required>
         <br>
         <font face="segoe script" color="#333333" class="tipoEventos_text_form">Tipo de evento:</font>&nbsp;
         <select name="tipoEventos" id="tipoEventos" required>
   
          <option value="null" selected disabled><font face="segoe script"  style="font-size: 1.7vw;" class="elegir_tipoEventos">---Elegir tipo de evento---</font></option>
          <option value="deberes"><font face="segoe script" class="deberes">Deberes</font></option>
          <option value="trabajos"><font face="segoe script" class="trabajos">Trabajos</font></option>
          <option value="controles"><font face="segoe script" class="controles">Controles</font></option>
          <option value="salidas"><font face="segoe script" class="salidas">Salidas</font></option>
          <option value="vacaciones"><font face="segoe script" class="vacaciones">Vacaciones</font></option>
          <option value="otro"><font face="segoe script" class="otro">Otro...</font></option>
   
         </select>
         <input type="text" name="otroTipoEventos" id="otroTipoEventos" disabled>
         <br>
         <font face="segoe script" color="#333333" id="cambiartexto" class="materia_text_form">Materia:</font>
         <br>
         <input type="text" name="materiabox" oncut="return false" onpaste="return false" oncut="return false" placeholder=" Escribe aqu&iacute;..." required id="materia">
         <br>
         <font face="segoe script" color="#333333" id="cambiartextarea" class="tarea_text_form">Tarea:</font> 
         <br>
         <textarea name="tareabox" cols="50" rows="10" placeholder="Escribe aqu&iacute;..." required id="tarea"></textarea>
         <br>
         <div id="divcaptcha"><img src="captcha.php" border="0" class="captcha_img" vspace="3" /></div>&nbsp;<input type="text" name="code" width="25" required  id="captcha" maxlength="8" />
         <br>
         <br>
         <button type="submit" name="Enviar" class="btn" title="Guardar evento" id="enviar"><i class="fa fa-check-square-o  enviar1"></i></button>&nbsp;&nbsp;<button type="reset" name="eliminar" class="btn" title="Limpiar formulario"><i class="fa fa-eraser  borrar1"></i></button>&nbsp;&nbsp;<button type="button" name="modificar" title="Modificar evento" class="btn" onclick="location.href='modificar_fila/'"><i class="fa fa-pencil-square-o  editar1"></i></button>&nbsp;&nbsp;<button type="button" name="eliminar datos" title="Eliminar evento" class="btn" onclick="location.href='eliminar_fila'"><i class="fa fa-trash  eliminar1"></i></button>
        </form>
      </center>
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
                    <a href="/GTE/" class="fa fa-square-o volver_cursos" title="Volver a los cursos / back to courses"></a>
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
      <div class="popup_correctoevento" id="popup_correctoevento">
        <i class="fa fa-check" id="fa"></i>
        <font id="fuente_pop">Guardado correctamente</font>
      </div>
      <div class="popup_errorevento" id="popup_errorevento">
        <i class="fa fa-close" id="fa"></i>
        <font id="fuente_pop">Error al guardar el evento</font>
      </div>
      <div class="popup_errorcaptchaevento" id="popup_errorcaptchaevento">
        <i class="fa fa-close" id="fa"></i>
        <font id="fuente_pop">Captcha incorrecto</font>
      </div>
      <div class="popup_alerta" id="popup_alerta">
        <i class="fa fa-exclamation-triangle" id="fa"></i>
        <font id="fuente_pop">Rellena todos los campos</font>
      </div>
    </div>
  </body>
</html> 