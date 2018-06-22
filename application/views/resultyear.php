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
						<a href="<?php echo base_url();?>index.php/ras/resultsbyyear/<?php echo $row->r_year;?>">
						<div class="col-sm-4 col-xs-12">
							<div class="p_column">
								<div class="text-frame">
									<span class="title text-center"><?php echo $row->r_year;?></span>
								</div>
							</div>
						</div>
						</a>
						<?php }?>
					</div>
				</div>
			</div>
		</div>