<html>
    <!--                    Sistema de reserva de Asientos
                           Desarrollado por  Cristian Rivera
                            Programa: Desarrollo web en PHP                  -->
                            
    <head>
        <meta charset="utf-8">
        <title>Reserva asientos</title>
        <style>
            tr>td{
                border: 1px solid black;
            }
        </style>   
        <script type="text/javascript"></script>
    </head>
    <body>
        <div id="encabezado">
            <h3 align="center">Sistema de reserva de asientos</h3>
        </div>
        <table align="center">
            <thead>
                <tr>
                    <td colspan="6">ESCENARIO</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("funcionArreglo.php");
                    //asignarValor($fila,$puesto,$status);
                ?>
                
            </tbody>
        </table>
        <div id="Formulario">
            <form action="" method="post">
                <table align="center">
                    <tr><td>Fila:</td><td><input type="text" name="fila"></td></tr>
                    <tr><td>Puesto:</td><td><input type="text" name="puesto"></td></tr>
                    <tr><td>Reservar:</td><td><input type="radio" name="option" value="R"></td></tr>
                    <tr><td>Comprar:</td><td><input type="radio" name="option" value="V"></td></tr>
                    <tr><td>Liberar:</td><td><input type="radio" name="option" value="L"></td></tr>
                    <tr><td><input type="submit" value="Enviar" name="enviar"></td><td><input type="reset" name="reset" value="Borrar"></td></tr>
                    <?php

                        if (isset($_POST['enviar'])){
                            $fila = $_POST["fila"];
                            $puesto = $_POST["puesto"];
                            if(!empty($_POST["option"])){
                                $status = $_POST["option"];
                            }
                            else{
                                $status == null;
                            }
                        }
                        if(isset($_POST['reset'])){
                            $fila = null;
                            $puesto = null;
                            $status = null;
                        }
                    ?>
                </table>

            </form>
        </div>
    </body>
</html>