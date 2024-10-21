<?php
include 'conexion.php';
$conn = conexion();

$accion = $_GET['accion'];

if($accion == "insertar"){

    $id_auditoria = $_POST['id_auditoria'];
    $orden = $_POST['orden'];
    $cliente = $_POST['cliente'];
    $ord_medida = $_POST['ord_medida'];
    $ter_medida = $_POST['ter_medida'];
    $pres_cantidad = $_POST['pres_cantidad'];
    $ter_cantidad = $_POST['ter_cantidad'];
    $validacion_medida = $_POST['validacion_medida'];
    $validacion_cantidad = $_POST['validacion_cantidad'];

    $sql="INSERT INTO auditoria(
          id_auditoria, orden, cliente, ord_medida, ter_medida, pres_cantidad, ter_cantidad, validacion_medida, validacion_cantidad
          )VALUE(
          '$id_auditoria', '$orden', '$cliente', '$ord_medida', '$ter_medida', '$pres_cantidad', '$ter_cantidad', '$validacion_medida', '$validacion_cantidad')";

    echo $consulta = mysqli_query($conn, $sql);
}

elseif($accion == "modificar"){

    $id_auditoria = $_POST['id_auditoria'];
    $orden = $_POST['orden'];
    $cliente = $_POST['cliente'];
    $ord_medida = $_POST['ord_medida'];
    $ter_medida = $_POST['ter_medida'];
    $pres_cantidad = $_POST['pres_cantidad'];
    $ter_cantidad = $_POST['ter_cantidad'];
    $validacion_medida = $_POST['validacion_medida'];
    $validacion_cantidad = $_POST['validacion_cantidad'];

    $sql="UPDATE auditoria SET
          orden = '$orden', 
          cliente = '$cliente', 
          ord_medida = '$ord_medida', 
          ter_medida = '$ter_medida', 
          pres_cantidad = '$pres_cantidad', 
          ter_cantidad = '$ter_cantidad', 
          validacion_medida = '$validacion_medida', 
          validacion_cantidad = '$validacion_cantidad'
          WHERE id_auditoria = '$id_auditoria'";

    echo $consulta = mysqli_query($conn, $sql);
}

elseif($accion == "borrar"){

    $id_auditoria = $_POST['id_auditoria'];

    $sql = "DELETE FROM auditoria
            WHERE id_auditoria = '$id_auditoria'";

    echo $consulta = mysqli_query($conn, $sql);
}


?>