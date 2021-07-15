<?php
//Consulta
    function query($consulta){
        $enlace = new mysqli("localhost","root","","complejoDeportivo");
        $resultado = $enlace->query($consulta);  

        return $resultado;
    }
//Imprimir consulta
    function printQuery($resultado, $dato, $quantity){
        $arrayDatos = explode(" ", $dato);
        while($fila = $resultado->fetch_assoc()) {
            echo " ".$fila[$arrayDatos[$quantity]]." ";
        }
    }
?>
