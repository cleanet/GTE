  $(document).ready(function(){
    //Función menu fijo al hacer scroll / A function of fixed menu when it do scroll the website
        var altura = $('.menu').offset().top;
        $(window).on('scroll', function(){
            if ( $(window).scrollTop() > altura ){
                $('.menu').addClass('menu-fixed');
            } else {
                $('.menu').removeClass('menu-fixed');
            }
        });
  });