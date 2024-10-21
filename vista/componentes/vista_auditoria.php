<?php
include_once '../../modelo/conexion.php';
$conn = conexion();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>arreglos</title>
</head>
<div class="row"><br><br><br><br>
    <div>
<center>
<h2>auditoria</h2>
</center>
</div>
    <table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th>orden</th>
            <th>cliente</th>
            <th>ord_medida</th>
            <th>ter_medida</th>
            <th>pres_cantidad</th>
            <th>ter_cantidad</th>
            <th>validacion_medida</th>
            <th>validacion_cantidad</th>
        </tr>
   </thead>
    <tbody>
    <?php
    $sql = 'SELECT
        ord.orden as orden,
        ord.cliente as cliente,
        ord.medida as ord_medida,
        bt.medida_cm as ter_medida,
        pre.pres_cantidad as pres_cantidad,
        ter.cantidad as ter_cantidad,
        IF(ord.medida = bt.medida_cm, "OK", "NOVEDAD") AS validacion_medida,
        IF(pre.pres_cantidad = ter.cantidad, "OK", "NOVEDAD") AS validacion_cantidad
        FROM `ordenes_produccion` as ord,
        ordenes_produccion_pres as pre,
        bolsa_terminada as ter,
        bolsas as bt
        WHERE ord.id_orden = pre.orden_id
        AND ter.orden_id = pre.orden_id
        AND bt.id_bolsa = ter.bolsa_id
        ORDER BY ord.id_orden DESC';
    $result = mysqli_query($conn, $sql);
    WHILE($fila = mysqli_fetch_assoc($result)){
        $datos =  $fila['orden'] . "||" .
                  $fila['cliente'] . "||" .
                  $fila['ord_medida'] . "||" .
                  $fila['ter_medida'] . "||" .
                  $fila['pres_cantidad'] . "||" .
                  $fila['ter_cantidad'] . "||" .
                  $fila['validacion_medida'] . "||" .
                  $fila['validacion_cantidad'];
    ?>
        <tr>
            <td><?php echo $fila['orden']; ?></td>
            <td><?php echo $fila['cliente']; ?></td>
            <td><?php echo $fila['ord_medida']; ?></td>
            <td><?php echo $fila['ter_medida']; ?></td>
            <td><?php echo $fila['pres_cantidad']; ?></td>
            <td><?php echo $fila['ter_cantidad']; ?></td>
            <td><?php echo $fila['validacion_medida']; ?></td>
            <td><?php echo $fila['validacion_cantidad']; ?></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</div>
</body>
</html>
<?php
mysqli_close($conn);
?>
