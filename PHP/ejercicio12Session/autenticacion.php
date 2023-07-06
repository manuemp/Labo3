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
            // $stmt->execute(array(":user"=>$usuario));
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $fila = $stmt->fetchAll();
            $contador = $stmt->rowCount();
            if($contador != 0)
            {
                if($hashedPass == $fila[0]["Pass"])
                {
                    session_start();
                    $_SESSION['usuario'] = $usuario;
                    header("Location:./app/index.php");
                    exit();
                }
                else
                {
                    echo "Contraseña incorrecta";
                    header("Location:./formularioLogin.php");
                }
            }

            header("Location:./formularioLogin.php");

        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    else
    {
        header("Location:./formularioLogin.php");
    }
?>