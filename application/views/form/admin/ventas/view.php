<div class="row">
	<div class="col-xs-12 text-center">
		<?php echo $Configuracion->nombres ?><br>
		<?php echo $Configuracion->direccion ?><br>
		<?php echo $Configuracion->numero_telefono ?> <br>
		<?php echo $Configuracion->email ?> <br>
	</div>
</div> <br>
<div class="row">
	<div class="col-xs-6">
		<b>CLIENTE</b><br>
		<b>Nombre:</b> <?php echo $venta->nombres ?> <br>
		<b>Nro Documento:</b> <?php echo $venta->documento ?> <br>
		<b>Telefono:</b> <?php echo $venta->telefono ?> <br>
		<b>Direccion</b> <?php echo $venta->direccion ?> <br>
	</div>
	<div class="col-xs-6">
		<b>COMPROBANTE</b> <br>
		<b>Tipo de Comprobante:</b><?php echo $venta->tipocomprobante ?><br>
		<b>Serie:</b> <?php echo $venta->serie ?><br>
		<b>Nro de Comprobante:</b> <?php echo $venta->num_documento ?><br>
		<b>Fecha</b> <?php echo $venta->fecha ?>
	</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Importe</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($detalles as $detalle) : ?>
					<tr>
						<td><?php echo $detalle->codigo; ?></td>
						<td><?php echo $detalle->nombre; ?></td>
						<td><?php echo $detalle->precio; ?></td>
						<td><?php echo $detalle->cantidad; ?></td>
						<td><?php echo $detalle->importe; ?></td>
					</tr>
				<?php endforeach; ?>

			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" class="text-right"><strong>Subtotal:</strong></td>
					<td><?php echo $venta->subTotal ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>IVA:</strong></td>
					<td><?php echo $venta->iva ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Descuento:</strong></td>
					<td><?php echo $venta->descuentoTotal ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Total:</strong></td>
					<td><?php echo $venta->importeTotal ?></td>
				</tr>
			</tfoot>

	</div> <br>
	</table>
</div>
<div class="row">
	<div class="col-xs-6 ">
		<br>----------------------------<br>
		<br>Firma<br>
		<br>Nombre:<?php echo $encargado->nombre ?> <br>
		<br>Carnet de Identidad:<?php echo $encargado->num_documento ?> <br>
		<br> <br>
	</div>
	<div class="col-xs-6 ">
		<br>----------------------------<br>
		<br>Firma<br>
		<br>Nombre:<?php echo $encargado->nombre ?> <br>
		<br>Carnet de Identidad:<?php echo $encargado->num_documento ?> <br>
		<br> <br>
	</div>
</div>