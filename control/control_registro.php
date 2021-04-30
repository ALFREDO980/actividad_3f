<?php
    
    /*echo $_POST['bandera_nombre'];
    echo $_POST['bandera_paterno'];
    echo $_POST['bandera_materno'];
    echo $_POST['bandera_estatura'];
    echo $_POST['bandera_edad'];
    echo $_POST['bandera_peso'];*/

    require_once '../app/conexion.php';

    $conexion = conexion();

    $datosrecibidos = array (
        
    $nombre = $_POST['bandera_nombre'],
    $paterno = $_POST['bandera_paterno'],
    $materno = $_POST['bandera_materno'],
    $estatura = $_POST['bandera_estatura'],
    $edad = $_POST['bandera_edad'],
    $peso = $_POST['bandera_peso']
    );
    
    $query_insert = "INSERT INTO registro(nombre_usuario,paterno_usuario, materno_usuario, estatura_usuario, edad_usuario, peso_usuario)values(?,?,?,?,?,?)"; 
    $insert_preparado = $conexion->prepare($query_insert);
    $insert_preparado->bind_param('sssiii', $datosrecibidos[0],$datosrecibidos[1],$datosrecibidos[2],$datosrecibidos[3],$datosrecibidos[4],$datosrecibidos[5]); 

    echo $insert_preparado -> execute();
    $insert_preparado -> close();

?>