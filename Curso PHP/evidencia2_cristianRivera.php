<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Actividad 2 Uso de Arreglos</title>

    </head>
    <body>
        <h2 align="center">Taller uso de Arreglos</h2>
        <?php
        /* Taller de uso de Arreglos para la asignatura Desarrollo web con PHP
         * Asignatura de formacion virtual del SENA.
         * Realizado por el Ing. Informatica Cristian Rivera.
         */
            $Colores = array(   //Creamos un array de colores con significado
                "Amarillo" => "Riqueza y Alegria",
                "Verde" => "Naturaleza",
            );
            $Directorio = array( //Crear array con los valores de la table asignados a Directorio
                array("Nombre","Direccion","Telefono","Fecha de Cumpleaños","Color Favorito","Significado"),
                array("Juan Perez","Cra 45 # 45-56",3456789,"23/12/1997","Amarillo"),
                array("Pablo Manrique","Clle 23 # 12-19 sur",3214567,"12/10/1980","Verde"),
                array("Nancy Pena","AV 34 # 16-12",2135423,"07/06/2000","Rojo"),
            );
            /*A continuacion creamos un ciclo que recorra el array de los colores y encuentre el
              El color que no tenga un significado asignado y si todos tienes significado se los asigna */
            for($i=1;$i<4;$i++){
                $color=$Directorio[$i][4];
                    if(empty($Colores[$color])){
                        $Directorio[$i][5]='No se encuentra el significado';
                    } else {
                        $Directorio[$i][5]=$Colores[$color];
                    }
            }
        ?>
    <html>        
        <table border="3" width="50%" align="center">
            <?php
                /*Creamos la tabla en esta seccion de html, recorremos el arreglo a medida
                  Que vamos creando y llenando los valores de la tabla  */ 
                foreach ($Directorio as $fila){
                    echo "<tr>";
                        foreach ($fila as $celda){
                            echo "<td>$celda</td>";
                        }
                    echo "</tr>";
                }
            ?>

            </table>
    </html>>
    </body>
</html>
 