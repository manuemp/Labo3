<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" content-type="text/html">
    <title>Document</title>
    <style>
        .resaltado
        {
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Todo lo escrito fuera de las marcas de php es entregado en la respuesta http sin pasar por el procesador php</h2>
    <hr>
    <?php
        $variable1 = 100;
        $variable2 = true;
        $variable3 = false;
        $arrayPalabras = ["Hola", "Hello"];
        $arrayPalabras2 = ["Fútbol", "Football", "Calcio", "Football"];
        $arrayPalabras3 = ["Música", "Music", "Musica", "Musique"];
        define("CONSTANTE", "Manuel");

        echo "<h2>Texto <span class='resaltado'>entregado por el procesador php</span> usando la sentencia echo</h2>";
        echo "<hr>";
        echo "<h2>Sin usar concatenador <span class='resaltado'>\$miVariable</span>: $variable1</h2>";
        echo "<h2>Usando concatenador <span class='resaltado'>\$miVariable</span>: " . $variable1 . "</h2>" ;
        echo "<hr>";
        echo "<h2>Variable tipo lógica o booleana (verdadero) <span class='resaltado'>\$variable2</span>: $variable2</h2>";
        echo "<h2>Variable tipo lógica o booleana (falso) <span class='resaltado'>\$variable2</span>: $variable3</h2>";
        echo "<hr>";
        echo "<h2><span class='resaltado'>CONSTANTE</span>: " . CONSTANTE . "</h2>";
        echo "<h2>Tipo de <span class='resaltado'>CONSTANTE</span>: " . gettype(CONSTANTE) . "</h2>";
        echo "<hr>";
        echo "<h2>Arreglos:</h2>";
        echo "<h2><span class='resaltado'>arrayPalabras</span>: $arrayPalabras[0] </h2>";
        echo "<h2><span class='resaltado'>arrayPalabras</span>: $arrayPalabras[1] </h2>";
        echo "<h2>Tipo de dato de <span class='resaltado'>arrayPalabras</span>: " . gettype($arrayPalabras) . "</h2>";
        echo "<h2>Se agregan por programa dos palabras: </h2>";
        array_push($arrayPalabras, "Buon Giorno");
        array_push($arrayPalabras, "Bonjour");
        echo "<ul>";
        foreach($arrayPalabras as $palabra)
        {
            echo "<li><h3>$palabra</h3></li>";
        }
        echo "</ul>";
        echo "<hr>";
        echo "<h2>Arreglo de dos dimensiones (diccionario): </h2>";
        
        $diccionario = [$arrayPalabras, $arrayPalabras2];
        array_push($diccionario, $arrayPalabras3);

        echo "<h2>Tipo de <span class='resaltado'>\$diccionario</span>: " . gettype($diccionario) . "</h2>";
        echo "<table><thead><td>Español</td><td>Inglés</td><td>Italiano</td><td>Francés</td>";
        foreach($diccionario as $array)
        {
            echo "<tr>";
            foreach($array as $palabra)
            {
                echo "<td>$palabra</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<h2>También así se puede expresar el valor de <span class='resaltado'>\$diccionario[0][3]</span>: ". $diccionario[0][3] ."</h2>"; 
        echo "<h2>Cantidad de elementos del diccionario: " . count($diccionario) . "</h2>";
        echo "<hr>";
        echo "<h2>Variables tipo arreglo asociativo: </h2>";

        $arrayAsociativo = ["DNI" => "40742089", "Nombre" => "Manuel", "Apellido" => "Pedro", "Fecha Nacimiento" => "10/4/1998"];
        echo "<h2>DNI: " . $arrayAsociativo["DNI"] . "</h2>"; 
        echo "<h2>Nombre: " . $arrayAsociativo["Nombre"] . "</h2>"; 
        echo "<h2>Apellido: " . $arrayAsociativo["Apellido"] . "</h2>"; 
        echo "<h2>Fecha de Nacimiento: " . $arrayAsociativo["Fecha Nacimiento"] . "</h2>"; 
        echo "<h2>Cantidad de elementos ". count($arrayAsociativo) ."</h2>";
        echo "<h2>Tipo de dato: ". gettype($arrayAsociativo) ."</h2>";
        echo "<hr>";

        $x = 20;
        $y = 5;

        echo "<h2>Expresiones aritméticas: </h2>";
        echo "<h2>La variable \$x tiene el siguiente valor: </h2>";
        echo "<h2>La variable \$y tiene el siguiente valor: </h2>";
        echo "<h2>La variable \$x es del tipo: </h2>";
        echo "<h2>La variable \$y es del tipo:</h2>";
        echo "<h2>Así se imprime una expresión aritmética de tipo suma: (\$x + \$y) = " . ($x+$y) . "</h2>";
        echo "<h2>Así se imprime una expresión aritmética de tipo resta: (\$x - \$y) = " . ($x-$y) . "</h2>";
        echo "<h2>Así se imprime una expresión aritmética de tipo división: (\$x / \$y) = " . ($x/$y) . "</h2>";

    ?>
</body>
</html>