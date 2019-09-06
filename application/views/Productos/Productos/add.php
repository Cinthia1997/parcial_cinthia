<div class="content-wrapper">
	<section class="content header">
		<h1>
			Marca
			<small>Nuevo</small>
		</h1>
		<section class="content">
			<div class="box box-solid">
				<div class="row">
					<div class="col-md-12">
					<form action="<?php echo base_url();?>Productos/store" method="POST">
						<div class="form-group">
							<label for="detalle_producto">Descripcion:</label>
							<input type="text" class="form-control" id="detalle_producto" name="detalle_producto">
						</div>
						<div class="form-group">
							<label for="codigo">codigo:</label>
							<input type="text" class="form-control" id="codigo" name="codigo">
						</div>
							<div class="form-group">
							<label for="precio_compra">precio_compra:</label>
							<input type="text" class="form-control" id="precio_compra" name="precio_compra">
						</div>
							<div class="form-group">
							<label for="precio_venta">precio_venta:</label>
							<input type="text" class="form-control" id="precio_venta" name="precio_venta">
						</div>
							<div class="form-group">
							<label for="stock_minimo">stock_minimo:</label>
							<input type="text" class="form-control" id="stock_minimo" name="stock_minimo">
						</div>
							<div class="form-group">
							<label for="stock">stock:</label>
							<input type="text" class="form-control" id="stock" name="stock">
						</div>
						 <div class="form-group">
							<label for="categoria">Categoria:</label>
							<select name="categoria" id="categoria" class="form-control">
								<?php foreach($categorias as $categoria):?>
									<?php if ($categoria->id_categoria == $producto->id_categoria):?>
									<option value="<?php echo($categoria->id_categoria)?>" selected>
									<?php echo($categoria->descripcion_categoria)?></option>
									<?php else:?>
									<option value="<?php echo($categoria->id_categoria)?>">
									<?php echo($categoria->descripcion_categoria)?></option>
									<?php endif;?>
								<?php endforeach;?>
							</select>
						</div>
						<div class="form-group">
							<label for="marca">Marca:</label>
							<select name="marca" id="marca" class="form-control">
								<?php foreach($marcas as $marca):?>
									<?php if ($marca->id_marca == $producto->id_marca):?>
									<option value="<?php echo($marca->id_marca)?>" selected>
									<?php echo($marca->descripcion)?></option>
									<?php else:?>
									<option value="<?php echo($marca->id_marca)?>">
									<?php echo($marca->descripcion_marca)?></option>
								<?php endif;?>
								<?php endforeach;?>
							</select>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success btn_flat">Guardar</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</section>

	</section>
	
</div>