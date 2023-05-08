<div class="content-wrapper" style="min-height: 1302.32px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>stocks</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Stocks</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<a href="#" onclick="add_stox()" class="btn btn-primary">Add Stock</a>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="stox_list" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th style="width: 10px">Sr.No</th>
										<th>Name</th>
										<td >Action</td>
									</tr>
								</thead>
								<tbody>
									<?php if($stoxs): ?>
										<?php
										$row_count = 1;
										foreach($stoxs as $stox): ?>
											<tr>
												<td><?php echo $row_count;?>.</td>
												<td><?php echo $stox->name; ?></td>
												<td>
													
													<a href="#" onclick="edit_stox('<?php echo $stox->id; ?>')" style="cursor: pointer;" class="btn btn-primary">Edit</a>
													<!-- <form action="<?php echo base_url('stox/delete/'.$stox->id) ?>" method="post" style="display: unset;" >
														<button class="btn btn-danger" type="submit">Delete</button>
													</form> -->
												</td>
											</tr>
											<?php $row_count++; ?>
										<?php endforeach; ?>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
						
					</div>
					<!-- /.card -->

				</div>
				<!-- /.col -->
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<div class="modal" id="edit_stox" aria-modal="true" role="dialog" style="padding-right: 15px; ">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit Stock</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" id="form" class="form-horizontal">
						<input type="hidden" value="" name="id"/> 
						<div class="form-body">
							<div class="form-group">
								<label class="control-label col-md-3">Name</label>
								<div class="col-md-9">
									<input name="name" placeholder="Stock Name" class="form-control" type="text" required>
									<span class="help-block"></span>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" id="btnSave" onclick="saveStox('update')" class="btn btn-primary update">Save</button>
					<button type="button" id="btnSave" onclick="saveStox('add')" class="btn btn-primary add">Save</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.content -->
</div>


