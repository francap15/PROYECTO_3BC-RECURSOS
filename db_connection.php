<?php
    #Logfile (Genera un archivo de registro de los eventos ocurridos durante la ejecución del programa.)
    global $logFile;
    $logFile = fopen("log.txt", 'a') or die(" Ha ocurrido un error inexplicable al intentar crear el archivo log.txt");
    fwrite($logFile, "\n".date("d/m/Y H:i:s")." Se ha ejecutado el programa") or die(" Error escribiendo en el archivo");



//Llamado a las funciones
//FUNCION QUE CONECTA A LA BASE DE DATOS POR MEDIO DE PARAMETROS (Versatil)

//Function - 1
function Database_Connection($server, $user, $pass, $db_name ){



    $conexion = mysqli_connect($server, $user, $pass,$db_name) 
        or die("Casi conecta");

    return $conexion;
} 



?>
