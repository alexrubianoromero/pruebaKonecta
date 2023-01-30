<?php
namespace views;
use models\InventarioModel;
class InventarioView
{
    public function __construct()
    {

    }

    public function mainView()
    {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <title>Document</title>
            </head>
            <body>
                <div id="divPrincipal" align="center">
                    <div id="divTitulo">
                        <h1>MANEJO DE VENTAS E INVENTARIOS KONECTA </h1>
                    </div>
                    <div id="divBotones">
                        <button class="btn btn-primary" id="btnProductos" onclick="listarMenuProductos();">PRODUCTOS </button>
                        <button class="btn btn-primary">VENTAS </button>
                    </div>
                    <div id ="divResultados"></div>
                </div>
            </body>
            </html>
            <script src="js/app.js"></script>
        <?php
    }
    public function mainViewCode()
    {
        
    }

}


?>