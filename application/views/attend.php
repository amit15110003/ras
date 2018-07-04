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
		<div class="col-md-3" style="display: block;z-index: 5000">
                    <div class="pro-user" style="background-color: #fff; z-index: 5000;">
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
				           <h4>Attendance</h4>
				                            
				    <div class="sdb-tabl-com sdb-pro-table">
						<!--begin: Datatable -->
						<table class="responsive-table bordered" id="html_table" width="100%">
							<thead>
							<tr>
								<th title="Field #1">Month</th>
								<th title="Field #2">Attendence Count</th>
								
								
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>January:</td> <td><?php echo $jan;?></td>
							</tr>
							<tr>
								
								<td>February:</td> <td> <?php echo $feb;?></td>
								
							</tr>
							<tr>
								
								<td>March:</td> <td> <?php echo $mar;?></td>
								
							</tr>
							<tr>
								
								<td>April:</td> <td> <?php echo $apr;?></td>
								
							</tr>
							<tr>
								
								<td>May:</td> <td> <?php echo $may;?></td>
								</tr>
							<tr>
								
								<td>June:</td> <td> <?php echo $jun;?></td>
								
							</tr>
							<tr>
								
								<td>July:</td> <td> <?php echo $jul;?></td>
								
							</tr>
							<tr>
								
								<td>August:</td> <td> <?php echo $aug;?></td>
								
							</tr>
							<tr>
								
								<td>September:</td> <td> <?php echo $sep;?></td>
								<t
							</tr>
							<tr>
								
								<td>October:</td> <td> <?php echo $oct;?></td>
								
							</tr>
							<tr>
								
								<td>November:</td> <td> <?php echo $nov;?></td>
								
							</tr>
							<tr>
								
								<td>December:</td> <td> <?php echo $dece;?></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>		        </div>
					    		    </div>

						
				
				<!-- end:: Body -->
