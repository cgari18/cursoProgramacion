<html>
    <head>
        <meta charset="utf-8">
        <title>
            Calculadora Unidad 3
        </title>
    </head>
    <body>
        <?php
        /*
         *          --Programa Creado por: Cristian Galindo Rivera.--
         *           --Para el programa de: Desarrollo web con PHP.--
         *                    --Calculadora Evidencia 3.--
         */
        /* Creacion del formulario y utilizacion del metodo Get para enviar los datos de este
         * se hace el llamado a la funcion php que contiene los calculos atravez del action
         */
        ?>
        <form method="post" action="index.php">
            
            <input type="text" name="operando1">
            <select name="operador">
                <option value="+">Suma
                </option>
                <option value="-">Resta
                </option>
                <option value="*">Multiplica
                </option>
                <option value="/">Divide
                </option>   
            </select>
            <input type="text" name="operando2">
            <input type="submit" name="calcular" value="enviar">
        </form>
        
    </body>
</html>
<?php
            //Captura de los datos que son ingresados desde el formulario y asignados por el metodo Get
            include ('biblioteca.php');
            if (isset($_POST['calcular'])){
                $operando1=$_POST['operando1'];
                $operando2=$_POST['operando2'];
                $operador=$_POST['operador'];
                
                
                operaciones($operando1,$operando2,$operador);
            }
?>
