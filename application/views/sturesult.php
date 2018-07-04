<div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>index.php/profile/index" class="">Profile</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/profile/sturesult">Results</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/profile/attend">Attendance</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/profile/asked">Asked Questions</a></li>
                    </ul>
                </div>
            </div>
        </div>


<!-- END: Left Aside -->							
		   	<div class="m-grid__item m-grid__item--fluid m-wrapper">
			    			    
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		
                <div class="container"> 
                <div class="col-md-3" style="display: block;z-index: 5000">
                    <div class="pro-user" style="background-color: #fff; z-index:5000">
                        <img src="<?php echo base_url(); ?>media/img/avtar/<?php echo $result = $this->session->userdata('profileimg'); ?>" alt="user" class="center-block" style="height: 100px; width: 100px;" >
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li style="color: #203245">
                                <h4><?php echo $result = $this->session->userdata('u_name'); ?></h4>
                            </li>
                            <li style="color: #203245">Student Id: <?php echo $result = $this->session->userdata('u_card'); ?></li>
                        </ul>
                    </div>
                </div>



		<div class="col-md-9 col-sm-12">
            <div class="udb">

				<div class="udb-sec udb-prof ">
				           <h4>Test Results</h4>
				                            
				    <div class="sdb-tabl-com sdb-pro-table">
						<!--begin: Datatable -->
						<table class="responsive-table bordered" id="html_table" width="100%">
							<thead>
							<tr>
								<th title="Field #1">Test Name</th>
								<th title="Field #2">Date</th>
								<th title="Field #3">Batch-Sub</th>
								<th title="Field #4">Full Marks</th>
								<th title="Field #5">Obtained</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($query as $row) {?>
							<tr>
								<td><?php echo $row->t_name;?></td>
								<td><?php echo $row->t_date;?></td>
								<td><?php echo $row->t_batch;?>-<?php echo $row->t_sub;?></td>
								<td><?php echo $row->t_fmarks;?></td>
								<td><?php echo $row->stu_scored;?></td>
							</tr>
							<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	</div>	        </div>
					    		    </div>
					    		</div>

						
				
				<!-- end:: Body -->
