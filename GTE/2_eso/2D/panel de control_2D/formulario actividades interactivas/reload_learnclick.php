  <script>
    $(document).ready(cargarproductos_learnclick(0));
    function cargarproductos(limite){
      var url = "learnclick.php";
      $.post(url,{limite:limite},function(responseText){
        $("#contenedor_learnclick").html(responseText);
      });
    }
  </script>