$(document).ready(function(){
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
    //funciones de los botones del mapa / Functions of the map's buttons
        $(".boton_mapa").click(function(){ //map mode
            $("#mapa_sitio").attr("src","imagenes/google_maps.png");
            $("#url").attr("href","imagenes/google_maps.png");
            $("#url_googlemaps").attr("href","https://goo.gl/maps/Z7XrooJ8Tu3XQgmB6");
        });
        $(".boton_satelite").click(function(){ // satellite mode
            $("#mapa_sitio").attr("src","imagenes/google_maps.png");
            $("#url").attr("href","imagenes/google_maps.png");
            $("#url_googlemaps").attr("href","https://goo.gl/maps/t12JQdShHBSoLZeY8");
        });
});