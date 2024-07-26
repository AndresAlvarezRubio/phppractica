
<?php
//include -> el archivo especificado
include "header.php";
?>
<section>
    <h1>Fecha</h1>
    <?php

    echo "Fecha de hoy -> " . date("l m-Y");
    echo "<br>";
    echo "Fecha y hora actual -> " . date("d/m/y -\t H:i:s");
    echo "<br>";


    //Establecer la configuración regional de España
    setLocale(LC_TIME, 'es_ES.UTF-8');

    //Mostrar la fecha actual con el nuevo formato
    echo strftime("%A, %d de %B de %Y");
    echo "<br>";

    //Construir una feche desde datos del usuario.
    $dia="25";
    $mes="04";
    $anio="2023";
    $fecha = mktime(null, null, null, $mes, $dia, $anio);
    echo date("d-m-Y", $fecha);
    echo "<br>";

    //Ejemplo de calcular los días restantes para acabar el año
    $hoy = date_create(date("m/d/Y")); //fecha actual
    $finAnio = date_create("12/31/2024");
    $diferencia = date_diff($hoy, $finAnio);
    $diasQueFaltan = $diferencia->format("%a");
    echo $diasQueFaltan;

    echo "<br>";
    $inicioAnio = date_create("01/01/2024");
    $diferencia = date_diff($inicioAnio, $hoy);
    $diasTranscurridos = $diferencia->format("%R%a dias");
    echo $diasTranscurridos;









    ?>
    </section>
</body>
</html>
