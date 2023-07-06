<?php 
    include("./verificacion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tabla Formulario</title>
    <style>

        html, body
        {
            width: 100vw;
            height: 100%;
            padding: 0;
            margin: 0;
        }

        #contenedor
        {
            width: 100%;
            height: 100%;
        }

        table
        {
            display: block;
            height: 80%;
            width: 100vw;
            border-collapse: collapse;
            overflow: auto;
        }

        tbody
        {
            overflow: scroll;
        }

        header, footer
        {
            font-weight: bold;
            background-color: #333;
            height: 10%;
            width: 100%;
            color: white;
            padding: 30px;
            box-sizing: border-box;
        }
        header
        {
            display: flex;
            align-items: center;
            justify-content: end;
            position: relative;
        }

        footer
        {
            position: fixed;
            bottom:0;
            left:0;
            text-align: center;
        }

        .th
        {
            text-align: center;
            background-color: bisque;
            padding: 10px 10px 25px 10px;
            box-sizing: border-box;
            border-right: 2px solid orange;
            cursor: pointer;
        }

        [campo-dato = "id"]
        {
            width: 10vw;
        }

        [campo-dato = "marca"]
        {
            width: 20vw;
        }

        [campo-dato = "modelo"]
        {
            width: 20vw;
        }
        
        [campo-dato = "precio"]
        {
            width: 10vw;
        }

        [campo-dato = "año"]
        {
            width: 10vw;
        }

        [campo-dato = "PDF"]
        {
            width: 10vw;
        }

        [campo-dato = "modif"]
        {
            width: 10vw;
        }

        [campo-dato = "baja"]
        {
            width: 10vw;
        }

        tbody tr:nth-child(odd)
        {
            background-color: lavender;
        }

        tbody tr:nth-child(even)
        {
            background-color: rgb(203, 203, 251);
        }

        td
        {
            padding: 20px;
            box-sizing: border-box;
        }

        .botonHeader
        {
            padding: 10px;
            /* width: 150px; */
            font-weight: bold;
            width: 100px;
            font-size: 10px;
        }

        .boton
        {
            display: block;
            margin: auto;
            padding: 5px;
        }

        #opciones input
        {
            margin-right: 10px;
        }

        #opciones
        {
            display: flex;
            align-items: center;
            justify-content: end;
            position: relative;

        }


        /* ////////////////////////// */

        h3
        {
            margin: 0;
        }

        #titulo
        {
            background-color: black;
            color: white;
            height: 10%;
            width: 100%;
            padding-left: 10px;
            box-sizing: border-box;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .opcion
        {
            float: left;
            height: 30%;
            width: 50%;
        }

        thead input, thead select
        {
            display: block;
            width: 80%;
            padding: 5px;
            box-sizing: border-box;
            margin: auto;
        }

        .modalVisible
        {
            visibility: visible;
        }

        .modalInvisible
        {
            visibility: hidden;
        }

        #modalModif, #modalAlta
        {
            position: fixed;
            top: 20%;
            left: 30%;
            padding: 20px;
            z-index: 10;
            width: 440px;
            min-width: 300px;
        }

        #modalRespuesta
        {
            position: fixed;
            top: 30%;
            left: 35%;
            box-sizing: border-box;
            width: 400px;
            min-width: 260px;
            height: auto;
            background: linear-gradient(180deg, violet, darkviolet);
            border-radius: 0px 0px 20px 20px;
            z-index: 11;
        }

        #textoRespuesta
        {
            padding: 20px;
            box-sizing: border-box;
            color: white;
            font-weight: bold;
        }

        #formModalModif, #formModalAlta
        {
            width: 100%;
            background: linear-gradient(180deg, #333, black);
            display: flex;
            flex-wrap: wrap;
            height: 340px;
            overflow: auto;
            color: white;
            border-radius: 0px 0px 20px 20px;
        }

        .entrada
        {
            width: 220px;
            padding: 20px;
            box-sizing: border-box;
        }

        .entrada input, .entrada select
        {
            display: block;
            /* margin: auto; */
            width: 150px;
            padding: 5px;
            box-sizing: border-box;
        }

        .encabezado
        {
            height: 10%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            background-color: #333;
            color: white;
            align-items: center;
            padding: 5px;
            box-sizing: border-box;
        }

        #salirModif, #salirAlta, #salirRespuesta
        {
            cursor: pointer;
            color: red;
        }

        .contenedorBloqueado
        {
            pointer-events: none;
            opacity: 0.7;
        }

        .contenedorDesbloqueado
        {
            pointer-events: all;
            opacity: 1;
        }

        @media (max-width: 1024px)
        {
            /* .botonHeader
            {
                max-width: 70px;
            } */
        }        

        @media (max-width: 900px)
        {

            /* .botonHeader
            {
                width: 100px;
            } */

            [campo-dato = "año"]
            {
                display: none;
            }

            [campo-dato = "marca"]
            {
                display: none;
            }
            
            [campo-dato = "modelo"]
            {
                width: 20%;
            }

            [campo-dato = "id"], [campo-dato = "precio"], [campo-dato = "PDF"],[campo-dato = "modif"], [campo-dato = "baja"]
            {
                width: 16vw;
            }
        }

        @media(max-width: 750px) 
        {
            .botonHeader
            {
                max-width: 70px;
            }

            [campo-dato = "precio"]
            {
                display: none;
            }

            [campo-dato = "marca"]
            {
                display: none;
            }

            [campo-dato = "año"]
            {
                display: none;
            }

            [campo-dato = "id"]
            {
                width: 20%;
            }

            [campo-dato = "marca"]
            {
                width: 20%;
            }

            [campo-dato = "PDF"]
            {
                width: 20%;
            }

            [campo-dato = "modif"]
            {
                width: 20%;
            }

            [campo-dato = "baja"]
            {
                width: 20%;
            }

            .boton
            {
                width: 100%;
            }

            #modalModif, #modalAlta
            {
                position: fixed;
                top: 20%;
                left: 14%;
                padding: 20px;
                z-index: 10;
                width: 40%;
                min-width: 200px;
            }

            #modalRespuesta
            {
                left: 20%;
            }

            .entrada
            {
                width: 100%;
            }
        }

        @media (max-width: 550px)
        {
            #opciones
            {
                display: block;
                width: 100%;
                text-align: center;
            }

            #opciones input
            {
                margin-bottom: 7px;
                margin-left: 0px;
                margin-right: auto;
                width: 200px;
            }

            header
            {
                height: 100px;
            }

            [campo-dato = "id"], [campo-dato = "modelo"], [campo-dato = "modif"], [campo-dato = "baja"]
            {
                max-width: 20vw;
            }

            [campo-dato = "PDF"]
            {
                display: none;
            }
        }

        @media (max-width: 450px)
        {

            .botonHeader
            {
                max-width: 60px;
                font-size: 11px;
            }

            [campo-dato = "id"]
            {
                display: none;
            }

            .boton
            {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div id="contenedor">
        <header>
            <div id="opciones">
                <div>
                    <input type="text" readonly id="orden" value="Precio">
                </div>
                <div>
                    <button class="botonHeader" id="cargar">Cargar Datos</button>
                    <button class="botonHeader" id="alta">Alta Registro</button>
                    <button class="botonHeader" id="vaciar">Vaciar Tabla</button>
                    <button class="botonHeader" id="vaciarFiltros">Borrar Filtros</button>
                    <button class="botonHeader" id="cerrarSesion">Cerrar Sesion</button>
                </div>
            </div>
        </header>
        <table>
            <thead>
                <tr>
                    <th campo-dato="id" class="th" id="thId">ID</th>
                    <th campo-dato="marca" class="th" id="thMarca">Marca</th>
                    <th campo-dato="modelo" class="th" id="thModelo">Modelo</th>
                    <th campo-dato="precio" class="th" id="thPrecio">Precio</th>
                    <th campo-dato="año" class="th" id="thAño">Año</th>
                    <th campo-dato="PDF" class="th" id="thAño">PDF</th>
                    <th campo-dato="modif" class="th" id="thAño">Modif</th>
                    <th campo-dato="baja" class="th" id="thAño">Bajas</th>
                </tr>
                <tr>
                    <td campo-dato="id" class="th"  ><input id="filtroId" type="text"></td>
                    <!-- <td campo-dato="marca" class="th"  ><input id="filtroMarca" type="text"></td> -->
                    <td campo-dato="marca" class="th"><select name="filtroMarca" id="filtroMarca">
                        <option value="">Todas</option>
                    </select></td>
                    <td campo-dato="modelo" class="th" ><input  id="filtroModelo" type="text"></td>
                    <td campo-dato="precio" class="th" ><input id="filtroPrecio" type="text"></td>
                    <td campo-dato="año" class="th" ><input id="filtroFecha" type="text"></td>
                    <td campo-dato="PDF" class="th"></td> <!--CAMBIAR-->
                    <td campo-dato="modif" class="th"></td> <!--CAMBIAR-->
                    <td campo-dato="baja" class="th"></td> <!--CAMBIAR-->
                </tr>
            </thead>
            <tbody id="tabla">
    
            </tbody>
        </table>
        <footer id="footer">
            Footer
        </footer>

        
    </div>

     <!-- //////////////////////MODAL MODIF////////////////////////////////// -->

    <div id="modalModif" class="modalInvisible">
        <div class="encabezado">
            <div>Modificar Artículo</div>
            <button id="salirModif">X</button>
        </div>
        <!-- action="./modificar.php" -->
        <form  id="formModalModif" method="post" enctype="multipart/form-data">
            <div class="entrada">
                <label for="idModif">ID: </label>
                <input type="text" id="idModif" name="idModif" required readonly>
            </div>
            <div class="entrada">
                <label for="marcaModif">Marca: </label>
                <select name="marcaModif" id="marcaModif" name="marcaModif" required></select>
            </div>
            <div class="entrada">
                <label for="modeloModif">Modelo: </label>
                <input type="text" id="modeloModif" name="modeloModif" required>
            </div>
            <div class="entrada">
                <label for="precioModif">Precio: </label>
                <input type="text" id="precioModif" name="precioModif" required> 
            </div>
            <div class="entrada">
                <label for="añoModif">Año: </label>
                <input type="text" id="añoModif" name="fechaModif" required>
            </div>
            <div class="entrada">
                <label> Documento Pdf: </label>
                <input type="file" id="pdfModif" name="pdfModif">
            </div>
            <div class="entrada">
                <input type="button" value="Modificar" id="enviarModif">
            </div>
        </form>
    </div>

    <!-- //////////////////////MODAL ALTA////////////////////////////////// -->

    <div id="modalAlta" class="modalInvisible">
        <div class="encabezado">
            <div>Alta Artículo</div>
            <button id="salirAlta">X</button>
        </div>
        <form id="formModalAlta" method="post" enctype="multipart/form-data">
            <div class="entrada">
                <label for="idAlta">ID: </label>
                <input type="text" id="idAlta" name="idAlta" placeholder="Patron: AAA000" pattern="[A-Za-z]{3}[0-9]{3}" required>
            </div>
            <div class="entrada">
                <label for="marcaAlta">Marca: </label>
                <select name="marcaAlta" id="marcaAlta" required></select>
            </div>
            <div class="entrada">
                <label for="modeloAlta">Modelo: </label>
                <input type="text" id="modeloAlta" name="modeloAlta" required>
            </div>
            <div class="entrada">
                <label for="precioAlta">Precio: </label>
                <input type="text" id="precioAlta" name="precioAlta" required> 
            </div>
            <div class="entrada">
                <label for="añoAlta">Año: </label>
                <input type="text" id="añoAlta" name="fechaAlta" required>
            </div>
            <div class="entrada">
                <label> Documento Pdf: </label>
                <input type="file" id="pdfAlta" name="pdfAlta">
            </div>
            <div class="entrada">
                <input type="button" value="Alta" id="enviarAlta">
            </div>
        </form>
    </div>

     <!-- //////////////////////MODAL RESPUESTA////////////////////////////////// -->

    <div id="modalRespuesta" class="modalInvisible">
        <div class="encabezado">
            <div>Respuesta del servidor</div>
            <button id="salirRespuesta">X</button>
        </div>
        <div id="textoRespuesta">
            Respuesta del servidor
        </div>
    </div>

</body>
</html>

<script src="../../jquery.js"></script>
<script>

    function cargarDesplegable()
    {
        var desplegable = $("#filtroMarca");
        var desplegableModif = $("#marcaModif");
        var desplegableAlta = $("#marcaAlta");

        $.ajax({
            type: "get",
            url:"./marcas.php",
            success: function(respuestaServer)
            {
                alert(respuestaServer);
                var objRespuesta = JSON.parse(respuestaServer);
                objRespuesta.marcas.forEach(marca => {
                    //Hay que hacerlo en options diferentes, sino no funciona
                    var opcion = document.createElement("option");
                    var opcionModif = document.createElement("option");
                    var opcionAlta = document.createElement("option");

                    opcion.innerHTML = marca.nombreMarca;
                    opcionModif.innerHTML = marca.nombreMarca;
                    opcionAlta.innerHTML = marca.nombreMarca;

                    //Agrego la opción para todos los desplegables de la aplicación
                    //al mismo tiempo
                    desplegable.append(opcion);
                    desplegableModif.append(opcionModif);
                    desplegableAlta.append(opcionAlta);
                });
            }
            });
    }

    function cargarModif(codArt)
    {
        $.ajax({
                type: "get",
                url: "./salidaJsonArticulo.php",
                data: { codArt: codArt },
                success: function (respuestaDelServer) {
                    objetoDato = JSON.parse(respuestaDelServer);
                    $("#idModif").val(objetoDato.codArt);
                    $("#marcaModif").val(objetoDato.marca);
                    $("#modeloModif").val(objetoDato.modelo);
                    $("#precioModif").val(objetoDato.precio);
                    $("#añoModif").val(objetoDato.fecha);
                }
            });
    }

    function modificar(){
        var datos = new FormData($("#formModalModif")[0]);
        $.ajax({
            type: "post",
            method: "post",
            enctype: "multipart/form-data",
            url: "./modificar.php",
            processData: false,
            contentType: false,
            cache: false,
            data: datos,
            success: function(respuesta)
            {
                document.getElementById("modalRespuesta").className = "ModalVisible";
                document.getElementById("textoRespuesta").innerText = respuesta;
            }
        })

    }

    function cargarPDF(codArt)  {
        $.ajax({
            type: "get",
            url: "./pdf.php",
            data: {codArt: codArt},
            success: function(respuestaServer)
            {
                $("#textoRespuesta").empty();
                var objetoDato = JSON.parse(respuestaServer);
                document.getElementById("modalRespuesta").className = "ModalVisible";
                $("#textoRespuesta").html("<iframe width='auto' height='300px' src='data:application/pdf;base64," + objetoDato.documentoPDF + "'></iframe>");
            }
        })
    }

    function alta()
    {
        var datos = new FormData($("#formModalAlta")[0]);
        $.ajax({
            type: "post",
            method: "post",
            enctype: "multipart/form-data",
            url: "./alta.php",
            processData: false,
            contentType: false,
            cache: false,
            data: datos, 
            success: function(respuesta)
            {
                // alert(respuesta);
                document.getElementById("modalRespuesta").className = "ModalVisible";
                document.getElementById("textoRespuesta").innerHTML = respuesta;
            }
        })
    }

    function baja($codArt)
    {
        $.ajax({
            type: "post",
            url: "./baja.php",
            data: {codArt: $codArt},
            success: function(respuesta)
            {
                document.getElementById("modalRespuesta").className = "ModalVisible";
                document.getElementById("textoRespuesta").innerHTML = respuesta;
            }
        });
    }

    function vaciarCampos()
    {
        $("#idAlta").val("");
        $("#modeloAlta").val("");
        $("#precioAlta").val("");
        $("#añoAlta").val("");
        $("#pdfAlta").val("");

        $("#idModif").val("");
        $("#modeloModif").val("");
        $("#precioModif").val("");
        $("#añoModif").val("");
        $("#pdfModif").val("");
    }

    function habilitarAlta()
    {
        if(document.getElementById("formModalAlta").checkValidity() == true)
        {
            $("#enviarAlta").attr("disabled", false);
        }
        else
        {
            $("#enviarAlta").attr("disabled", true);
        }
    }

    function habilitarModif()
    {
        if(document.getElementById("formModalModif").checkValidity() == true)
        {
            $("#enviarModif").attr("disabled", false);
        }
        else
        {
            $("#enviarModif").attr("disabled", true);
        }
    }

    function cargaDatos()
    {
        $.ajax({
                type: "get",
                url:"./bbdd.php",
                data: { 
                        orden: $("#orden").val(), 
                        id: $("#filtroId").val(),
                        marca: $("#filtroMarca").val(),
                        modelo: $("#filtroModelo").val(),
                        precio: $("#filtroPrecio").val(),
                        fecha: $("#filtroFecha").val()
                    },
                success: function(respuestaServer){
                    // alert(respuestaServer);
                    $("#tabla").empty();
                    var objJson = JSON.parse(respuestaServer);
                    objJson.guitarras.forEach(function(valor, indice)
                    {
                        var objTr = document.createElement("tr");
                        var tdId = document.createElement("td");
                        var tdMarca = document.createElement("td");
                        var tdModelo = document.createElement("td");
                        var tdPrecio = document.createElement("td");
                        var tdAño = document.createElement("td");
                        var tdPDF = document.createElement("td");
                        var tdModif = document.createElement("td");
                        var tdBaja = document.createElement("td");
                        
                        tdId.setAttribute("campo-dato", "id");
                        tdMarca.setAttribute("campo-dato", "marca");
                        tdModelo.setAttribute("campo-dato", "modelo");
                        tdPrecio.setAttribute("campo-dato", "precio");
                        tdAño.setAttribute("campo-dato", "año");
                        tdPDF.setAttribute("campo-dato", "PDF");
                        tdModif.setAttribute("campo-dato", "modif");
                        tdBaja.setAttribute("campo-dato", "baja");

                        tdId.innerHTML = valor.id;
                        objTr.appendChild(tdId);
                        tdMarca.innerHTML = valor.marca;
                        objTr.appendChild(tdMarca);
                        tdModelo.innerHTML = valor.modelo;
                        objTr.appendChild(tdModelo);
                        tdPrecio.innerHTML = valor.precio;
                        objTr.appendChild(tdPrecio);
                        tdAño.innerHTML = valor.año;
                        objTr.appendChild(tdAño);

                        tdPDF.innerHTML = "<button class='boton' campo-dato='PDF'>PDF</button>";
                        objTr.appendChild(tdPDF);
                        tdModif.innerHTML = `<button class='boton' campo-dato='modif'>Modificar</button>`;
                        objTr.appendChild(tdModif);
                        tdBaja.innerHTML = `<button class='boton' campo-dato='baja'>Baja</button>`;
                        objTr.appendChild(tdBaja);
                        
                        tdPDF.onclick = function(){
                            // console.log(valor.id);
                            cargarPDF(valor.id);
                        }
                        tdModif.onclick = function()
                        {
                            //Bloquear contenedor
                            document.getElementById("contenedor").className = "contenedorBloqueado";
                            //Hacer visible formulario de modificacion y desbloquear el boton en caso de que se haya bloqueado antes
                            $("#enviarModif").attr("disabled", false);
                            document.getElementById("modalModif").className = "modalVisible";
                            cargarModif(valor.id);
                        }
                        tdBaja.onclick = function()
                        {
                            if(confirm("¿Está seguro de dar de baja el artículo?"))
                            {
                                baja(valor.id);
                            }
                        }      
                        $("#tabla").append(objTr);
                    });
                    $("#footer").text("Cantidad de registros: " + objJson.largo);
                }
            });
    }

    $(document).ready(function(){
        cargarDesplegable();

        $("#formModalAlta").keyup(function()
            {
                habilitarAlta();
            }
        );

        $("#formModalModif").keyup(function()
            {
                habilitarModif();
            }
        );

        $("#cerrarSesion").click(function(){
            location.href = "../eliminarSesion.php";
        });

        $("#vaciarFiltros").click(function()
        {
            $("#filtroId").val("");
            $("#filtroMarca").val("");
            $("#filtroModelo").val("");
            $("#filtroPrecio").val("");
            $("#filtroFecha").val("");
            $("#orden").val("Precio");
        });

        $("#thId").click(function(){
            $("#orden").val("ID");
        });

        $("#thMarca").click(function(){
            $("#orden").val("Marca");
        });

        $("#thModelo").click(function(){
            $("#orden").val("Modelo");
        });

        $("#thPrecio").click(function(){
            $("#orden").val("Precio");
        });

        $("#thAño").click(function(){
            $("#orden").val("Fecha");
        });

        $("#salirModif").click(function(){
            document.getElementById("modalModif").className = "modalInvisible";
            document.getElementById("contenedor").className = "contenedorDesbloqueado";
            vaciarCampos();
        });

        $("#salirAlta").click(function(){
            document.getElementById("modalAlta").className = "modalInvisible";
            document.getElementById("contenedor").className = "contenedorDesbloqueado";
            vaciarCampos();
        });

        $("#salirRespuesta").click(function()
        {
            //Al cerrar la respuesta se desbloquea el contenedor y se esconde el modal, cualquiera que sea
            document.getElementById("modalModif").className = "modalInvisible";
            document.getElementById("modalAlta").className = "modalInvisible";
            document.getElementById("modalRespuesta").className = "modalInvisible";
            document.getElementById("contenedor").className = "contenedorDesbloqueado";

        });

        $("#enviarAlta").click(function()
        {
            if(confirm("¿Está seguro de querer realizar el alta?"))
            {
                alta();
            }
        });

        $("#enviarModif").click(function()
        {
            if(confirm("¿Está seguro de querer modificar el artículo?"))
            {
                modificar();
            }
        });

        $("#cargar").click(function(){
            $("#tabla").empty();
            $("#tabla").html("<h3><i>Cargando datos...</i></h3>");
            cargaDatos();
        });

        $("#vaciar").click(function(){
            $("#tabla").empty();
        })

        $("#alta").click(function(){
            document.getElementById("contenedor").className = "contenedorBloqueado";
            document.getElementById("modalAlta").className = "modalVisible";
            if($("#idAlta").val() == "" || $("#añoAlta").val() == "" || $("#modeloAlta").val() == "" || $("#precioAlta").val())
            {
                $("#enviarAlta").attr("disabled", true);
            }
        });
    });
</script>

