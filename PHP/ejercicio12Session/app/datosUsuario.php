<?php 

    include("./verificacion.php");

    $dbname = "bqaqedrgszmaxzzry3xb";
    $host= "bqaqedrgszmaxzzry3xb-mysql.services.clever-cloud.com";
    $user= "ussg4ckvxuovpsxj";
    $password= "DzvwoTvBsMNPFIDxncts";
    $respuesta_estado = "";

    if(isset($_GET["autenticacion"]))
    {
        try
        {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $dbh = new PDO($dsn, $user, $password);
            $user = $_SESSION['usuario'];
    
            $sql = "SELECT Usuario, Contador FROM Usuarios WHERE Usuario = :user";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(":user", $user);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $fila = $stmt->fetch();
    
            $objUsuario = new stdClass;
            $objUsuario->usuario = $fila["Usuario"];
            $objUsuario->idSesion = $_SESSION["identificador"];
            $objUsuario->contador = $fila["Contador"];
    
            $objJson = json_encode($objUsuario);
            $dbh = null;
    
            echo $objJson;
    
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