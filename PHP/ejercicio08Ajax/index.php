<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #contenedor
        {
            display: flex;
            width: 1200px;
            flex-wrap: wrap;
            background-color:whitesmoke;
            position: fixed;
            left: 6%;
            top: 6%;
        }

        #formulario
        {
            width: 350px;
            height: 250px;
            background-color: crimson;
            color: white;
            box-sizing: border-box;
            padding: 20px;
        }
        #icono
        {
            width: 350px;
            height: 250px;
            background-color: darksalmon;
            box-sizing: border-box;
            padding: 20px;
            color: white;
        }
        #resultado
        {
            width: 500px;
            height: 250px;
            background-color:lavender; 
            box-sizing: border-box;
            padding: 20px;
        }
        #estado
        {
            width: 350px;
            height: 250px;
            background-color:firebrick ;
            color: white;
            box-sizing: border-box;
            padding: 20px;
        }
        img
        {
            width: 135px;
            height: auto;
            display: block;
            margin: auto;
            cursor:pointer;
            opacity: 0.5;
        }

        img:hover
        {
            opacity:1;
        }

        .recibiendo
        {
            font-style: italic;
        }

        input
        {
            padding: 5px;
        }

    </style>
</head>
<body>
    <div id="contenedor">
        <div id="formulario">
            <h2>Dato de Entrada</h2>
            <input type="text" name="clave" id="clave">
        </div>
        <div id="icono">
            <h2>Encriptar</h2>
            <img src="./candado.png" alt="encriptar" id="candado">
        </div>
        <div id="resultado">
            <h2>Resultado</h2>
            <span id="resultado"></span>
        </div>
        <div id="estado">
            <h2>Estado del requerimiento</h2>
            <span id="estado"></span>
        </div>
    </div>
</body>
</html>

<script src="../jquery.js"></script>
<script>
    $("#candado").click(function(){
        $("#resultado").empty();
        $("#resultado").addClass("recibiendo");
        $("#resultado").html("<h2>Esperando respuesta<h2>");
        $("#estado").empty();
        $("#estado").append("<h4>Esperando...<h4>");

        $.ajax({
            type:"post",
            url: "./resultado.php",
            data: {clave: $("#clave").val()},
            success: function(respuestaDelServer, estado)
            {
                console.log(respuestaDelServer);
                $("#resultado").removeClass("recibiendo");
                $("#resultado").html("<h2>Respuesta del servidor</h2>" + respuestaDelServer);
                $("#estado").empty();
                $("#estado").append("<h2>Estado del requerimiento</h2><h3>" + estado + "<h3>");
            }
        })
    })
</script>


