<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Update Attendance
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
			<div class="tab-pane" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "update_attend"); echo form_open_multipart("user/update_attend/$u_id", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	
						<input type="hidden" name="u_id" value="<?php echo $u_id;?>">
			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">jan:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="jan" placeholder="" value="<?php echo $jan;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">feb:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="feb" placeholder="" value="<?php echo $feb;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">mar</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="mar" placeholder="" value="<?php echo $mar;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">april</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="apr" placeholder="" value="<?php echo $apr;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">may</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="may" placeholder="" value="<?php echo $may;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">june</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="jun" placeholder="" value="<?php echo $jun;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">july</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="jul" placeholder="" value="<?php echo $jul;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">august</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="aug" placeholder="" value="<?php echo $aug;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">september</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="sep" placeholder="" value="<?php echo $sep;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">october</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="oct" placeholder="" value="<?php echo $oct;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">november</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="nov" placeholder="" value="<?php echo $nov;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">december</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="dece" placeholder="" value="<?php echo $dece;?>">
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
			</div></div></div>
		</div>
	</div>

<!--end:: Widgets/User Progress -->