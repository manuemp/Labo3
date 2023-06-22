    <?php
        if(isset($_POST["encriptacion"]))
        {
            $claveEncriptadamd5 = md5($_POST["encriptacion"]);
            $claveEncriptadaSha = sha1($_POST["encriptacion"]);
            echo "Clave sin encriptar: " . $_POST["encriptacion"] . "<br>";
            echo "Clave encriptada en md5 (128 bits o 16 pares hexadecimales): <br> $claveEncriptadamd5 <br>";
            echo "Clave encriptada en sha1 (160 bits o 20 pares hexadecimales): <br> $claveEncriptadaSha <br>";
        }
        else
        {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Encriptado</title>
</head>
<body>
    <form action="./index.php" method="post">
        <label for="encriptacion">Ingrese texto a encriptar: </label>
        <input type="text" id="encriptacion" name="encriptacion"><br>
        <input type="submit" value="Encriptar">
    </form>


    
</body>
</html>

    <?php
        }
    ?>