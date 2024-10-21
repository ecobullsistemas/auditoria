<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/funciones_auditoria.js"></script>
    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tabla"></div>
	</div>
	<!-- MODAL PARA INSERTAR REGISTROS -->
	<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">Agregar cliente</h4>
		    </div>
		    <div class="modal-body">
			<label>id_auditoria</label>
			<input type="number" id="id_auditoria" class="form-control input-sm" required="">
			<label>orden</label>
			<textarea id="orden" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>cliente</label>
			<textarea id="cliente" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>ord_medida</label>
			<textarea id="ord_medida" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>ter_medida</label>
			<textarea id="ter_medida" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>pres_cantidad</label>
			<textarea id="pres_cantidad" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>ter_cantidad</label>
			<textarea id="ter_cantidad" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>validacion_medida</label>
			<textarea id="validacion_medida" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>validacion_cantidad</label>
			<textarea id="validacion_cantidad" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			</div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
			    Agregar
			</button>
		    </div>
		</div>
	    </div>
	</div>
	<!-- MODAL PARA EDICION DE DATOS-->
	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
		    </div>
		    <div class="modal-body">
			<input type="number" hidden="" id="id_auditoriau">
			<label>orden</label>
			<textarea id="ordenu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>cliente</label>
			<textarea id="clienteu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>ord_medida</label>
			<textarea id="ord_medidau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>ter_medida</label>
			<textarea id="ter_medidau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>pres_cantidad</label>
			<textarea id="pres_cantidadu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>ter_cantidad</label>
			<textarea id="ter_cantidadu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>validacion_medida</label>
			<textarea id="validacion_medidau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>validacion_cantidad</label>
			<textarea id="validacion_cantidadu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			</div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">
			    Actualizar
			</button>
		    </div>
		</div>
	    </div>
	</div>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tabla').load('componentes/vista_auditoria.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    id_auditoria = $('#id_auditoria').val();
		    orden = $('#orden').val();
		    cliente = $('#cliente').val();
		    ord_medida = $('#ord_medida').val();
		    ter_medida = $('#ter_medida').val();
		    pres_cantidad = $('#pres_cantidad').val();
		    ter_cantidad = $('#ter_cantidad').val();
		    validacion_medida = $('#validacion_medida').val();
		    validacion_cantidad = $('#validacion_cantidad').val();
		    agregardatos(id_auditoria, orden, cliente, ord_medida, ter_medida, pres_cantidad, ter_cantidad, validacion_medida, validacion_cantidad);
		});
		$('#actualizadatos').click(function () {
		    modificarCliente();
		});
	    });
	</script>
	<?php
	include './footer.php';
	?>
    </body>
</html>
