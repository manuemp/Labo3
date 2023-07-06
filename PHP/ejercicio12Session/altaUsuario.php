<?php 

    include("../verificacion.php");

    $dbname = "bqaqedrgszmaxzzry3xb";
    $host= "bqaqedrgszmaxzzry3xb-mysql.services.clever-cloud.com";
    $user= "ussg4ckvxuovpsxj";
    $password= "DzvwoTvBsMNPFIDxncts";
    $respuesta_estado = "";

    try
    {
        $dsn = "mysql:host=$host;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $password);
        $usuario = $_POST["username"];
        $pass = md5($_POST["pass"]);

        $sql = "INSERT INTO Usuarios (Usuario, Pass) VALUES (:user, :pass)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':user', $usuario);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();

        echo "Registro exitoso";

    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

?>