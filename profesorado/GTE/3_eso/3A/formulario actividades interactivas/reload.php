  <script>
    $(document).ready(cargarproductos(0));
    function cargarproductos(limite){
      var url = "educaplay.php";
      $.post(url,{limite:limite},function(responseText){
        $("#contenedor").html(responseText);
      });
    }
  </script>