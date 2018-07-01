	<div class="banner-2 yellow">
			
			<div class="banner-text">
				<h2>blog</h2>
				<ul class="breadcrumb yellow">
					<li><a href="#">home</a></li>
					<li>blog</li>
				</ul>
			</div>
		</div>
	
	<div id="main">
		<div class="container">
			<div class="col-md-offset-1 col-md-10 col-sm-7 col-xs-12">
				<div class="row">
					<div class="latest-news inner yellow">
						<div class="row">
							<div class="col-xs-12">
								<div class="img-holder">
									<img src="<?php echo base_url();?>uploads/<?php echo $bl_image;?>" width="370" height="300" alt="image">

									<span class="date">
										<?php $time = $bl_date; echo
                          $time = date('g:i A, dS M Y', strtotime($time)); ?>
									</span>
									
								</div>
								<div class="news-text">
									<span class="title"><?php echo $bl_title;?></span>
									<p><?php echo $bl_desc;?></p>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>