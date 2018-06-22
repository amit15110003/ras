<div class="banner-2 yellow">
			
			<div class="banner-text">
				<h2>Results </h2>
				<ul class="breadcrumb yellow">
					<li><a href="#">home</a></li>
					<li>Results</li>
				</ul>
			</div>
			
		</div>
		
		
		<div class="page-section white">
			<div class="container">
				<div class="row">
					<div class="p_courses yellow">
						<?php foreach ($query as $row) {?>
						<div class="col-sm-4 col-xs-12">
							<div class="p_column">
								<div class="image-box">
									<img src="<?php echo base_url();?>uploads/thumb/<?php echo $row->r_image;?>" width="370" height="280" alt="image">
								</div>
								<div class="text-frame">
									<span class="title text-center"><?php echo $row->r_name;?></span>
									<p><?php echo $row->r_desc;?></p>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>