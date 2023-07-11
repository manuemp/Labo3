<?php 
    // ob_start();
    if(isset($_POST["user"]))
    {
        $dbname = "bqaqedrgszmaxzzry3xb";
        $host= "bqaqedrgszmaxzzry3xb-mysql.services.clever-cloud.com";
        $user= "ussg4ckvxuovpsxj";
        $password= "DzvwoTvBsMNPFIDxncts";
        $respuesta_estado = "";

        try
        {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $dbh = new PDO($dsn, $user, $password);

            $usuario = $_POST["user"];
            $pass = $_POST["pass"];
            $hashedPass = md5($pass);

            $sql = "SELECT * FROM Usuarios WHERE Usuario = :user";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':user', $usuario);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $fila = $stmt->fetchAll();
            $contador = $stmt->rowCount();
            if($contador != 0)
            {
                if($hashedPass == $fila[0]["Pass"])
                {
                    //Actualizo contador de sesión
                    $sql = "UPDATE Usuarios SET Contador = Contador + 1 WHERE Usuario = :user";
                    $stmt = $dbh->prepare($sql);
                    $stmt->bindParam(':user', $usuario);
                    $stmt->execute();
                    session_start();
                    $_SESSION["usuario"] = $usuario;
                    $_SESSION["identificador"] = session_create_id();
                    header("Location:./app/index.php");
                    $dbh = null;
                    exit();
                }
                else
                {
                    header("Location:./formularioLogin.php");
                    $dbh = null;
                    exit();
                }
            }
            header("Location:./formularioLogin.php");
            $dbh = null;
            exit();

        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    else
    {
        header("Location:./formularioLogin.php");
        exit();
    }
?>