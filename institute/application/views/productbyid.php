<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Update Product
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
			<div class="tab-pane" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "add_product"); echo form_open_multipart("product/update_Product/.$r_id", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	
						<input type="hidden" name="r_id" value="<?php echo $r_id;?>">
			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Product Name:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="r_name" placeholder="" value="<?php echo $r_name;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Product Description:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="r_desc" placeholder="" value="<?php echo $r_desc;?>">
								</div>
							</div>
							
							<div class="m-form__group form-group row">
							<div class="col-lg-8 ">
	      									<img src="<?php echo base_url(); ?>../uploads/product/thumb/<?php echo $r_image; ?>" class="img-responsive center-block">
	      						<input type="hidden" name="r_image" value="<?php echo $r_image;?>">
	      					</div>	
	      					</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Image:</label>

								<div class="col-lg-6">
									<input type="file" name="picture" class="custom-file-input" id="customFile">
								  	<label class="custom-file-label" for="customFile">Choose file</label>
								</div>
							</div>
						
							
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Status:</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="r_status" id="exampleSelect1">
										<option value="1">Active</option>
										<option value="0">Disabled</option>
									</select>
								</div>
							</div>
						</div>
		            </div>
		            <div class="m-portlet__foot m-portlet__foot--fit">
						<div class="m-form__actions m-form__actions">
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-6">
									<button type="submit" class="btn btn-primary" value="Upload">Submit</button>
									<button type="reset" class="btn btn-secondary">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
				<!--end::Form-->
			</div>
		</div>
	</div>

<!--end:: Widgets/User Progress -->  </div></div>