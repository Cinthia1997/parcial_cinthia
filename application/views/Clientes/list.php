























<div class="content-wrapper">
	<section class="content header">
		<h1>
			Cliente
			<small>Listado</small>
		</h1>
		<section class="content">
			<div class="box box-solid">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo base_url();?>Clientes/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Agregar Cliente</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<table id="example1" class="table table-bordered btn-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Razon Social</th>
									<th>Direccion</th>
									<th>Nº Documento</th>
									<th>Telefono</th>
									<th>Estado</th>
									<th>Opciones</th>
								</tr>	
							</thead>
							<tbody>
									<?php if (!empty($clientes)):?>
										<?php foreach ($clientes as $cliente):?>
									<tr>
										<td><?php echo $cliente->id_cliente;?></td>
										<td><?php echo $cliente->razon_social;?></td>
										<td><?php echo $cliente->direccion_cliente;?></td>
										<td><?php echo $cliente->nro_documento;?></td>
										<td><?php echo $cliente->telefono_cliente;?></td>
										<td><?php echo $cliente->estado;?></td>

										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-info btn-view-cliente" data-toggle="modal" data-target="#modal-default" value="<?php echo $cliente->id_cliente; ?>">
               										<span class="fa fa-search"></span>
             									</button>

												<a href="<?php echo base_url();?>Clientes/edit/<?php echo $cliente->id_cliente;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
												<a href="<?php echo base_url();?>Clientes/delete/<?php echo $cliente->id_cliente;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
												
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
        <h3 class="modal-title">Informacion del Cliente</h3>
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