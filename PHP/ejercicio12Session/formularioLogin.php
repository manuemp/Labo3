<?php 
    session_start();
    if(isset($_SESSION["usuario"]))
    {
        header("Location:./app/index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet">
    <style>
        body, html
        {
            max-height: 100%;
            min-height: 100%;
            width: 100%;
            padding: 0;
            margin: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        body
        {
            background:linear-gradient(180deg, lavender, rgb(188, 188, 250));
        }

        h1
        {
            text-align: center;
        }

        #loginForm
        {
            width: 300px;
            background: linear-gradient(180deg, #333, black);
            color: white;
            display: block;
            margin: 80px auto;
            border-radius: 20px;
            box-shadow: 7px 6px 20px 0px gray;
            padding: 30px;
            box-sizing: border-box;
        }

        #loginForm input
        {
            display: block;
            width: 220px;
            padding: 8px;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
        }

        .boton
        {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            margin-top: 15px;
            border: none;
        }

        /* #loginForm button
        {
            width: 100px;
            padding: 5px;
        } */

        #loginForm form
        {
            display: block;
            margin: auto;
        }

        #nav
        {
            margin-top: 10px;
            display: block;
            text-align: right;
            padding-right: 20px;
        }
    </style>
</head>
<body>
    <div id="nav"><a href="./formularioRegistro.html">Registrarse</a></div>
    <h1>Inicio de sesión</h1>
    <div id="loginForm">
        <form method="post" action="./autenticacion.php">
            <label for="user">Usuario: </label>
            <input type="text" id="user" name="user" placeholder="Ingrese nombre de usuario" required>
            <label for="user">Contraseña: </label>
            <input type="password" id="pass" name="pass" placeholder="Ingrese contraseña" required>
            <!-- <input type="submit" value="Enviar" class="boton"> -->
            <button class="boton">Enviar</button>
        </form>
    </div>
</body>