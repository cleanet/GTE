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
	//movil / mobile
		if (window.matchMedia("(max-width:600px)").matches) {
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
    $(".fa-puzzle-piece ").click(function(){
      $("#fondo_popup").show();
      $("#popup_elegir").fadeIn("slow");
      $("html").css("overflow","hidden");
    });
    $(".cerrar").click(function(){
      $("#popup_elegir").fadeOut("slow");
      $("#fondo_popup").hide();
      $("html").css("overflow","auto");
    });
  //EDUCAPLAY
    $("#educaplay").click(function(){
      $("#popup_educaplay").fadeIn("slow");
    });    
    $(".close_popup_educaplay").click(function(){
      $("#popup_educaplay").fadeOut("slow");
    });
  //LEARNCLICK
    $("#learnclick").click(function(){
      $("#popup_learnclick").fadeIn("slow");
    });    
    $(".close_popup_learnclick").click(function(){
      $("#popup_learnclick").fadeOut("slow");
    });
  //SCRATCH
    $("#scratch").click(function(){
      $("#popup_scratch").fadeIn("slow");
    });    
    $(".close_popup_scratch").click(function(){
      $("#popup_scratch").fadeOut("slow");
    });
  //paginación de actividades interactivas / intective activities pagination
    //educaplay
      $(document).ready(cargarproductos(0));
      function cargarproductos(limite){
        var url = "educaplay.php";
        $.post(url,{limite:limite},function(responseText){
          $("#contenedor").html(responseText);
        });
      }
    //learnclick
      $(document).ready(cargarproductos_learnclick(0));
      function cargarproductos_learnclick(limite){
        var url = "learnclick.php";
        $.post(url,{limite:limite},function(responseText){
          $("#contenedor_learnclick").html(responseText);
        });
      }
    //scratch
      $(document).ready(cargarproductos_scratch(0));
      function cargarproductos_scratch(limite){
        var url =  "scratch.php";
        $.post(url,{limite:limite},function(responseText){
          $("#contenedor_scratch").html(responseText);
        })
      }
  //
  //Calendario / Calendario
    //mes anterior / Previous Month
      $(document).on("click","#calendario > thead > tr:first-child > td:first-child i",function(){
        mes_anterior=$(this).attr("data-mes-anterior");
        array_mes_anterior=mes_anterior.split("-");
        mes=array_mes_anterior[0];
        ano=array_mes_anterior[1];
        $.ajax({
          type:"GET",
          url:"calendario/calendar.php",
          data:"ano="+ano+"&mes="+mes,
          success:function(resp){
            $("#calendario_div").html(resp);
          }
        });
        num=0;
      });
    //mes posterior / following month
      $(document).on("click","#calendario > thead > tr:first-child > td:last-child .fa-mail-forward",function(){
        mes_posterior=$(this).attr("data-mes-posterior");
        array_mes_posterior=mes_posterior.split("-");
        mes=array_mes_posterior[0];
        ano=array_mes_posterior[1];
        $.ajax({
          type:"GET",
          url:"calendario/calendar.php",
          data:"ano="+ano+"&mes="+mes,
          success:function(resp){
            $("#calendario_div").html(resp);
          }
        });
        num=0;
      });
    //Funcion al hacer click en el selector del año / Function click of the year's selector
      $(document).on("click","#calendario thead tr:first-child td:first-child ul li",function(){
        ano=$("#calendario thead tr:first-child td:first-child ul li:hover").attr("value");
        mes_texto=$("#calendario thead tr:first-child td:first-child+td ul li[selected]").attr("value");
        mes=parseInt(mes_texto)+1;
        $.ajax({
          type:"GET",
          url:"calendario/calendar.php",
          data:"ano="+ano+"&mes="+mes,
          success:function(resp){
            $("#calendario_div").html(resp);
          }
        });
        num=0;
      });
    //Funcion al hacer click en el selector del mes / Function click of the month's selector
      $(document).on("click","#calendario thead tr:first-child td:first-child+td ul li",function(){
        ano=$("#calendario thead tr:first-child td:first-child ul li[selected]").attr("value");
        mes_texto=$("#calendario thead tr:first-child td:first-child+td ul li:hover").attr("value");
        mes=parseInt(mes_texto)+1;
        $.ajax({
          type:"GET",
          url:"calendario/calendar.php",
          data:"ano="+ano+"&mes="+mes,
          success:function(resp){
            $("#calendario_div").html(resp);
          }
        });
        num=0;
      });
    //volver al dia de hoy / back to today
      $(document).on("click","#calendario_div > table > thead > tr:first-child > td:last-child .fa-calendar-o",function(){
        hoy=$("#calendario").attr("data-fecha-actual");
        array_hoy=hoy.split("-");
        ano=array_hoy[0];
        mes=array_hoy[1];
        $.ajax({
          type:"GET",
          url:"calendario/calendar.php",
          data:"ano="+ano+"&mes="+mes,
          success:function(resp){
            $("#calendario_div").html(resp);
          }
        });
      });
    //Funciones popup / Popup's functions
      $(document).on("click","#calendario tbody tr td > div > div .fa-hand-o-left",function(e){
        e.stopPropagation();
        $(this).parent().parent().fadeOut("slow");
      });
      $(document).on("click","#calendario tbody tr td",function(){
        if ($("#calendario tbody tr td:hover div > div").length) {
          $("#calendario tbody tr td:hover> div").fadeIn("slow");
        }
      });
    //funciones li / li's functions
      $(document).on("click","#calendario thead tr:first-child td:first-child span",function(){
        $("#calendario thead tr:first-child td:first-child ul").css("display","grid");
        $("#calendario thead tr:first-child td:nth-child(2) ul").slideUp("fast");
      });
      $(document).on("click","#calendario thead tr:first-child td:nth-child(2) span",function(){
        $("#calendario thead tr:first-child td:nth-child(2) ul").css("display","grid");
        $("#calendario thead tr:first-child td:first-child ul").slideUp("fast");
      });
    $(document).on("click","#calendario thead tr ul, #calendario thead tr span",function(e){
      e.stopPropagation();
    });
    $(document).on("click","body",function(){
      $("#calendario ul").slideUp("fast");
    });
    var num=0;
    /*al hacer click en los eventos si el número de eventos es mayor que 1, añadir las flechas de navegación / to the click
    the events, if the events number is greater than 1, add navegation arrows inside of the popup*/
      $(document).on("click","#calendario tbody td[data-num-eventos]",function(){
        if (num==0) {
          $("#calendario tbody tr td[data-num-eventos] > div > div[data-num]").append("<i class='fa fa-caret-left'></i><i class='fa fa-caret-right'></i>");
          num+=1;
        }
      });
    $(document).on("mouseenter","#calendario tbody td div div",function(){
      $(this).attr("id","actual");
    });
    $(document).on("mouseleave","#calendario tbody td div div",function(){
      $(this).removeAttr("id");
    });
    /*al abrir el popup ocultar todos los divs menos el primero, al navegar se ocultarán todos los divs menos el valor de la variable index/ 
    To the open the popup, it hides all the div less the first. If you are navigating, the divs they hide, less, the index of the div with the valor of the `index` variable*/
      index=1;//indice por defecto es 1, si es mayor significa que estas navegando / the variable is 1, if it is greater than 1, it means your navigating*/
      $(document).on("mouseenter","#calendario tbody td",function(){
        if (index==1) {
          $("#calendario tbody td[data-num-eventos] > div > div").hide();
          $("#calendario tbody td[data-num-eventos] > div > div:first").show();
        }else{ 
          $("#calendario tbody td[data-num-eventos] > div > div").hide();
          $("#calendario tbody td[data-num-eventos] > div > div[data-num='"+index+"']").show();
        }
      });
    //al retroceder un mes, decrementa el valor / to the to come back one previous month, the valor of the `index` variable decrements
      $(document).on("click","#calendario tbody td[data-num-eventos] #actual .fa-caret-left",function(){
        index=$(this).parent().index();
        $("#calendario tbody td[data-num-eventos] > div > div[data-num='"+index+"']").fadeOut("fast");
        index--;
        if (index<1) {
          index=1;
          $("#calendario tbody td[data-num-eventos] > div > div[data-num='1']").fadeIn("fast");
        }else{
          $("#calendario tbody td[data-num-eventos] > div > div[data-num='"+index+"']").fadeIn("fast");
        }
      });
    //Al ir un mes posterior, incrementa el valor / to the following one month, the valor of the `index` variable increments
      $(document).on("click","#calendario tbody td[data-num-eventos] #actual .fa-caret-right",function(){
        index=$(this).parent().index();
        index++;
        lon=$("#calendario tbody td[data-num-eventos]:hover div > div[data-num]").length;
        if (index > lon) {
          index-=1;
        }else{
          $("#calendario tbody td[data-num-eventos] > div > div[data-num='"+index+"']").fadeIn("fast");
        }
      });
}