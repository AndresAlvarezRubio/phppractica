
<?php

//include -> el archivo especificado
include "header.php";
?>

<section>
    <h1>Ejercicio 1</h1>

    <?php
    //Frase
    $frase = "Que pasa Peter, vamonos de copas.";

    //Mostrar primera letra
    echo nl2br(mb_substr($frase,0,1));

    //Posición última letra
    $pos_last = nl2br(trim(mb_strrpos($frase,".")-1));

    //Mostrar última letra
    echo nl2br(mb_substr($frase,$pos_last,1));

    ?>
    </section>
</body>
</html>
