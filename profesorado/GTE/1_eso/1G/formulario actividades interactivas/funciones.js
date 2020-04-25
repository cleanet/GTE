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
  //EDUCAPLAY
      //Elimiar actividad / remove activitie
        $("#div_eliminacion_educaplay").hide();
        $(".basura-act-educaplay").mouseenter(function(){
          $("#div_eliminacion_educaplay").fadeIn();
        });
        $(".close_div_eliminacion_educaplay").click(function(){
          $("#div_eliminacion_educaplay").fadeOut();
          $(".input_eliminar_educaplay").val("");
        });
        $(".boton_eliminar_div_eliminacion_educaplay").click(function(){
          var form1 = $("#formulario_div_eliminacion_educaplay").serialize();
          var valor_input = $(".input_eliminar_educaplay").val();
          $.ajax({
            type:"POST",
            url:"eliminar_educaplay.php",
            data:form1,
            success:function(result1){
              if (result1!=1) {
                $(".popup_no_eliminado").delay(500).slideDown("slow");
                $(".popup_no_eliminado").delay(1000).slideUp("slow");
              }else{
                $(".popup_eliminado").delay(500).slideDown("slow");
                $(".popup_eliminado").delay(1000).slideUp("slow");
                $("#contenedor").load("reload.php");
              }
            }
          });
          return false;
        });
      //
        $("#eliminar_todo_educaplay").click(function(){
          var form2 = $("#formulario_div_eliminacion_educaplay").serialize();
          $.ajax({
            type:"POST",
            url:"eliminar_todo_educaplay.php",
            data:form2,
            success:function(result){
              if (result!=1) {
                $(".popup_no_eliminado").delay(500).slideDown("slow");
                $(".popup_no_eliminado").delay(1000).slideUp("slow");
              }else{
                $("[id='actividades']").fadeOut("slow");
                setTimeout(function(){
                  $("[id='actividades']").remove();
                },3000);
                setTimeout(function(){
                  $(".popup_eliminado").delay(500).slideDown("slow");
                  $(".popup_eliminado").delay(1000).slideUp("slow");
                },1100);
                $("#contenedor").load("reload.php");
              }
            }
          });
        });
        $("#educaplay").click(function(){
          $("#popup_educaplay").fadeIn("slow");
        });
        $(".close_popup_educaplay").click(function(){
          $("#popup_educaplay").fadeOut("slow");
        });
  //LEARNCLICK
      //Elimiar actividad / remove activitie
        $("#div_eliminacion_learnclick").hide();
        $(".basura-act-learnclick").mouseenter(function(){
          $("#div_eliminacion_learnclick").fadeIn();
        });
        $(".close_div_eliminacion_learnclick").click(function(){
          $("#div_eliminacion_learnclick").fadeOut();
          $(".input_eliminar_learnclick").val("");
        });
        $(".boton_eliminar_div_eliminacion_learnclick").click(function(){
          var form1 = $("#formulario_div_eliminacion_learnclick").serialize();
          var valor_input = $(".input_eliminar_learnclick").val();
          $.ajax({
            type:"POST",
            url:"eliminar_learnclick.php",
            data:form1,
            success:function(result1){
              if (result1!=1) {
                $(".popup_no_eliminado").delay(500).slideDown("slow");
                $(".popup_no_eliminado").delay(1000).slideUp("slow");
              }else{
                $(".popup_eliminado").delay(500).slideDown("slow");
                $(".popup_eliminado").delay(1000).slideUp("slow");
                $("#contenedor_learnclick").load("reload_learnclick.php");
              }
            }
          });
          return false;
        });
      //
        $("#eliminar_todo_learnclick").click(function(){
          var form = $("#form_identificador_learnclick").serialize();
          $.ajax({
            type:"POST",
            url:"eliminar_todo_learnclick.php",
            data:form,
            success:function(result){
              if (result!=1) {
                $(".popup_no_eliminado").delay(500).slideDown("slow");
                $(".popup_no_eliminado").delay(1000).slideUp("slow");
              }else{
                $("[id='actividades_learnclick']").animate({
                  left: "-102%",
                  opacity:"0"
                },1000);
                setTimeout(function(){
                  $("[id='actividades_learnclick']").remove();
                },3000);
                setTimeout(function(){
                  $(".popup_eliminado").delay(500).slideDown("slow");
                  $(".popup_eliminado").delay(1000).slideUp("slow");
                },1100);
                $("#contenedor_learnclick").load("reload_learnclick.php");
              }
            }
          });
        });
        $("#learnclick").click(function(){
          $("#popup_learnclick").fadeIn("slow");
        });
        $(".close_popup_learnclick").click(function(){
          $("#popup_learnclick").fadeOut("slow");
        });
  //SCRATCH
      //Elimiar actividad / remove activitie
        $("#div_eliminacion_scratch").hide();
        $(".basura-act-scratch").mouseenter(function(){
          $("#div_eliminacion_scratch").fadeIn();
        });
        $(".close_div_eliminacion_scratch").click(function(){
          $("#div_eliminacion_scratch").fadeOut();
          $(".input_eliminar_scratch").val("");
        });
        $(".boton_eliminar_div_eliminacion_scratch").click(function(){
          var form1 = $("#formulario_div_eliminacion_scratch").serialize();
          var valor_input = $(".input_eliminar_scratch").val();
          $.ajax({
            type:"POST",
            url:"eliminar_scratch.php",
            data:form1,
            success:function(result1){
              if (result1!=1) {
                $(".popup_no_eliminado").delay(500).slideDown("slow");
                $(".popup_no_eliminado").delay(1000).slideUp("slow");
              }else{
                $(".popup_eliminado").delay(500).slideDown("slow");
                $(".popup_eliminado").delay(1000).slideUp("slow");
                $("#contenedor_scratch").load("reload_scratch.php");
              }
            }
          });
          return false;
        });
      //
        $("#eliminar_todo_scratch").click(function(){
          var form = $("#form_identificador_scratch").serialize();
          $.ajax({
            type:"POST",
            url:"eliminar_todo_scratch.php",
            data:form,
            success:function(result){
              if (result!=1) {
                $(".popup_no_eliminado").delay(500).slideDown("slow");
                $(".popup_no_eliminado").delay(1000).slideUp("slow");
              }else{
                $("[id='actividades_scratch']").animate({
                  left: "-102%",
                  opacity:"0"
                },1000);
                setTimeout(function(){
                  $("[id='actividades_scratch']").remove();
                },3000);
                setTimeout(function(){
                  $(".popup_eliminado").delay(500).slideDown("slow");
                  $(".popup_eliminado").delay(1000).slideUp("slow");
                },1100);
                $("#contenedor_scratch").load("reload_scratch.php");
              }
            }
          });
        });
        $("#scratch").click(function(){
          $("#popup_scratch").fadeIn("slow");
        });
        $(".close_popup_scratch").click(function(){
          $("#popup_scratch").fadeOut("slow");
        });
  //Formulario insercion enlaces actividades interactivas / webform for adds interactive activities links'
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
            url:"verificar_url.php",
            data:datos,
            success:function(url1){
              if (!url1){
                $(".popup_alerta").delay(500).slideDown("slow");
                $(".popup_alerta").delay(1000).slideUp("slow");
                $(".enlace1").css("background-color","#FA5858");
              }else{
                $.ajax({
                  type:"POST",
                  url:"existe_url.php",
                  data:datos,
                  success:function(existe){
                    if (!existe){
                      $(".popup_no_existe").delay(500).slideDown('slow');
                      $(".popup_no_existe").delay(1000).slideUp("slow");
                      $(".enlace1").css("background-color","#FA5858");
                    }else{
                        $(".enlace1").css("background-color","#9FF781");
                        $.ajax({
                          type:"POST",
                          url:"verificar_captcha.php",
                          data:datos,
                          beforeSend:function(){
                            $("#enviar").html("<i class='fa fa-spinner fa-spin'></i>");
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
                                    url:"insertar5.php",
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
                    }
                  }
                })
              }
            }
          });
          return false;
        });
  //Formulario insercion actividades interactivas / webform for adds interactive activities
    //Animaciones edicion actividades / animations
        $("#close_edit").click(function(){
          $("#div_scratch").fadeOut();
          $("#div_educaplay").fadeOut();
          $("#div_learnclick").fadeOut();
          $(".anadir_act1_form").animate({
            top: "100%"
          });
          $("#input_educaplay").val("");
          $("#input_learnclick").val("");
          $("#input_scratch").val("");
          $("#captcha1").val("");
        });
        $(".anadir_act1").click(function(){
          $(".anadir_act1_form").animate({
            top: "0%"
          });
        });
        //selector actividad / activitie selector's
        $("#enviar_act").click(function(){
          var y = $(".select12").val();
          if (y=="nada") {
            alert("Debes de elegir un evento");
          }
          if (y=="scratch_elegir") {
            var datos = $("#form_act").serialize();
            var captcha_input = $("#captcha1").val();
            $.ajax({
              type:"POST",
              url:"validar_captcha.php",
              data:datos,
              beforeSend:function(){
                var d = new Date();
                $("#div_captcha").html("<img src='../captcha.php?key="+ d.getTime() +"' border='0' class='captcha_img1' vspace='3'/>&nbsp;<input type='text' name='code' width='25' required  id='captcha1' maxlength='8'/>");
              },
              success:function(e){
                if (e!=1) {
                  $(".popup_errorcaptchaevento").delay(500).slideDown("slow");
                  $(".popup_errorcaptchaevento").delay(1000).slideUp("slow");
                }else{
                  $.ajax({
                    type:"POST",
                    url:"guardar_scratch.php",
                    data:datos,
                    success:function(a){
                      if (a!=1){
                        $(".popup_errorevento").delay(500).slideDown("slow");
                        $(".popup_errorevento").delay(1000).slideUp("slow");
                      }else{
                        $(".popup_correctoevento").delay(500).slideDown("slow");
                        $(".popup_correctoevento").delay(1000).slideUp("slow");
                        $("#contenedor").load("reload.php");
                        $("#contenedor_scratch").load("reload_scratch.php");
                        $("#contenedor_learnclick").load("reload_learnclick.php");
                      }
                    }
                  });
                }
              }
            });
            return false;
          }
          if (y=="educaplay_elegir") {
            var datos = $("#form_act").serialize();
            var captcha_input = $("#captcha1").val();
            $.ajax({
              type:"POST",
              url:"validar_captcha.php",
              data:datos,
              beforeSend:function(){
                var d = new Date();
                $("#div_captcha").html("<img src='../captcha.php?key="+ d.getTime() +"' border='0' class='captcha_img1' vspace='3' />&nbsp;<input type='text' name='code' width='25' required  id='captcha1' maxlength='8'/>");
              },
              success:function(e){
                if (e!=1) {
                  $(".popup_errorcaptchaevento").delay(500).slideDown("slow");
                  $(".popup_errorcaptchaevento").delay(1000).slideUp("slow");
                }else{
                  $.ajax({
                    type:"POST",
                    url:"guardar_educaplay.php",
                    data:datos,
                    success:function(a){
                      if (a!=1){
                        $(".popup_errorevento").delay(500).slideDown("slow");
                        $(".popup_errorevento").delay(1000).slideUp("slow");
                      }else{
                        $(".popup_correctoevento").delay(500).slideDown("slow");
                        $(".popup_correctoevento").delay(1000).slideUp("slow");
                        $("#contenedor").load("reload.php");
                        $("#contenedor_scratch").load("reload_scratch.php");
                        $("#contenedor_learnclick").load("reload_learnclick.php");
                      }
                    }
                  });
                }
              }
            });
            return false;
          }
          if (y=="learnclick_elegir") {
            var datos = $("#form_act").serialize();
            var captcha_input = $("#captcha1").val();
            $.ajax({
              type:"POST",
              url:"validar_captcha.php",
              data:datos,
              beforeSend:function(){
                var d = new Date();
                $("#div_captcha").html("<img src='../captcha.php?key="+ d.getTime() +"' border='0' class='captcha_img1' vspace='3'/>&nbsp;<input type='text' name='code' width='25' required  id='captcha1' maxlength='8'/>");
              },
              success:function(e){
                if (e!=1) {
                  $(".popup_errorcaptchaevento").delay(500).slideDown("slow");
                  $(".popup_errorcaptchaevento").delay(1000).slideUp("slow");
                }else{
                  $.ajax({
                    type:"POST",
                    url:"guardar_learnclick.php",
                    data:datos,
                    success:function(a){
                      if (a!=1){
                        $(".popup_errorevento").delay(500).slideDown("slow");
                        $(".popup_errorevento").delay(1000).slideUp("slow");
                      }else{
                        $(".popup_correctoevento").delay(500).slideDown("slow");
                        $(".popup_correctoevento").delay(1000).slideUp("slow");
                        $("#contenedor").load("reload.php");
                        $("#contenedor_scratch").load("reload_scratch.php");
                        $("#contenedor_learnclick").load("reload_learnclick.php");
                      }
                    }
                  });
                }
              }
            });
            return false;
          }
        });
        $("#div_scratch").hide();
        $("#div_educaplay").hide();
        $("#div_learnclick").hide();
        $("body").on('click','.select12',function(){
          var x = $(".select12").val();
          if (x=="scratch_elegir") {
            $("#div_scratch").fadeIn("slow");
            $("#div_educaplay").fadeOut();
            $("#div_learnclick").fadeOut();
          }
          if (x=="learnclick_elegir")  {
            $("#div_scratch").fadeOut();
            $("#div_educaplay").fadeOut();
            $("#div_learnclick").fadeIn("slow");
          }
          if (x=="educaplay_elegir") {
            $("#div_scratch").fadeOut();
            $("#div_educaplay").fadeIn("slow");
            $("#div_learnclick").fadeOut();
          }
        });
    /*popup de eventos / eventos popup's*/
        $(".popup_correctoevento").click(function(){
          location.reload();
        });
        $(".popup_errorevento").click(function(){
          location.reload();
        });
        $(".popup_errorcaptchaevento").click(function(){
          location.reload();
        });
        $(".popup_alerta").click(function(){
          location.reload();
        });
        $(".popup_no_existe").click(function(){
          location.reload();
        });
        $(".fa-puzzle-piece").click(function(){
          $("#fondo_popup").show();
          $("#popup_elegir").fadeIn("slow");
          $("html").css("overflow","hidden");
        });
        $(".cerrar").click(function(){
          $("#popup_elegir").fadeOut("slow");
          $("#fondo_popup").hide();
          $("html").css("overflow","auto");
        });
  //Formulario modificación de actividades interactivas / webform for edits interactive activities
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
        url:"../verificar_url.php",
        data:datos,
        success:function(url1){
          if (!url1){
            $(".popup_alerta").delay(500).slideDown("slow");
            $(".popup_alerta").delay(1000).slideUp("slow");
            $(".enlace1").css("background-color","#FA5858");
          }else{
            $.ajax({
              type:"POST",
              url:"../existe_url.php",
              data:datos,
              success:function(existe){
                if (!existe){
                  $(".popup_no_existe").delay(500).slideDown('slow');
                  $(".popup_no_existe").delay(1000).slideUp("slow");
                  $(".enlace1").css("background-color","#FA5858");
                }else{
                    $(".enlace1").css("background-color","#9FF781");
                    $.ajax({
                      type:"POST",
                      url:"../verificar_captcha.php",
                      data:datos,
                      beforeSend:function(){
                        $("#enviar").html("<i class='fa fa-spinner fa-spin'></i>");
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
                                url:"../modificar_fila.php",
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
                }
              }
            })

          }
        }
      });
      return false;
    });
  //Formulario eliminación de actividades interactivas / webform for deletes interactive activities
    $("#enviar_eliminacion").click(function(event) {
      var datos=$('#demo').serialize();
      var fecha2 = $("#data");
      var tipo2 = $("#tipoEventos");
      var otro2 = $("#otroTipoEventos");
      var materia2 = $("#materia");
      var tarea2 = $("#tarea");
      event.preventDefault();
      if($("#fruit1").is(':checked')){
        $.ajax({
          type:"POST",
          url:"../verificar_captcha.php",
          data:datos,
          beforeSend:function(){
            $("#enviar").html("<i class='fa fa-spinner fa-spin'></i>");
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
                    url:"../eliminar_tabla.php",
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
      }else{
        $.ajax({
          type:"POST",
          url:"../verificar_captcha.php",
          data:datos,
          beforeSend:function(){
            $("#enviar").html("<i class='fa fa-spinner fa-spin'></i>");
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
                    url:"../eliminar_fila.php",
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
      }
      return false;
    });

}
