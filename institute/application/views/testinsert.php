<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Add Student
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
			<div class="tab-pane" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "add_member"); echo form_open_multipart("user/add_user", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	

			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Test Name:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="t_name" placeholder="">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Full Marks</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="u_fmarks" placeholder="">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Date</label>
								<div class="col-lg-6">
									<input type="date" class="form-control m-input" name="u_date" placeholder="">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Class:</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="t_class" id="exampleSelect1">
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Subject:</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="t_sub" id="exampleSelect1">
										<option value="8">Chemistry</option>
										<option value="9">Physics</option>
										<option value="10">Mathematics</option>
										<option value="11">Biology</option>
									</select>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Batch Name:</label>
								<div class="col-lg-6">
								<select class="form-control m-input" name="t_batch" id="exampleSelect1">
								<?php foreach ($query as $member) {?>
										<option value="<?php echo $member->b_id;?>"><?php echo $member->b_name;?></option>
									<?php }?>	
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
									<button type="submit" class="btn btn-primary">Submit</button>
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