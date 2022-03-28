<?php
    //Calculo de las operacion segun el operador que escoja el usuario.
    function operaciones($operando1,$operando2,$operador){
        
        if($operador == "+"){
            $solucion = $operando1 + $operando2;
        }else if($operador == "-") {
            $solucion = $operando1 - $operando2;
        }else if($operador == "*") {
            $solucion = $operando1 * $operando2;
        }else if($operador == "/") {
            if ($operando2 != 0){
                $solucion = $operando1 / $operando2;
             
            }else {
                echo "La division por cero no esta definida";
                exit();
            }           
        
        }
        //impresion de la funcion segun el calculo escojido la variable solucion toma un valor u otro
        echo "La solucion es: " . $solucion;
    }
    
?>
