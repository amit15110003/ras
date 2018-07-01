<div class="banner-2 yellow">
			<div class="banner-text">
				<h2>blog simple</h2>
				<ul class="breadcrumb yellow">
					<li><a href="#">home</a></li>
					<li>blog</li>
				</ul>
			</div>
			
		</div>
		
		
		<div class="page-section white">
			<div class="container">
				<div class="row">
					<div class="p_courses yellow">
						
						
						<div class="update-holder"  >
								<?php foreach ($query as $row) {$name = str_replace(' ', '_', $row->bl_title);?>
							<div class="update-box" style="-webkit-box-shadow: -3px -3px 62px -15px rgba(0,0,0,0.75);
-moz-box-shadow: -3px -3px 40px -15px rgba(0,0,0,0.75);
box-shadow: -3px -3px 40px -15px rgba(0,0,0,0.75);padding:10px 10px;" >
								<div class="row" >
									<div class="col-md-6 col-xs-12 img-block">
										<img src="<?php echo base_url();?>uploads/thumb/<?php echo $row->bl_image;?>" width="570" height="260" alt="image">
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="text-block">
											<div class="holder_1">
												<span class="date"><?php $time = $row->bl_date; echo
                          $time = date(' dS M Y', strtotime($time)); ?></span>
												
											</div>
											<span class="title"><?php echo $row->bl_title;?></span>
											<p><?php $quest=entity_decode($row->bl_desc,$charset = NULL); echo word_limiter(auto_typography(html_escape($quest)),20);?></p>
											<div class="register-holder">
												<a class="btn" href="<?php echo base_url();?>index.php/ras/blogdetails/<?php echo $name;?>">Read More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php }?>
						</div>
								
					</div>
				</div>
			</div>
		</div>