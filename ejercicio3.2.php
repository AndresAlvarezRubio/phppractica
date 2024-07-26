<?php

//include -> el archivo especificado
include "header.php";
?>
<section>
    <h1> Ejercicio 3.2</h1>
<?php


//Variables
$cadena = "14 de marzo de 1980";
$posicionDe1 = mb_strpos($cadena, "de");
$posicionDe2 = mb_strrpos($cadena, "de");

echo "<br>";

echo nl2br("Día: " . mb_substr($cadena, 0, $posicionDe1)-1 . "<br>");
echo nl2br("Mes: " . mb_substr($cadena, $posicionDe1 + 2, $posicionDe2 - $posicionDe1-3) . "<br>");
echo nl2br("Año: " . mb_substr($cadena, $posicionDe2 + 2));

?>
</section>
</body>
</html>
