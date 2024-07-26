 <?php
 include "header.php";
 ?>

<section>
 <h1> Ejercicio 2</h1>

<?php


$hoy = date("d-m-Y");
 echo "Hoy es $hoy <br>";

 $ayer = date("d-m-Y",strtotime("-1 day"));
 echo "Ayer fue $ayer <br>";

 $maniana = date("d-m-Y",strtotime("+1 day"));
 echo "Mañana será $maniana <br>";

 $mesSiguiente = date("d-m-Y",strtotime("+1 month"));
 echo "En un mes será $mesSiguiente <br>";

 $anios5 = date("d-m-Y",strtotime("+5 year"));
 echo "En 5 años será $anios5 <br>";
?>
</section>
</body>
</html>
