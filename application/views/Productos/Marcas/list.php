<div class="content-wrapper">
	<section class="content header">
		<h1>
			Marca
			<small>Listado</small>
		</h1>
		<section class="content">
			<div class="box box-solid">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo base_url();?>Marcas/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Agregar Marca</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<table id="example1" class="table table-bordered btn-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Descripcion</th>
									<th>Estado</th>
									<th>Opciones</th>
								</tr>	
							</thead>
							<tbody>
									<?php if (!empty($marcas)):?>
										<?php foreach ($marcas as $marca):?>
									<tr>
										<td><?php echo $marca->id_marca;?></td>
										<td><?php echo $marca->descripcion_marca;?></td>
										<td><?php echo $marca->estado_marca;?></td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-info btn-view-marca" data-toggle="modal" data-target="#modal-default" value="<?php echo $marca->id_marca; ?>">
               										<span class="fa fa-search"></span>
             									</button>

												<a href="<?php echo base_url();?>Marcas/edit/<?php echo $marca->id_marca;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
												<a href="<?php echo base_url();?>Marcas/delete/<?php echo $marca->id_marca;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
												
											</div>
										</td>
									</tr>
								     <?php endforeach;?>
								    <?php endif;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>

	</section>
	
</div>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title"><center>Informacion de la Marca</center></h2>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->