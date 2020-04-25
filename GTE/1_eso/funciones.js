window.onload=function(){
	$("body > div+div").remove();//eliminar el anuncio "alojado en 260MB" / delete ad "alojado en 260MB"
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
    //eventos click en imagenes del curso / Click events for course images
        $(".btn_ESO_1_A").click(function(){
            window.location.href="1A";
        });
        $(".btn_ESO_1_B").click(function(){
            window.location.href="1B";
        });
        $(".btn_ESO_1_C").click(function(){
            window.location.href="1C";
        });
        $(".btn_ESO_1_D").click(function(){
            window.location.href="1D";
        });
        $(".btn_ESO_1_E").click(function(){
            window.location.href="1E";
        });
        $(".btn_ESO_1_F").click(function(){
            window.location.href="1F";
        });
        $(".btn_ESO_1_G").click(function(){
            window.location.href="1G";
        });
    /*actualización de la tabla / table update
    var cambio=null;
    setInterval(function(){
        req=new XMLHttpRequest();
        req.open("POST","tabla/index.php",true);
        req.send();
        req.onreadystatechange=function(){
            if (this.readyState==4 && this.status==200){
                var cambio=req.responseText.toString();
                $("#body+center").html(this.responseText);
            }
        }
    },100);*/
}
