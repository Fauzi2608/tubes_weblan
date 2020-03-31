<!DOCTYPE html>
<html lang="en">


<body id="page-top">

	
	<div id="wrapper">

		

		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- DataTables -->
				<div class="card mb-3">
					
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Harga</th>
										<th>Photo</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->name ?>
										</td>
										<td>
											<?php echo $product->Harga ?>
										</td>
										<td>
											<img src="<?php echo base_url()?>./assets/img/shop/<?php echo $product->foto; ?>" width="150px" height="150px" alt="">
										</td>
										<td width="250">
											<a href="<?php echo base_url('admin/products/edit/'.$product->product_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	
</body>

</html>