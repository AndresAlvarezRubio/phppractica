<?php
include "header.php";
?>
<section>
    <h1> String 2</h1>


    <?php




//Funciones de las cadenas de caracteres
//Conocer la longitud de una cadena
$cadena = "Hola mundo, ¿Cómo estás hoy?";
echo nl2br("La cadena \" $cadena \" tiene una longitud de " . mb_strlen($cadena) . " caracteres. \n");



//Mostrar los 12 primeros caracteres de la cadena
echo nl2br("\nLos primeros 12 caracteres '" . mb_substr($cadena, 0, 12) . "'");



//convertir la cadena en un array, le tengo que indicar el delimitado, en nuestro ejemplo ","
$array = explode(",",$cadena);
echo "<br>";
echo $array[0];
echo "<br>";
echo $array[1];
echo "<br>";



//reemplazar cadena por otra
echo substr_replace($cadena, "Este es el reemplazo de la cadena" , 12);
echo "<br>";



//reemplazar todas las ocurrencias buscadas por otra
echo str_replace("s", "Manolo Lama" , $cadena);
echo "<br>";



//Mostrar la primera posición de lo que se busque en el texto
echo mb_strpos($cadena, "o");
echo "<br>";



//Mostrar la último posición de lo que se busque en el texto
echo mb_strrpos($cadena, "o");
echo "<br>";



//ucfirst cambia la primera letra de una cadena a mayúscula
$nombre = "andres alvarez";
$array_nombre = explode(" ",$nombre);

echo "El nombre original es $nombre, pero con la función ucfirst cambia a " . ucfirst($array_nombre[0]) . " ". ucfirst($array_nombre[1]);
echo "<br>";
//Otra manera:
echo ucwords($nombre);
echo "<br>";



//Quitar los espacios de derecha e izquierda
$manitoTengoHambre = " hola que tal ";
echo trim($manitoTengoHambre);
echo "<br>";



//Convertir cadena a minúsculas
$manitoToyEnfadao = "ESTOY MUY TRANQUILO";
echo mb_strtolower($manitoToyEnfadao);
echo "<br>";



//Convertir cadena a mayúsculas
$manitoToyTranqui = "estoy muy enfadado, eh";
echo mb_strtoupper($manitoToyTranqui);
echo "<br>";



//necesitas crear una cadena encriptada MD5 -> WordPress -> Hash (hash significa encriptar algo)
$password = 'Mi$ifu2024#';
echo "La contraseña $password en MD5 es " . md5($password);
echo "<br>";
//también se puede convertir en sha1 que es otro tipo de encriptación
echo "La contraseña $password en SHA1 es " . sha1($password);
echo "<br>";



//strstr es para conseguir la parte del array después del primer elemento buscado encontrado
$textoRandom = 'Hola que pasa loco esto es un video tutorial jajjajaa ';
echo strstr($textoRandom, "t");
echo "<br>";



//strstr es para conseguir la parte del array después del último elemento buscado encontrado
$textoRandom = 'Hola que pasa loco esto es un video tutorial jajjajaa ';
echo strrchr($textoRandom, "t");
echo "<br>";





?>
</section>

</body>
</html>
