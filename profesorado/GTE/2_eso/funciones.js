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
        //eventos click del portal de clases / events clicks of classes portal
        $(".btn_ESO_2_A").click(function(){
            window.location.href="2A";
        });
        $(".btn_ESO_2_B").click(function(){
            window.location.href="2B";
        });
        $(".btn_ESO_2_C").click(function(){
            window.location.href="2C";
        });
        $(".btn_ESO_2_D").click(function(){
            window.location.href="2D";
        });
        $(".btn_ESO_2_E").click(function(){
            window.location.href="2E";
        });
        $(".btn_ESO_2_F").click(function(){
            window.location.href="2F";
        });
    /*actualización de la tabla / table update
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
