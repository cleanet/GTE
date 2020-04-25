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
}
