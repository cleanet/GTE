window.onload=function(){
	$("body > div+div").remove();
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