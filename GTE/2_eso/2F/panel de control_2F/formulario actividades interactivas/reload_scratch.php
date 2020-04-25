  <script>
    $(document).ready(cargarproductos_scratch(0));
    function cargarproductos(limite){
      var url = "scratch.php";
      $.post(url,{limite:limite},function(responseText){
        $("#contenedor_scratch").html(responseText);
      });
    }
  </script>