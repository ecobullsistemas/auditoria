function agregardatos(id_auditoria, orden, cliente, ord_medida, ter_medida, pres_cantidad, ter_cantidad, validacion_medida, validacion_cantidad){
    cadena = "id_auditoria=" + id_auditoria +
    "&orden=" + orden +
    "&cliente=" + cliente +
    "&ord_medida=" + ord_medida +
    "&ter_medida=" + ter_medida +
    "&pres_cantidad=" + pres_cantidad +
    "&ter_cantidad=" + ter_cantidad +
    "&validacion_medida=" + validacion_medida +
    "&validacion_cantidad=" + validacion_cantidad;

    accion = "insertar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#id_auditoriau').val(d[0]);
    $('#ordenu').val(d[1]);
    $('#clienteu').val(d[2]);
    $('#ord_medidau').val(d[3]);
    $('#ter_medidau').val(d[4]);
    $('#pres_cantidadu').val(d[5]);
    $('#ter_cantidadu').val(d[6]);
    $('#validacion_medidau').val(d[7]);
    $('#validacion_cantidadu').val(d[8]);
}

function modificarCliente(){
    id_auditoria = $('#id_auditoriau').val();
    orden = $('#ordenu').val();
    cliente = $('#clienteu').val();
    ord_medida = $('#ord_medidau').val();
    ter_medida = $('#ter_medidau').val();
    pres_cantidad = $('#pres_cantidadu').val();
    ter_cantidad = $('#ter_cantidadu').val();
    validacion_medida = $('#validacion_medidau').val();
    validacion_cantidad = $('#validacion_cantidadu').val();
    cadena = "id_auditoria=" + id_auditoria +
    "&orden=" + orden +
    "&cliente=" + cliente +
    "&ord_medida=" + ord_medida +
    "&ter_medida=" + ter_medida +
    "&pres_cantidad=" + pres_cantidad +
    "&ter_cantidad=" + ter_cantidad +
    "&validacion_medida=" + validacion_medida +
    "&validacion_cantidad=" + validacion_cantidad;

    accion = "modificar";
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(id_auditoria) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(id_auditoria);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(id_auditoria) {
    cadena = "id_auditoria=" + id_auditoria;

    accion = "borrar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/auditoria_modelo.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
            $('#tabla').load('../vista/componentes/vista_auditoria.php');
                alert(mensaje_si);
            } else {
                alert(mensaje_no);
            }
        }
    });
}
