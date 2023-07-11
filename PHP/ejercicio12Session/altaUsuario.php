<?php 

    // include("./verificacion.php");

    $dbname = "bqaqedrgszmaxzzry3xb";
    $host= "bqaqedrgszmaxzzry3xb-mysql.services.clever-cloud.com";
    $user= "ussg4ckvxuovpsxj";
    $password= "DzvwoTvBsMNPFIDxncts";
    $respuesta_estado = "";

    if(isset($_POST["user"]))
    {
        try
        {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $dbh = new PDO($dsn, $user, $password);
            $usuario = $_POST["user"];
            $contador = 0;
            $pass = md5($_POST["pass"]);
    
            $sql = "INSERT INTO Usuarios (Usuario, Pass, Contador) VALUES (:user, :pass, 0)";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':user', $usuario);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            $dbh = null;
            header("Location:./formularioLogin.php");
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    else
    {
        header("Location:./index.php");
    }

?>