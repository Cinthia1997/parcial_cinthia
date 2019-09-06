<div class="content-wrapper">
	<section class="content header">
		<h1>
			Producto
			<small>Nuevo</small>
		</h1>
		<section class="content">
			<div class="box box-solid">
				<div class="row">
					<div class="col-md-12">
					<form action="<?php echo base_url();?>Productos/update" method="POST">
						<input type="hidden" value="<?php echo $producto->id_producto;?>"name="id"></input>
						<div class="form-group">
							<label for="detalle_producto">detalle_producto:</label>
							<input type="text" class="form-control" id="detalle_producto" name="detalle_producto" value="<?php echo $producto->detalle_producto?>">
						</div>
						<div class="form-group">
							<label for="codigo">codigo:</label>
							<input type="text" class="form-control" id="codigo" name="codigo"value="<?php echo $producto->codigo ?>">
						</div>
						<div class="form-group">
							<label for="precio_compra">precio_compra:</label>
							<input type="text" class="form-control" id="precio_compra" name="precio_compra"value="<?php echo $producto->precio_compra?>">
						</div>
						<div class="form-group">
							<label for="precio_venta">precio_venta:</label>
							<input type="text" class="form-control" id="precio_venta" name="precio_venta"value="<?php echo $producto->precio_venta?>">
						</div>
						<div class="form-group">
							<label for="stock_minimo">stock_minimo:</label>
							<input type="text" class="form-control" id="stock_minimo" name="stock_minimo"value="<?php echo $producto->stock_minimo ?>">
						</div>
						<div class="form-group">
							<label for="stock">stock:</label>
							<input type="text" class="form-control" id="estado" name="stock"value="<?php echo $producto->stock ?>">
						</div>
						<div class="form-group">
							<label for="categoria">Categoria:</label>
							<select name="categoria" id="categoria" class="form-control">
								<?php foreach($categorias as $categoria):?>
									<option value="<?php echo($categoria->id_categoria)?>"><?php echo($categoria->descripcion)?></option>
								<?php endforeach?>
							</select>
						</div>
						
						<div class="form-group">
							<label for="marca">Marca:</label>
							<select name="marca" id="marca" class="form-control">
								<?php foreach($marcas as $marca):?>
									<option value="<?php echo($marca->id_marca)?>"><?php echo($marca->descripcion_marca)?></option>
								<?php endforeach;?>
							</select>
						</div>
						<div class="form-group">
							<label for="estado">Estado:</label>
							<input type="text" class="form-control" id="estado" name="estado"value="<?php echo $producto->estado?>">
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