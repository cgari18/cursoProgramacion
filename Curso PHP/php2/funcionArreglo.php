<?php
    session_start();
    function asignarValor($fila=null,$puesto=null,$status=null){
        $size = 5; // definir el tamaño de la matriz
                        
        //Arreglo para simular una base de datos
        if(empty($_SESSION["puestos"])){
            $_SESSION["puestos"]=[];
        }
        //Validamos que se envien datos para procesar
        if($fila !=null && $puesto !=null){
            $key="$fila-$puesto";
                if(array_key_exists($key, $_SESSION["puestos"]) && $_SESSION["puestos"][$key]=="v"){
                    echo "ya esta vendido este puesto";
                                
                }else{
                    $_SESSION["puestos"][$key]=$status;
                }
            }
            for($i=1; $i<=$size; $i++){ //Imprimir la primera columna con numeros
                echo "<tr><td>" . $i . "</td>";
                    for($j=1; $j <= $size; $j++){
                        $tmp="$i-$j"; //creamos la llave tmp con las posiciones
                                    //
                        if(array_key_exists($tmp, $_SESSION["puestos"])){
                        //Verificamos que exista
                            $color = strtoupper($_SESSION["puestos"][$tmp]) == "V" ? "red": "yellow";
                            //Cambiamos a mayuscula y validamos que sea V para ponerlo rojo o de lo contrario que sea R para ponerlo Amarillo
                                echo "<td style='background-color:" . $color . ";'>" . strtoupper($_SESSION["puestos"][$tmp] . "</td>"); //Agregamos el estado
                            }else{
                                echo "<td style='background-color:green;'>L</td>"; // Si no existe ponemos la L y y pintamos de verde
                                        
                            }  
                        }
                    echo "</tr>";  // Cerrar la fila   
            }
                            
    }
    //Inicializamos las variables
    $C=0; //Variable para marcar un Continuar
    $fila = null;
    $puesto = null;
    $status = null;
                    
    if(!empty($_POST["fila"])){
        $fila = $_POST["fila"];
        $C++;
                    
        }
    if(!empty($_POST["puesto"])){
        $puesto = $_POST["puesto"];
        $C++;
    }
    if(!empty($_POST["option"])){
        $status = $_POST["option"];
        $C++;
    }
    //Se envian todos los datos
    if($C == 3){
        asignarValor($fila,$puesto,$status);
    }else{
    //si no se envio un dato declarar
        asignarValor();
    }
                    
?>
            
