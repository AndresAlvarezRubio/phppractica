<?php
    include "header.php";
?>
<section>
    <h1> String 1</h1>

    <?php
/**
 * Las comillas dobles muestran variables, cadenas y caracteres especiales
 *
 * La función nl2br(tuCadena) hace salto de línea en HTML
 */

// 1 ejemplo, echo sin nl2br
echo "Ejemplo del salto de línea con el código de escape \\n no se ejecuta sin el ln2br \n";
echo "Aquí otro texto";


// 2 ejemplo, echo con nl2br
echo nl2br("\nejemplo del salto con el \\n\n FIAUNNNN, ves? lo hisiste!\n");


// 3 ejemplo, echo con nl2br y comillas simples
$variable = "Content";
echo nl2br('El \'$variable puede tener un texto \' que no muestra, sino su identificado');


// 4 ejemplo, echo con nl2br y comillas dobles
echo nl2br("\nAquí si que muestra la variable: $variable");

// 5 ejemplo, El html se muestra tanto con comillas simples y comillas dobles
echo '<br>El párrafo tiene <strong>tiene moito líneas</strong> en el código HTML';
echo "<br>El párrafo tiene <strong>tiene mushas líneas</strong> en el código HTML";

/**********************************************************************************
 * Resumen de Códigos de escape
 *  \n -> Salto de línea
 *  \" -> Muestra la comilla en el string de comillas dobles
 *  \' -> Muestra la comilla en el string de comillas simples
 *  \t -> Tabulación
 *  \\ -> Muestra \
 **********************************************************************************/


?>
</section>
</body>
</html>
