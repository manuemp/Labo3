<?php 

    $dbname = "bqaqedrgszmaxzzry3xb";
    $host= "bqaqedrgszmaxzzry3xb-mysql.services.clever-cloud.com";
    $user= "ussg4ckvxuovpsxj";
    $password= "DzvwoTvBsMNPFIDxncts";

    try {

        $dsn = "mysql:host=$host;dbname=$dbname"; 
        $dbh = new PDO($dsn, $user, $password);
        
        $codArt = $_POST["id"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $precio = $_POST["precio"];
        $fecha = $_POST["fecha"];

        $sql = "UPDATE Guitarras SET Marca = :marca, Modelo = :modelo, Precio = :precio, Fecha = :fecha WHERE ID = :codArt";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':codArt', $codArt);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':modelo', $modelo);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':fecha', $fecha);

        $stmt->execute();
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }

?>