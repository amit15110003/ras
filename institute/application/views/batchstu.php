<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Batch
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
					Active
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
					Disabled
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
					<i class="m-menu__link-icon fa fa-user-plus"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="m_widget4_tab1_content">
				<div class="m-widget4 m-widget4--progress">
					<?php foreach ($query as $member) { if($member->b_status=="1") {?>
						<div class="m-widget4__item">
							<div class="m-widget4__info">
								<span class="m-widget4__title">
								<?php echo $member->b_name;?>
								</span><br> 
								<span class="m-widget4__sub">
								<?php echo $member->b_desc;?> 
								</span>							 		 
							</div>
							<div class="m-widget4__progress">
							</div>
							<div class="m-widget4__ext">
								<a class="btn btn-danger" href="<?php echo base_url();?>/index.php/home/toggle_batch/<?php echo $member->b_id; ?>/<?php echo $member->b_status; ?>">Disable</a>
							</div>
						</div>
					<?php }}?>					 
				</div>            
			</div>
			<div class="tab-pane" id="m_widget4_tab2_content">
				<div class="m-widget4 m-widget4--progress">
					<?php foreach ($query as $member) { if($member->b_status!="1") {?>
						<div class="m-widget4__item">
							<div class="m-widget4__info">
								<span class="m-widget4__title">
								<?php echo $member->b_name;?>
								</span><br> 
								<span class="m-widget4__sub">
								<?php echo $member->b_desc;?> 
								</span>							 		 
							</div>
							<div class="m-widget4__progress">
							</div>
							<div class="m-widget4__ext">
								<a class="btn btn-info" href="<?php echo base_url();?>/index.php/home/toggle_batch/<?php echo $member->b_id; ?>/<?php echo $member->b_status; ?>">Activate</a>
							</div>
						</div>
					<?php }}?>					 
				</div> 						 
			</div>
			<div class="tab-pane" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "add_member"); echo form_open_multipart("home/add_batch", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	

			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Batch Name:</label>
								<div class="col-lg-6">
								<select class="form-control m-input" name="b_id" id="exampleSelect1">
								<?php foreach ($query as $member) {?>
										<option value="<?php echo $member->b_id;?>"><?php echo $member->b_name;?></option>
									<?php }?>	
								</select>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Status:</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="u_id" id="exampleSelect1" multiple="" data-select2-id="m_select2_3">
										<?php foreach ($query1 as $member) {?>
										<option value="<?php echo $member->u_id;?>"><?php echo $member->u_name;?></option>
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
</div>
<!--end:: Widgets/User Progress -->  </div></div>