    //funciones de arrastrar y soltar
    $("[id='actividades']").on('mouseenter',function(){
      $("#identificador").text($(this).attr('lang'));
      var ID_2 = $("#identificador").val();
      $(this).addClass(ID_2);
    });       
    $("[id='actividades']").draggable({
      revert: true,
      start:function(event){
        $(this).css({
          "position":"absolute",
          "transform":"scale(0.5)",
          "z-index":"9999"
        });
        $(".div_eliminacion").animate({
          bottom:"0%"
        },700);
        $("[id='actividades']").mouseenter(function(){
          event1 = $("#identificador");
          event1.preventDefault();
        });
      },
      drag:function(){
        $("[id='actividades']").off("mouseenter");
      },
      stop:function(){
        $(".div_eliminacion").animate({
          bottom: "-20%"
        },700);
        $(this).css({
          "position":"relative",
          "z-index":"999",
          "transform":"scale(1)"
        });
        $("[id='actividades']").mouseenter(function(){
          $("#identificador").text($(this).attr('lang'));
        });        
      }
    });
    $(".div_eliminacion").droppable({
      over:function(){
        $(".div_eliminacion").css("background","rgba(237,28,36,0.2)");
        $(".cls-1-tapa").css({
          "position":"absolute",
          "transform":"rotate(20deg) translate(-12px,-47px)"
        });
      },
      out:function(){
        $(".div_eliminacion").css("background","transparent");
        $(".cls-1-tapa").css({
          "position":"absolute",
          "transform":"rotate(0deg) translate(-15px,-24px)"
        });
      },
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop:function(){
        var x = confirm("Quieres eliminar esta actividad?");
        var esto = $("#identificador").val();
        if (x== true) {
          var form = $("#form_identificador").serialize();
          var ID_1 = $("#identificador").val();
          $.ajax({
            type:"POST",
            url:"eliminar_educaplay.php",
            data: form,
            success:function(e){
              if (e!=1) {
                $(".popup_no_eliminado").delay(500).slideDown("slow");
                $(".popup_no_eliminado").delay(1000).slideUp("slow");
              }else{
                $(".popup_eliminado").delay(500).slideDown("slow");
                $(".popup_eliminado").delay(1000).slideUp("slow");
                $(this)
                .addClass("ui-state-highlight")
                .find(".div_eliminacion");
                setTimeout(function(){
                  location.reload();
                },2500);
              }
            }
          });
        }else{
          return false;
        }
      },
      deactivate:function(){
        $(".div_eliminacion").css("background","transparent");
        $(".cls-1-tapa").css({
          "position":"absolute",
          "transform":"rotate(0deg) translate(-15px,-24px)"
        });
      }
    });
    $(".close_popup_educaplay").click(function(){
      $(".popup_educaplay").fadeOut("slow");
    });
    $("#educaplay").click(function(){
      $(".popup_educaplay").fadeIn("slow");
    });
    //Animaciones edicion actividades
    $("#close_edit").click(function(){
      $(".anadir_act1_form").animate({
        top: "100%"
      },500);
      $("#div_scratch").animate({
        left:"-100%"
      },500);
      $("#div_educaplay").animate({
        left:"-100%"
      },500);
      $("#div_learnclick").animate({
        left:"-100%"
      },500);
      $("#enviar_act").animate({
        left:"-5%"
      },500);
      $(".captcha_img1").animate({
        left:"-15%"
      },500);
      $("#captcha1").animate({
        left:"-20%"
      },500);
      $(".select12").animate({
        left:"-9em"
      });
    });
    $(".anadir_act1").click(function(){
      $(".anadir_act1_form").animate({
        top: "0%"
      },500,function(){
        setTimeout(function(){
          $(".select12").animate({
            left:"20em"
          },500);
        },300);
      });
    });
    //selector actividad
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
            $("#div_captcha").html("<img src='captcha.php? "+ d.getTime() +"' border='0' class='captcha_img1' vspace='3' style='left:30%;'/>&nbsp;<input type='text' name='code' width='25' required  id='captcha1' maxlength='8' style='left:46%;'/>");
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
            $("#div_captcha").html("<img src='captcha.php? "+ d.getTime() +"' border='0' class='captcha_img1' vspace='3' style='left:30%;'/>&nbsp;<input type='text' name='code' width='25' required  id='captcha1' maxlength='8' style='left:46%;'/>");
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
            $("#div_captcha").html("<img src='captcha.php? "+ d.getTime() +"' border='0' class='captcha_img1' vspace='3' style='left:30%;'/>&nbsp;<input type='text' name='code' width='25' required  id='captcha1' maxlength='8' style='left:46%;'/>");
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
                  }
                }
              });              
            }
          }
        });
        return false;
      }
    });
    $("#eliminar_todo_educaplay").click(function(){
      var form = $("#form_identificador").serialize();
      $.ajax({
        type:"POST",
        url:"eliminar_todo_educaplay.php",
        data:form,
        success:function(result){
          if (result!=1) {
            $(".popup_no_eliminado").delay(500).slideDown("slow");
            $(".popup_no_eliminado").delay(1000).slideUp("slow");
          }else{
            $("[id='actividades']").animate({
              left: "-102%",
              opacity:"0"
            },1000);
            setTimeout(function(){
              $("[id='actividades']").remove();
            },3000);
            setTimeout(function(){
              $(".popup_eliminado").delay(500).slideDown("slow");
              $(".popup_eliminado").delay(1000).slideUp("slow");               
            },1100);
          }
        }
      });
    });

    $("body").on('click','.select12',function(){
      var x = $(".select12").val();
      if (x=="scratch_elegir") {
        $("#div_scratch").animate({
          left:"30%"
        },500);
        $("#div_educaplay").animate({
          left:"-100%"
        },1);
        $("#div_learnclick").animate({
          left:"-100%"
        },1);
        $("#enviar_act").animate({
          left:"47%"
        },500);
        $(".captcha_img1").animate({
          left:"30%"
        },500);
        $("#captcha1").animate({
          left:"46%"
        },500);
        $("#enviar_act").animate({
          left:"47%"
        },1);
      }
      if (x=="learnclick_elegir")  {
        $("#div_scratch").animate({
          left:"-100%"
        },1);
        $("#div_educaplay").animate({
          left:"-100%"
        },1);
        $("#div_learnclick").animate({
          left:"30%"
        },500);
        $("#enviar_act").animate({
          left:"47%"
        },500);
        $(".captcha_img1").animate({
          left:"30%"
        },500);
        $("#captcha1").animate({
          left:"46%"
        },500);
        $("#enviar_act").animate({
          left:"47%"
        },1);
      }
      if (x=="educaplay_elegir") {
        $("#div_scratch").animate({
          left:"-100%"
        },1);
        $("#div_educaplay").animate({
          left:"30%"
        },500);
        $("#div_learnclick").animate({
          left:"-100%"
        },1);
        $("#enviar_act").animate({
          left:"47%"
        },500);
        $(".captcha_img1").animate({
          left:"30%"
        },500);
        $("#captcha1").animate({
          left:"46%"
        },500);
        $("#enviar_act").animate({
          left:"47%"
        },1);
      }
    });
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
                          $("#divcaptcha").html("<img src='captcha.php?" + d.getTime() + "' class='captcha_img' border='0'/>");
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
    $(".popup_errorevento").click(function(){
      location.reload();
    });
    $(".popup_correctoevento").click(function(){
      location.reload();
    });
    $(".popup_errorcaptchaevento").click(function(){
      location.reload();
    });
    $(".popup_no_existe").click(function(){
      location.reload();
    });
    $(".popup_alerta").click(function(){
      location.reload();
    })