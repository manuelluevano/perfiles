<footer>

</footer>


<!-- Add your site or application content here -->
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>   
<script src="js/main.js"></script>
<script src="https://kit.fontawesome.com/04730c9c8a.js" crossorigin="anonymous"></script>

  <!--  FUNCION CONDICIONAL PARA CARGAGR ARCHIVOS DE ESTILO CUANDO ES NECESARIO Y MEJORAR EL PERFORMANCE DEL SITIO  -->  

  <?php

      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);

      if($pagina == 'index'){
        echo '  <script src="js/jquery.agecheck.js"></script>  ';
      }else if($pagina == ''){
        echo '';
      }

  ?>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>