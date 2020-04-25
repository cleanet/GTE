window.onload=function(){
  //menu fijo / fixed menu
      var altura = $('.menu').offset().top;
      $(window).on('scroll', function(){
          if ( $(window).scrollTop() > altura ){
              $('.menu').addClass('menu-fixed');
          } else {
              $('.menu').removeClass('menu-fixed');
          }
      });
    //Ocultar barra social vertical / To hid vertical social bar
        $(".otros i").click(function(){
            var hide=$(".social").attr("data-hide");
            if (hide=="false") {
                $(".otros i").animate({
                    left:"-180%"
                },1000);
                $(".social").hide();
                $(".social").attr("data-hide","true");
            }else if(hide=="true"){
                $(".otros i").animate({
                    left:"0"
                },1000);
                $(".otros i").removeAttr("style");
                $(".social").show();
                $(".social").attr("data-hide","false");
            }
        });
    /*actualización de la tabla / table update
        var cambio=null;
        setInterval(function(){
            req=new XMLHttpRequest();
            req.open("POST","funciones.php",true);
            req.send();
            req.onreadystatechange=function(){
                if (this.readyState==4 && this.status==200){
                    var cambio=req.responseText.toString();
                    $("#body+center").html(this.responseText);
                }
            }
        },100);*/
  /*Insertar eventos / To insert events*/
    $("#enviar").click(function(event) {
      var datos=$('#demo').serialize();
      var fecha2 = $("#data");
      var tipo2 = $("#tipoEventos");
      var otro2 = $("#otroTipoEventos");
      var materia2 = $("#materia"); 
      var tarea2 = $("#tarea");
      event.preventDefault();
      $.ajax({
        type:"POST",
        url:"verificar_captcha.php",
        data:datos,
        beforeSend:function(){
          $("#enviar").html("<i class='fa fa-spinner fa-spin'></i>");
          var d = new Date();
          setTimeout(function(){
            $("#divcaptcha").html("<img src='captcha.php?key=" + d.getTime() + "' class='captcha_img' border='0'/>");
          },3000);
        },
        success:function(resp){
          setTimeout(function(){
            if (resp!=1){
                $(".popup_errorcaptchaevento").delay(500).slideDown("slow");
                $(".popup_errorcaptchaevento").delay(1000).slideUp("slow");
            }else{
                $.ajax({
                  type:"POST",
                  url:"anadirevento.php",
                  data:datos,
                  success:function(r){
                    if (r!=1){
                      $(".popup_errorevento").delay(500).slideDown("slow");
                      $(".popup_errorevento").delay(1000).slideUp("slow");  
                    }else{
                      $(".popup_correctoevento").delay(500).slideDown("slow");
                      $(".popup_correctoevento").delay(1000).slideUp("slow");                      
                    }
                  }
                });
            } 
          },3000);
        },
        complete:function(){
          setTimeout(function(){
            $("#enviar").html("<i class='fa fa-check-square-o  enviar1'></i>");
          },3000); 
        }
      });
      return false;
    }); 
    $(".popup_errorevento").click(function(){
      location.reload();
    });
    $(".popup_correctoevento").click(function(){
      location.reload();
    });
    $(".popup_errorcaptchaevento").click(function(){
      location.reload();
    });
  /*Modificar eventos / To modify events*/
    $("#enviar_modificacion").click(function(event) {
      var datos=$('#demo').serialize();
      var fecha2 = $("#data");
      var tipo2 = $("#tipoEventos");
      var otro2 = $("#otroTipoEventos");
      var materia2 = $("#materia"); 
      var tarea2 = $("#tarea");
      event.preventDefault();
      $.ajax({
        type:"POST",
        url:"../verificar_captcha.php",
        data:datos,
        beforeSend:function(){
          $("#enviar_modificacion").html("<i class='fa fa-spinner fa-spin'></i>");
          var d = new Date();
          setTimeout(function(){
            $("#divcaptcha").html("<img src='../captcha.php?key=" + d.getTime() + "' class='captcha_img' border='0'/>");
          },3000);
        },
        success:function(resp){
          setTimeout(function(){
            if (resp!=1){
                $(".popup_errorcaptchaevento").delay(500).slideDown("slow");
                $(".popup_errorcaptchaevento").delay(1000).slideUp("slow");
            }else{
                $.ajax({
                  type:"POST",
                  url:"../modificar_datos(func).php",
                  data:datos,
                  success:function(r){
                    if (r!=1){
                      $(".popup_errorevento").delay(500).slideDown("slow");
                      $(".popup_errorevento").delay(1000).slideUp("slow");  
                    }else{
                      $(".popup_correctoevento").delay(500).slideDown("slow");
                      $(".popup_correctoevento").delay(1000).slideUp("slow");                      
                    }
                  }
                });
            } 
          },3000);
        },
        complete:function(){
          setTimeout(function(){
            $("#enviar_modificacion").html("<i class='fa fa-check-square-o  enviar1'></i>");
          },3000); 
        }
      });
      return false;
    }); 
  /*Eliminar eventos / To delete events*/
    $("#enviar_eliminacion").click(function(event) {
      var datos=$('#demo').serialize();
      var fecha2 = $("#data");
      var tipo2 = $("#tipoEventos");
      var otro2 = $("#otroTipoEventos");
      var materia2 = $("#materia"); 
      var tarea2 = $("#tarea");
      event.preventDefault();
      if ($("#fruit2").is(':checked')){
        $.ajax({
          type:"POST",
          url:"../verificar_captcha.php",
          data:datos,
          beforeSend:function(){
            $("#enviar_eliminacion").html("<i class='fa fa-spinner fa-spin'></i>");
            var confirmar = confirm("Estas seguro que quieres eliminar todos los eventos del calendario?");
            if (confirmar){
            }else{
                $("#enviar_eliminacion").html("<i class='fa fa-check-square-o  enviar1'></i>");
                return false;
            }
            var d = new Date();
            setTimeout(function(){
              $("#divcaptcha").html("<img src='../captcha.php?key=" + d.getTime() + "' class='captcha_img' border='0'/>");
              $("#divcaptchapopup").html("<img src='../captcha.php?key=" + d.getTime() + "' class='captcha_img_popup' border='0'/>");
            },3000);
          },
          success:function(resp){
            setTimeout(function(){
              if (resp!=1){
                  $(".popup_errorcaptchaevento").delay(500).slideDown("slow");
                  $(".popup_errorcaptchaevento").delay(1000).slideUp("slow");
              }else{
                  $.ajax({
                    type:"POST",
                    url:"../eliminar_datos_tabla(func).php",
                    data:datos,
                    success:function(r){
                      if (r!=1){
                        $(".popup_errorevento").delay(500).slideDown("slow");
                        $(".popup_errorevento").delay(1000).slideUp("slow");
                      }else{
                        $(".popup_correctoevento").delay(500).slideDown("slow");
                        $(".popup_correctoevento").delay(1000).slideUp("slow");
                      }
                    }
                  });
              } 
            },3000);
          },
          complete:function(){
            setTimeout(function(){
              $("#enviar_eliminacion").html("<i class='fa fa-check-square-o  enviar1'></i>");
            },3000); 
          }
        });
        return false;
      }else{
        $.ajax({
          type:"POST",
          url:"../verificar_captcha.php",
          data:datos,
          beforeSend:function(){
            $("#enviar_eliminacion").html("<i class='fa fa-spinner fa-spin'></i>");
            var d = new Date();
            setTimeout(function(){
              $("#divcaptcha").html("<img src='../captcha.php?key=" + d.getTime() + "' class='captcha_img' border='0'/>");
              $("#divcaptchapopup").html("<img src='../captcha.php?key=" + d.getTime() + "' class='captcha_img_popup' border='0'/>");
            },3000);
          },
          success:function(resp){
            setTimeout(function(){
              if (resp!=1){
                  $(".popup_errorcaptchaevento").delay(500).slideDown("slow");
                  $(".popup_errorcaptchaevento").delay(1000).slideUp("slow");
              }else{
                  $.ajax({
                    type:"POST",
                    url:"../eliminar_datos(func).php",
                    data:datos,
                    success:function(r){
                      if (r!=1){
                        $(".popup_errorevento").delay(500).slideDown("slow");
                        $(".popup_errorevento").delay(1000).slideUp("slow"); 
                      }else{
                        $(".popup_correctoevento").delay(500).slideDown("slow");
                        $(".popup_correctoevento").delay(1000).slideUp("slow"); 
                      }
                    }
                  });
              } 
            },3000);
          },
          complete:function(){
            setTimeout(function(){
              $("#enviar_eliminacion").html("<i class='fa fa-check-square-o  enviar1'></i>");
            },3000); 
          }
        });
        return false;               
      }
    }); 
    $("#enviar1").click(function(event) {
      var datos1=$('.form_popup').serialize();
      var fecha3 = $(".data1");
      var tipo2 = $("#tipoEventos");
      var otro2 = $("#otroTipoEventos");
      var materia2 = $("#materia"); 
      var tarea2 = $("#tarea");
      event.preventDefault();
      $.ajax({
        type:"POST",
        url:"../verificar_captcha.php",
        data:datos1,
        beforeSend:function(){
          $("#enviar1").html("<i class='fa fa-spinner fa-spin'></i>");
          var d = new Date();
          setTimeout(function(){
            $("#divcaptcha").html("<img src='../captcha.php?key=" + d.getTime() + "' class='captcha_img' border='0'/>");
            $("#divcaptchapopup").html("<img src='../captcha.php?key=" + d.getTime() + "' class='captcha_img_popup' border='0'/>");
          },3000);
        },
        success:function(resp1){
          setTimeout(function(){
            if (resp1!=1){
                $(".popup_errorcaptchaevento_popup").delay(500).slideDown("slow");
                $(".popup_errorcaptchaevento_popup").delay(1000).slideUp("slow");
            }else{
                $.ajax({
                  type:"POST",
                  url:"../eliminar_datos_fecha(func).php",
                  data:datos1,
                  success:function(r1){
                    if (r1!=1){
                      $(".popup_errorevento_popup").delay(500).slideDown("slow");
                      $(".popup_errorevento_popup").delay(1000).slideUp("slow"); 
                      y1.play(); 
                    }else{
                      $(".popup_correctoevento_popup").delay(500).slideDown("slow");
                      $(".popup_correctoevento_popup").delay(1000).slideUp("slow");
                      x1.play();               
                    }
                  }
                });
            } 
          },3000);
        },
        complete:function(){
          setTimeout(function(){
            $("#enviar1").html("<i class='fa fa-check-square-o  enviar1'></i>");
          },3000); 
        }
      });
      return false;
    }); 
    /*checks*/
      var fruit =  $("#fruit1");
      var fruit2 = $("#fruit2");
      $("#fruit1").click(function(){
        fruit2.prop("checked", false);
        setTimeout(function(){
          $(".fondo_popup_eliminar").slideDown("slow");
          $(".popup_eliminar").slideToggle("slow");
          $("body").css("overflow","hidden");
        },300);  
      });
      $(".cerrar_popup").click(function(){
        $("body").removeAttr('style');
        $(".fondo_popup_eliminar").slideUp("slow");
        $(".popup_eliminar").slideToggle("slow");
        fruit.prop("checked", false);
        $(".captcha_popup").val("");
        $(".data1").val("");
      });
      function deshabilitar(){
          $("#data").prop("disabled", true);
      }
  /*configuración del formulario web / webform settings*/
    document.getElementById('tipoEventos').addEventListener('change', function(){
      var valor = this.value;
      // Si el valor elegido del select == otro, habilitar la caja de texto.
      // If the value got is `other`, enable the input text
        if(valor === 'otro'){
          var cajaTexto = document.getElementById('otroTipoEventos');
          cajaTexto.disabled = false;
          cajaTexto.style.display = 'inherit';
          var display = document.getElementById('cambiartexto');
          display.innerHTML='Asunto:';
          var none = document.getElementById('cambiartextarea');
          none.innerHTML='Evento:';
        }
    });
    document.getElementById('tipoEventos').addEventListener('change', function(){
      var valor = this.value;
      if(valor === 'vacaciones'){
          var cajaTexto = document.getElementById('otroTipoEventos');
          cajaTexto.disabled = true;
          cajaTexto.style.display = 'none';
          var display = document.getElementById('cambiartexto');
          display.innerHTML='Asunto:';
          var none = document.getElementById('cambiartextarea');
          none.innerHTML='Evento:';
      }
      if (valor == 'salidas') {
        var cajaTexto = document.getElementById('otroTipoEventos');
        cajaTexto.disabled = true;
        cajaTexto.style.display = 'none';
        var display = document.getElementById('cambiartexto');
        display.innerHTML='Asunto:';
        var none = document.getElementById('cambiartextarea');
        none.innerHTML='Evento:';
      }
      if (valor == 'deberes') {
        var cajaTexto = document.getElementById('otroTipoEventos');
        cajaTexto.disabled = true;
        cajaTexto.style.display = 'none';
        var display = document.getElementById('cambiartexto');
        display.innerHTML='Materia:';
        var none = document.getElementById('cambiartextarea');
        none.innerHTML='Tarea:';
      }
      if (valor == 'trabajos') {
        var cajaTexto = document.getElementById('otroTipoEventos');
        cajaTexto.disabled = true;
        cajaTexto.style.display = 'none';
        var display = document.getElementById('cambiartexto');
        display.innerHTML='Materia:';
        var none = document.getElementById('cambiartextarea');
        none.innerHTML='Tarea:';
      }
      if (valor == 'controles') {
        var cajaTexto = document.getElementById('otroTipoEventos');
        cajaTexto.disabled = true;
        cajaTexto.style.display = 'none';
        var display = document.getElementById('cambiartexto');
        display.innerHTML='Materia:';
        var none = document.getElementById('cambiartextarea');
        none.innerHTML='Tarea:';
      }
    });
    document.getElementById('tipoEventos').addEventListener('change', function(){
      var valor = this.value;
      if(valor === 'vacaciones'){
          var display = document.getElementById('cambiartexto');
          display.innerHTML='Asunto:';
          var none = document.getElementById('cambiartextarea');
          none.innerHTML='Evento:';
      }
      if (valor == 'salidas') {
        var display = document.getElementById('cambiartexto');
        display.innerHTML='Asunto:';
        var none = document.getElementById('cambiartextarea');
        none.innerHTML='Evento:';
      }
      if (valor == 'deberes') {
        var display = document.getElementById('cambiartexto');
        display.innerHTML='Materia:';
        var none = document.getElementById('cambiartextarea');
        none.innerHTML='Tarea:';
      }
      if (valor == 'trabajos') {
        var display = document.getElementById('cambiartexto');
        display.innerHTML='Materia:';
        var none = document.getElementById('cambiartextarea');
        none.innerHTML='Tarea:';
      }
      if (valor == 'controles') {
        var display = document.getElementById('cambiartexto');
        display.innerHTML='Materia:';
        var none = document.getElementById('cambiartextarea');
        none.innerHTML='Tarea:';
      }
    });
    document.getElementById('tipoEventos').addEventListener('change', function(){
      var valor = this.value;
      if(valor === 'otro'){
          var cambiarmateriabox1 = document.getElementById("materia");
          cambiarmateriabox1.setAttribute("name","asuntobox");
          var cambiartareabox1 = document.getElementById("tarea");
          cambiartareabox1.setAttribute("name","eventobox");
      }
    });
    document.getElementById('tipoEventos').addEventListener('change', function(){
      var valor = this.value;
      if(valor === 'vacaciones'){
        var cambiarmateriabox2 = document.getElementById("materia");
          cambiarmateriabox2.setAttribute("name","asuntobox");
        var cambiartareabox2 = document.getElementById("tarea");
          cambiartareabox2.setAttribute("name","eventobox");
      }
      if (valor == 'salidas') {
        var cambiarmateriabox3 = document.getElementById("materia");
          cambiarmateriabox3.setAttribute("name","asuntobox");
        var cambiartareabox3 = document.getElementById("tarea");
          cambiartareabox3.setAttribute("name","eventobox");
      }
      if (valor == 'deberes') {
        var cambiarmateriabox4 = document.getElementById("materia");
          cambiarmateriabox4.setAttribute("name","materiabox");
        var cambiartareabox4 = document.getElementById("tarea");
        cambiartareabox4.setAttribute("name","tareabox");
      }
      if (valor == 'trabajos') {
        var cambiarmateriabox5 = document.getElementById("materia");
          cambiarmateriabox5.setAttribute("name","materiabox");
        var cambiartareabox5 = document.getElementById("tarea");
        cambiartareabox5.setAttribute("name","tareabox");
      }
      if (valor == 'controles') {
        var cambiarmateriabox6 = document.getElementById("materia");
          cambiarmateriabox6.setAttribute("name","materiabox");
        var cambiartareabox6 = document.getElementById("tarea");
        cambiartareabox6.setAttribute("name","tareabox");
      }
    });
}