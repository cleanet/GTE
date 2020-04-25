<html>
  <head>
    <title>Actividades interactivas | 4 eso</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/ico" href="/imagenes/logo_GTE.ico">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="funciones.js"></script>
    <meta name="viewport" content="width=device-width">
    <script src="/plugins/jquery_1.11.3.min.js"></script><!-- Este script permite jquery externo / This script lets external jquery-->
    <script src="/plugins/jquery-lastest.js"></script><!-- Este script permite el menú fijo / This script lets fixed menu-->
    <script src="/plugins/jquery-3.4.1.min.js"></script>
    <script>
      $(document).ready(cargarproductos(0));
      function cargarproductos(limite){
        var url = "educaplay.php";
        $.post(url,{limite:limite},function(responseText){
          $("#contenedor").html(responseText);
        });
      }
    </script>
    <script>
      $(document).ready(cargarproductos_learnclick(0));
      function cargarproductos_learnclick(limite){
        var url = "learnclick.php";
        $.post(url,{limite:limite},function(responseText){
          $("#contenedor_learnclick").html(responseText);
        });
      }
    </script>
    <script>
      $(document).ready(cargarproductos_scratch(0));
      function cargarproductos_scratch(limite){
        var url = "scratch.php";
        $.post(url,{limite:limite},function(responseText){
          $("#contenedor_scratch").html(responseText);
        });
      }
    </script>
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
    <font class="title_1A">Actividades interactivas | 4 ESO </font>
    <div class="body_div">
      <center>
        <form id="demo" action="" method="post" name="captcha-form">
         <font face="segoe script" color="#333333" class="materia_text_form" id="cambiartexto">Materia:</font>
         <br>
         <input type="text" name="materia" id="data"  placeholder="Escribe aqu&iacute;..." required>
         <br>
         <font face="segoe script" color="#333333" id="cambiartexto" class="materia_text_form">Tema:</font>
         <br>
         <input type="text" name="tema" oncut="return false" onpaste="return false" oncut="return false" placeholder=" Escribe aqu&iacute;..." required id="materia">
         <br>
         <font face="segoe script" color="#333333" id="cambiartextarea" class="tarea_text_form">Enlace:</font> 
         <br>
         <input type="text" name="enlace" oncut="return false" oncut="return false" placeholder=" http://www.ejemplo.com" required id="materia" class="enlace1" value="http://www.">
         <br>
         <div id="divcaptcha"><img src="captcha.php" border="0" class="captcha_img" vspace="3" /></div>&nbsp;<input type="text" name="code" width="25" required  id="captcha" maxlength="8" />
         <br>
         <br>
         <button type="submit" name="Enviar" class="btn" title="Guardar evento" id="enviar"><i class="fa fa-check-square-o  enviar1"></i></button>&nbsp;&nbsp;<button type="reset" name="eliminar" class="btn" title="Limpiar formulario"><i class="fa fa-eraser  borrar1"></i></button>&nbsp;&nbsp;<button type="button" name="modificar" title="Modificar evento" class="btn" onclick="location.href='modificar_fila/'"><i class="fa fa-pencil-square-o  editar1"></i></button>&nbsp;&nbsp;<button type="button" name="eliminar datos" title="Eliminar evento" class="btn" onclick="location.href='eliminar_fila/'"><i class="fa fa-trash  eliminar1"></i></button>
        </form>
        <div id="reload_tabla1">
          <?php include("tabla2.php"); ?>
        </div>
        <i class="fa fa-puzzle-piece" title="Actividades interactivas"></i>
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
        <font id="fuente_pop">El URL no es valida</font>
      </div>
      <div class="popup_no_existe" id="popup_no_existe">
        <i class="fa fa-exclamation-triangle" id="fa"></i>
        <font id="fuente_pop">El URL no existe</font>
      </div>
      <div class="popup_eliminado" id="popup_eliminado">
        <i class="fa fa-check" id="fa"></i>
        <font id="fuente_pop">Eliminado correctamente</font>
      </div>
      <div class="popup_no_eliminado" id="popup_no_eliminado">
        <i class="fa fa-close" id="fa"></i>
        <font id="fuente_pop">Error al eliminar la actividad</font>
      </div>
      <div id="fondo_popup">
        <div id="popup_elegir">
          <i class="fa fa-close cerrar"></i>
          <img src="/profesorado/imagenes/anadir_act.png" class="anadir_act1" title="a&ntilde;adir una nueva actividad">
          <img src="/profesorado/imagenes/educaplay1.png" id="educaplay">
          <img src="/profesorado/imagenes/learnclick1.png" id="learnclick">
          <img src="/profesorado/imagenes/scratch.png" id="scratch">
          <div class="anadir_act1_form">
            <form method="POST" id="form_act">
              <div class="campo_seleccion">
                <i class="fa fa-close" id="close_edit"></i>
                <select class="select12" id="select12">
                  <option disabled selected value="nada">Elegir actividad:</option>
                  <option value="scratch_elegir">Scratch</option>
                  <option value="educaplay_elegir">Educaplay</option>
                  <option value="learnclick_elegir">Learnclick</option>
                </select>      
              </div>
              <div id="div_scratch">
                <textarea id="input_scratch" name="input_scratch1"></textarea>
              </div>
              <div id="div_educaplay">
                <textarea id="input_educaplay" name="input_educaplay1"></textarea>
              </div>
              <div id="div_learnclick">
                <textarea id="input_learnclick" name="input_learnclick1"></textarea>
              </div>
              <div id="div_captcha">
                <img src="captcha.php" border="0" class="captcha_img1" vspace="3" />&nbsp;
                <input type="text" name="code" width="25" required  id="captcha1" maxlength="8" />          
              </div>
              <button id="enviar_act"><i class="fa fa-paper-plane"></i></button>
            </form>
          </div>
          <div id="popup_educaplay">
            <p id="title"><b>Educaplay</b><i class="fa fa-close close_popup_educaplay"></i></p>
            <div id="contenedor">

            </div>
            <img src="/profesorado/imagenes/eliminar_todo_act.png" id="eliminar_todo_educaplay" title="Elimimar todas las actividades" alt="Eliminar todo">
            <i class="fa fa-trash basura-act-educaplay" id="basura-act-educaplay"></i>
            <div id="div_eliminacion_educaplay">
              <form method="post" id="formulario_div_eliminacion_educaplay">
                <p>ID:</p>
                <input type="number" name="identidad_educaplay" class="input_eliminar_educaplay">
                &nbsp;&nbsp;
                <button class="boton_eliminar_div_eliminacion_educaplay">
                  <i class="fa fa-trash logo_div_eliminacion_educaplay" id="logo_div_eliminacion_educaplay"></i>
                </button>
                <i class="fa fa-close close_div_eliminacion_educaplay" id="close_div_eliminacion_educaplay"></i>
              </form>
            </div>
          </div>
          <div id="popup_scratch">
            <p id="title_scratch"><b id="texto_scratch">SCRATCH</b><i class="fa fa-close close_popup_scratch"></i></p>
            <div id="contenedor_scratch">
            </div>
            <img src="/profesorado/imagenes/eliminar_todo_act_scratch.png" id="eliminar_todo_scratch" title="Elimimar todas las actividades" alt="Eliminar todo">
            <i class="fa fa-trash basura-act-scratch" id="basura-act-scratch"></i>
            <div id="div_eliminacion_scratch">
              <form method="post" id="formulario_div_eliminacion_scratch">
                <p>ID:</p>
                <input type="number" name="identidad_scratch" class="input_eliminar_scratch">
                &nbsp;&nbsp;
                <button class="boton_eliminar_div_eliminacion_scratch">
                  <i class="fa fa-trash logo_div_eliminacion_scratch" id="logo_div_eliminacion_scratch"></i>
                </button>
                <i class="fa fa-close close_div_eliminacion_scratch" id="close_div_eliminacion_scratch"></i>
              </form>
            </div>
          </div>
          <div id="popup_learnclick">
            <p id="title_learnclick"><b>Learn</b>click<i class="fa fa-close close_popup_learnclick"></i></p>
            <div id="contenedor_learnclick">
            </div>
            <img src="/profesorado/imagenes/eliminar_todo_act_learnclick1.png" id="eliminar_todo_learnclick" title="Elimimar todas las actividades" alt="Eliminar todo">
            <i class="fa fa-trash basura-act-learnclick" id="basura-act-learnclick"></i>
            <div id="div_eliminacion_learnclick">
              <form method="post" id="formulario_div_eliminacion_learnclick">
                <p>ID:</p>
                <input type="number" name="identidad_learnclick" class="input_eliminar_learnclick">
                &nbsp;&nbsp;
                <button class="boton_eliminar_div_eliminacion_learnclick">
                  <i class="fa fa-trash logo_div_eliminacion_learnclick" id="logo_div_eliminacion_learnclick"></i>
                </button>
                <i class="fa fa-close close_div_eliminacion_learnclick" id="close_div_eliminacion_learnclick"></i>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>