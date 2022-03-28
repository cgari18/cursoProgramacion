<?php
    //Captura de los datos que son ingresados desde el formulario y asignados por el metodo Get
    $operando1 = $_GET['operando1'];
    $operando2 = $_GET['operando2'];
    $operador = $_GET['operador'];
    
    //Calculo de las operacion segun el operador que escoja el usuario.
    if($operador == "+"){
        $solucion = $operando1 + $operando2;
        
    }else if($operador == "-") {
        $solucion = $operando1 - $operando2;
    }else if($operador == "*") {
        $solucion = $operando1 * $operando2;
    }else if($operador == "/") {
        $solucion = $operando1 / $operando2;
    }
    //impresion de la funcion segun el calculo escojido la variable solucion toma un valor u otro
    echo "La solucion es: " . $solucion;
?>
