<!--SECTION START-->
    <section>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="#" class="pro-act">Profile</a></li>
                        <li><a href="#">Results</a></li>
                        <li><a href="#">Attendance</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user">
                        <img src="<?php echo base_url();?>media/images/img-54.jpg" alt="user">
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
                            <h4><img src="<?php echo base_url();?>media/images/db1.png" alt="" /> My Profile</h4>
                            
                            <div class="sdb-tabl-com sdb-pro-table">
                                <table class="responsive-table bordered">
                                    <tbody>
                                        <tr>
                                            <td>Student Name</td>
                                            <td>:</td>
                                            <td><?php echo $result = $this->session->userdata('u_name'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Student Id</td>
                                            <td>:</td>
                                            <td><?php echo $result = $this->session->userdata('u_card'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Eamil</td>
                                            <td>:</td>
                                            <td><?php echo $result = $this->session->userdata('u_mail'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>:</td>
                                            <td><?php echo $result = $this->session->userdata('u_contact'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>:</td>
                                            <td><?php echo $result = $this->session->userdata('u_add'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td><span class="db-done"><?php $result = $this->session->userdata('u_status'); if($result=="1") {echo "Active";}else{echo "Disable";}?></span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->