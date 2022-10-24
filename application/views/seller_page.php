<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Seller Page</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>

	<div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Seller Page</h3>
				<div class="box-tools">
					<a data-toggle="modal" id="loadmodal" data-toggle="tooltip" href="" data-target="#addModal" class="btn btn-primary" title="Status">Add New Seller</a>
				</div>
			</div>

		</div>

		<div class="col-xs-12">

			<table class="table" id="vat_table">
				<thead style="font-size: 16px;">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Actions</th>

					</tr>
				</thead>

				<tbody>


					<?php

					$i = 1;

					?>


					<?php


					?>

					<?php if (!empty($sell_details)) {
						foreach ($sell_details as $sell_detail) {   ?>
							<tr id="subtypes">

								<td><?php echo $i; ?></td>
								<td><?php echo $sell_detail['seller_name'] ?></td>
								<td><?php echo $sell_detail['seller_email'] ?></td>


								<td>
									<a data-toggle="tooltip" href="<?php echo base_url() . 'EbaymanagementController/product_view/' . $sell_detail['id'] ?>" title="Edit" class="btn btn-info">Products</a>
									<a data-toggle="modal" data-toggle="tooltip" title="View" id="loadmodaledit" data-name="<?php echo $sell_detail['seller_name']; ?>" data-email="<?php echo $sell_detail['seller_email']; ?>" data-status="<?php echo $sell_detail['status']; ?>" data-s_id="<?php echo $sell_detail['id']; ?>" data-target="#addModal" href="" class="btn btn-warning">Edit</a>
								</td>



							</tr>
						<?php $i++;
						} ?>

					<?php  } else { ?>

						<tr>
							<td colspan="5">Sellers not found</td>
						</tr>
					<?php } ?>



				</tbody>
			</table>

		</div>

	</div>


</body>

</html>


<!-- add Seller modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="statustitle">Add New Seller</h4>
				</button>
			</div>
			<div class="modal-body">

				<div class="box-body">
					<div class="row">
						<div class="col-sm-12">

							<div class="panel panel-default">

								<div class="panel-body">

									<form id="form_edit_status" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form" action="<?php echo base_url('/EbaymanagementController/saveseller/') ?>">


										<input type="hidden" value="0" name="edit_status" id="edit_status" class="form-control">
										<input type="hidden" value="" name="s_id" id="s_id" class="form-control">

										<div class="row">

											<div class="col-sm-6">
												<div class="form-group">
													<label for="">Seller Name</label>
													<input type="text" value="" name="name" id="name" class="form-control" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>

										</div>

										<div class="row">

											<div class="col-sm-6">
												<div class="form-group">
													<label for="">Seller Email</label>
													<input type="text" value="" name="email" id="email" class="form-control" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>

										</div>


										<div style="padding-top: 3px;padding-bottom: 3px;">
											<label style="margin-bottom: 11px;" for="">Seller status</label>
											<div style="margin-bottom: 16px;" class="form-check form-check-inline">

												<label for="">Active</label>&nbsp;
												<input style="margin-bottom: 5px;" class="form-check-input" type="radio" id="status_type1" name="status_type_val" value="1" checked="checked">&nbsp;&nbsp;&nbsp;&nbsp;


												<label for="">Inactive</label>&nbsp;
												<input style="margin-bottom: 5px;" class="form-check-input" type="radio" id="status_type2" name="status_type_val" value="0">
											</div>
										</div>

										<div class="form-group  pull-right">
											<button type="button" class="btn btn-danger" id="modalclose" data-dismiss="modal">Close</button>
											<button type="submit" id="save_pr_viva_data" class="btn btn-success">Save</button>&nbsp;
										</div>
								</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="modal-footer">

			</div>
			</form>
		</div>
	</div>
</div>