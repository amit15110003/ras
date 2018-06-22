<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Update Annual Result
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
			<div class="tab-pane" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "update"); echo form_open_multipart("result/update_result/", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	

						<input type="hidden" name="r_id" value="<?php echo $r_id;?>">
			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Name:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="r_name"  value="<?php echo $r_name;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Result Description:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="r_desc"  value="<?php echo $r_desc;?>">
								</div>
							</div>
												
							
									<input type="hidden" name="r_image" value="<?php echo $r_image;?>">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Image:</label>
								<div class="col-lg-6">
									<input type="file" name="picture" class="custom-file-input" id="customFile">
								  	<label class="custom-file-label" for="customFile">Choose file</label>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Year:</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="r_year" id="exampleSelect1">
										<option value="<?php echo $r_year;?>" selected><?php echo $r_year;?></option>
										<option value="2005">2005</option>
										<option value="2006">2006</option>
										<option value="2007">2007</option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
										<option value="2025">2025</option>
									</select>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Result/ Testimonial:</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="r_type" id="exampleSelect1">
										<option value="1" <?php if($r_type=="1"){echo "selected";}?>>Result</option>
										<option value="0" <?php if($r_type=="0"){echo "selected";}?>>Testimonial</option>
									</select>
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