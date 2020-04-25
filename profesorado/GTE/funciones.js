window.onload=function(){
    var altura = $('.menu').offset().top;
    $(window).on('scroll', function(){
        if ( $(window).scrollTop() > altura ){
            $('.menu').addClass('menu-fixed');
        } else {
            $('.menu').removeClass('menu-fixed');
        }
    });
   	$(".btn_ESO_1_eso").click(function(){
   		window.location.href="1_eso";
   	});
   	$(".btn_ESO_2_eso").click(function(){
   		window.location.href="2_eso";
   	});
   	$(".btn_ESO_3_eso").click(function(){
   		window.location.href="3_eso";
   	});
   	$(".btn_ESO_4_eso").click(function(){
   		window.location.href="4_eso";
   	});
    //Vaciar DBs / DBs empty
    $(".fa-calendar-times-o").click(function(){
      confirmacion=confirm("¿Está seguro que quiere vaciar todos los calendarios y actividades de cada clase?");
      if (confirmacion==true) {
        resultado=0;
        $.ajax({
          type:"POST",
          url:"eliminar_DBs.php",
          data:"",
          success:function(res){
            if (res!="1") {
              intento=confirm("Se produjo un error, ¿Volver a intentarlo?");
              if (intento==true) {
                  return true;
              }
            }else{
              alert("Datos eliminados correctamente");
            }
          }
        });
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
}
