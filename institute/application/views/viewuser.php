<!-- END: Left Aside -->							
		   	<div class="m-grid__item m-grid__item--fluid m-wrapper">
			    			    
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Student Details
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
</div>				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="form-group m-form__group row align-items-center">
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
								<div class="m-form__label">
									<label>Status:</label>
								</div>
								<div class="m-form__control">
									<select class="form-control m-bootstrap-select" id="m_form_status">
										<option value="">All</option>
										<option value="1">Pending</option>
										<option value="2">Delivered</option>
										<option value="3">Canceled</option>
									</select>
								</div>
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
								<div class="m-form__label">
									<label class="m-label m-label--single">Type:</label>
								</div>
								<div class="m-form__control">
									<select class="form-control m-bootstrap-select" id="m_form_type">
										<option value="">All</option>
										<option value="1">Online</option>
										<option value="2">Retail</option>
										<option value="3">Direct</option>
									</select>
								</div>
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-input-icon m-input-icon--left">
								<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
								<span class="m-input-icon__icon m-input-icon__icon--left">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 order-1 order-xl-2 m--align-right">
					<a href="<?php echo base_url();?>index.php/user/insertuser" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-cart-plus"></i>
							<span>Add New</span>
						</span>
					</a>
					<div class="m-separator m-separator--dashed d-xl-none"></div>
				</div>
			</div>
		</div>
		<!--end: Search Form -->

		<!--begin: Datatable -->
		<table class="m-datatable" id="html_table" width="100%">
			<thead>
			<tr>
				<th title="Field #2">Student Name</th>
				<th title="Field #3">RAS No</th>
				<th title="Field #4">Contact</th>
				<th title="Field #4">Batch</th>
				<th title="Field #6">Result</th>
				<th title="Field #7">Edit</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($query as $row) {?>
			<tr>
				<td><?php echo $row->u_name;?></td>
				<td><?php echo $row->u_card;?></td>
				<td><?php echo $row->u_contact;?></td>
				<td><?php echo $row->u_class;?>-<?php echo $row->u_batch;?></td>
				<td><a href="<?php echo base_url();?>index.php/user/result_id/<?php echo $row->u_card;?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"><span>View/Edit</span>
					</a></td>
				<td><a href="<?php echo base_url();?>index.php/user/user_id/<?php echo $row->u_id;?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"><span>Update</span>
					</a></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<!--end: Datatable -->
	</div>
</div>		        </div>
			    		    </div>

				
		
				<!-- end:: Body -->
