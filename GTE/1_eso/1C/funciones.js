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
  //EDUCAPLAY
	    $("#educaplay").click(function(){
	      $("#popup_educaplay").fadeIn("slow");
	    });    
	    $(".close_popup_educaplay").click(function(){
	      $("#popup_educaplay").fadeOut("slow");
	    });
  //
  //LEARNCLICK
	    $("#learnclick").click(function(){
	      $("#popup_learnclick").fadeIn("slow");
	    });    
	    $(".close_popup_learnclick").click(function(){
	      $("#popup_learnclick").fadeOut("slow");
	    });
  //
  //SCRATCH
	    $("#scratch").click(function(){
	      $("#popup_scratch").fadeIn("slow");
	    });    
	    $(".close_popup_scratch").click(function(){
	      $("#popup_scratch").fadeOut("slow");
	    });
  //
}