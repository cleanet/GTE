window.onload=function(){
  //movil
    if (window.matchMedia("(max-width:600px)").matches){
      $(".light_sky").click(function(){
        $.ajax({
          type:'POST',
          url:'functions.php',
          data:'func=getEvents&date='+date,
          success:function(html){
            $('#event_list').html(html);
            $('#event_list').slideDown('slow');
          }
        });
      });
    }
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
    //al hacer hover por las celdas, se inserta su fecha en un input oculto / When doing hover in the calendar cells', it gets the date and adds it in the input hide's
      $("body").on("mouseenter","#calendario td[data-fecha]", function(){
        $("#seleccionar_fecha").text($(this).attr("data-fecha"));
      });
    //Esconder menu contextual / To hide contextmenu
      $(".context").hide();
    //Al salir de la celda esconder el menu contextual / When doing leave of the cell, the context menu hiding
      $("body").on("mouseleave","#calendario td[data-fecha]",function(){
        $(".context").hide();
      });
    //mostrar menu contextual / To show contextmenu
      $("body").on("mouseenter",".context",function(){
        $(".context").show();
      });
      $("body").on('contextmenu','#calendario td[data-fecha]',function(event){
        event.preventDefault();
        $(".context").css({"top": event.clientY + "px", "left": event.clientX + "px"}).show();
      });
    //funciones del menu contextual / functions contextmenu
      $("body").on('click', '#calendario td[data-fecha]', function(){
        var select_elegir = $("#tipoEventos").val();
        if (select_elegir=="Vacaciones_de_Pascua") {
          $("#form_fecha").hide();
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"guardar_vacaciones_pascua.php",
            data:fecha,
            success:function(a){
              if (a==1) {
                $("#correcto_insertar").animate({
                  top:"2%"
                },500);
                $("#correcto_insertar").delay(1000);
                $("#correcto_insertar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_insertar").animate({
                  top:"2%"
                },500);
                $("#error_insertar").delay(1000);
                $("#error_insertar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="Vacaciones_de_Navidad") {
          $("#form_fecha").hide();
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"guardar_vacaciones_navidad.php",
            data:fecha,
            success:function(b){
              if (b==1) {
                $("#correcto_insertar").animate({
                  top:"2%"
                },500);
                $("#correcto_insertar").delay(1000);
                $("#correcto_insertar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_insertar").animate({
                  top:"2%"
                },500);
                $("#error_insertar").delay(1000);
                $("#error_insertar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="Dias_festivos") {
          $("#form_fecha").hide();
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"guardar_festivos.php",
            data:fecha,
            success:function(c){
              if (c==1) {
                $("#correcto_insertar").animate({
                  top:"2%"
                },500);
                $("#correcto_insertar").delay(1000);
                $("#correcto_insertar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_insertar").animate({
                  top:"2%"
                },500);
                $("#error_insertar").delay(1000);
                $("#error_insertar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="inicio_de_curso") {
          $("#form_fecha").hide();
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"guardar_inicio_curso1.php",
            data:fecha,
            success:function(d){
              if (d==1) {
                $("#correcto_insertar").animate({
                  top:"2%"
                },500);
                $("#correcto_insertar").delay(1000);
                $("#correcto_insertar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_insertar").animate({
                  top:"2%"
                },500);
                $("#error_insertar").delay(1000);
                $("#error_insertar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="editar") {
          alert("Tienes que elegir un evento para editar");
        }
      });
      $("body").on('click','#calendario td[data-evento]', function(){
        return false;
      });
      $(".opcion1").click(function(){
        var select_elegir = $("#tipoEventos").val();
        if (select_elegir=="Vacaciones_de_Pascua") {
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"eliminar_vacaciones_pascua.php",
            data:fecha,
            success:function(a){
              if (a==1) {
                $("#correcto_eliminar").animate({
                  top:"2%"
                },500);
                $("#correcto_eliminar").delay(1000);
                $("#correcto_eliminar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_eliminar").animate({
                  top:"2%"
                },500);
                $("#error_eliminar").delay(1000);
                $("#error_eliminar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="Vacaciones_de_Navidad") {
          $("#form_fecha").hide();
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"eliminar_vacaciones_navidad.php",
            data:fecha,
            success:function(b){
              if (b==1) {
                $("#correcto_eliminar").animate({
                  top:"2%"
                },500);
                $("#correcto_eliminar").delay(1000);
                $("#correcto_eliminar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_eliminar").animate({
                  top:"2%"
                },500);
                $("#error_eliminar").delay(1000);
                $("#error_eliminar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="Dias_festivos") {
          $("#form_fecha").hide();
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"eliminar_dias_festivos.php",
            data:fecha,
            success:function(c){
              if (c==1) {
                $("#correcto_eliminar").animate({
                  top:"2%"
                },500);
                $("#correcto_eliminar").delay(1000);
                $("#correcto_eliminar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_eliminar").animate({
                  top:"2%"
                },500);
                $("#error_eliminar").delay(1000);
                $("#error_eliminar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="inicio_de_curso") {
          $("#form_fecha").hide();
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"eliminar_inicio_curso1.php",
            data:fecha,
            success:function(d){
              if (d==1) {
                $("#correcto_eliminar").animate({
                  top:"2%"
                },500);
                $("#correcto_eliminar").delay(1000);
                $("#correcto_eliminar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_eliminar").animate({
                  top:"2%"
                },500);
                $("#error_eliminar").delay(1000);
                $("#error_eliminar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="editar") {
          alert("Tienes que elegir un evento para editar");
        }
      });
      $(".opcion2").click(function(){
        var select_elegir = $("#tipoEventos").val();
        if (select_elegir=="Vacaciones_de_Pascua") {
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"eliminar_todo_vacaciones_pascua.php",
            data:fecha,
            success:function(a){
              if (a==1) {
                $("#correcto_eliminar").animate({
                  top:"2%"
                },500);
                $("#correcto_eliminar").delay(1000);
                $("#correcto_eliminar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_eliminar").animate({
                  top:"2%"
                },500);
                $("#error_eliminar").delay(1000);
                $("#error_eliminar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="Vacaciones_de_Navidad") {
          $("#form_fecha").hide();
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"eliminar_todo_vacaciones_navidad.php",
            data:fecha,
            success:function(b){
              if (b==1) {
                $("#correcto_eliminar").animate({
                  top:"2%"
                },500);
                $("#correcto_eliminar").delay(1000);
                $("#correcto_eliminar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_eliminar").animate({
                  top:"2%"
                },500);
                $("#error_eliminar").delay(1000);
                $("#error_eliminar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="Dias_festivos") {
          $("#form_fecha").hide();
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"eliminar_todo_dias_festivos.php",
            data:fecha,
            success:function(c){
              if (c==1) {
                $("#correcto_eliminar").animate({
                  top:"2%"
                },500);
                $("#correcto_eliminar").delay(1000);
                $("#correcto_eliminar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_eliminar").animate({
                  top:"2%"
                },500);
                $("#error_eliminar").delay(1000);
                $("#error_eliminar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="inicio_de_curso") {
          $("#form_fecha").hide();
          var fecha = $("#form_fecha").serialize();
          var celda = $(this).attr('id');
          $.ajax({
            type:"POST",
            url:"eliminar_todo_inicio_curso1.php",
            data:fecha,
            success:function(d){
              if (d==1) {
                $("#correcto_eliminar").animate({
                  top:"2%"
                },500);
                $("#correcto_eliminar").delay(1000);
                $("#correcto_eliminar").animate({
                  top:"-15%"
                },500);
              }else{
                $("#error_eliminar").animate({
                  top:"2%"
                },500);
                $("#error_eliminar").delay(1000);
                $("#error_eliminar").animate({
                  top:"-15%"
                },500);
              }
            }
          });
          return false;
        }
        if (select_elegir=="editar") {
          alert("Tienes que elegir un evento para editar");
        }
      });
      $(".opcion3").click(function(){
        var fecha = $("#form_fecha").serialize();
        $.ajax({
          type:"POST",
          url:"eliminar_todo_vacaciones_navidad.php",
          data:fecha,
          success:function(x){
            if (x==1) {
              var fecha = $("#form_fecha").serialize();
              $.ajax({
                type:"POST",
                url:"eliminar_todo_inicio_curso1.php",
                data:fecha,
                success:function(y){
                  if (y==1) {
                    var fecha = $("#form_fecha").serialize();
                    $.ajax({
                      type:"POST",
                      url:"eliminar_todo_vacaciones_pascua.php",
                      data:fecha,
                      success:function(z){
                        if (z==1) {
                          var fecha = $("#form_fecha").serialize();
                          $.ajax({
                            type:"POST",
                            url:"eliminar_todo_dias_festivos.php",
                            data:fecha,
                            success:function(){

                            }
                          });
                        }
                      }
                    });
                  }
                }
              });
            }
          }
        }).done(function(){
            $("#correcto_eliminar").animate({
              top:"2%"
            },500);
            $("#correcto_eliminar").delay(1000);
            $("#correcto_eliminar").animate({
              top:"-15%"
            },500);
        }).fail(function(){
            $("#error_eliminar").animate({
              top:"2%"
            },500);
            $("#error_eliminar").delay(1000);
            $("#error_eliminar").animate({
              top:"-15%"
            },500);
        });
      });
}
