
<?php
include "header.php";
?>
<section>
    <h1> Ejercicio 3.1</h1>
<?php

$cadena = "14 de marzo de 1980";
$array = explode("de",$cadena);
echo $array[0];
echo "<br>";
echo $array[1];
echo "<br>";
echo $array[2];
echo "<br>";
?>
</section>

</body>
</html>
