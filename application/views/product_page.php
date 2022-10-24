<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Products Page</title>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding: 0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>

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
				<h3 class="box-title">Product List - <?php echo $seller_name; ?></h3>

			</div>

		</div>

		<div class="col-xs-12">

			<table class="table" id="vat_table">
				<thead style="font-size: 16px;">
					<tr>
						<th>ID</th>
						<th>Product Name</th>
						<th>Available Qty</th>
						<th>Actions</th>

					</tr>
				</thead>

				<tbody>


					<?php

					$i = 1;

					?>


					<?php


					?>

					<?php if (!empty($product_details)) {
						foreach ($product_details as $product_detail) {   ?>
							<tr id="subtypes">

								<td><?php echo $i; ?></td>
								<td><?php echo $product_detail['product_name'] ?></td>
								<td><?php echo $product_detail['product_count'] ?></td>


								<td>
									<a data-toggle="modal" data-toggle="tooltip" title="View" id="loadmodalview" data-name="<?php echo $product_detail['product_name']; ?>" data-price="<?php echo $product_detail['product_price']; ?>" data-discription="<?php echo $product_detail['product_discription']; ?>" data-count="<?php echo $product_detail['product_count']; ?>" data-target="#viewModal" href="" class="btn btn-info">Product Details</a>
								</td>



							</tr>
						<?php $i++;
						} ?>

					<?php  } else { ?>

						<tr>
							<td colspan="5">Products not found</td>
						</tr>
					<?php } ?>

				</tbody>
			</table>

		</div>

	</div>


</body>

</html>


<!-- view product details modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="statustitle">View Product Details</h4>
				</button>
			</div>
			<div class="modal-body">

				<div class="box-body">
					<div class="row">
						<div class="col-sm-12">

							<div class="panel panel-default">

								<div class="panel-body">

									<form id="form_edit_status" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form" action="<?php echo base_url('/EbaymanagementController/saveseller/') ?>">




										<div class="row">

											<div class="col-sm-6">
												<div class="form-group">
													<label for="">Product Name</label>
													<input type="text" value="" name="name" id="name" class="form-control" readonly>
													<div class="help-block with-errors"></div>
												</div>
											</div>

										</div>

										<div class="row">

											<div class="col-sm-6">
												<div class="form-group">
													<label for="">Product Price</label>
													<input type="text" value="" name="price" id="price" class="form-control" readonly>
													<div class="help-block with-errors"></div>
												</div>
											</div>

										</div>

										<div class="row">

											<div class="col-sm-6">
												<div class="form-group">
													<label for="">Available Item</label>
													<input type="text" value="" name="count" id="count" class="form-control" readonly>
													<div class="help-block with-errors"></div>
												</div>
											</div>

										</div>

										<div class="row">

											<div class="col-sm-6">
												<div class="form-group">
													<label for="">Product Discription</label>
													<input type="text" value="" name="discription" id="discription" class="form-control" readonly>
													<div class="help-block with-errors"></div>
												</div>
											</div>

										</div>




										<div class="form-group  pull-right">
											<button type="button" class="btn btn-danger" id="modalclose" data-dismiss="modal">Close</button>

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