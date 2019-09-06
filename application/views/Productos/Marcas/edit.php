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
					<form action="<?php echo base_url();?>Marcas/update" method="POST">
						<input type="hidden" value="<?php echo $marca->id_marca;?>"name="idMarca"></input>
						<div class="form-group">
							<label for="descripcion_marca">Descripcion:</label>
							<input type="text" class="form-control" id="descripcion_marca" name="descripcion_marca" value="<?php echo $marca->descripcion_marca?>">
						</div>
						<div class="form-group">
							<label for="estado_marca">Estado:</label>
							<input type="text" class="form-control" id="estado_marca" name="estado_marca"value="<?php echo $marca->estado_marca ?>">
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