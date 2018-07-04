<!--SECTION START-->
    <section>
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
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3" style="display: block;z-index: 5000">
                    <div class="pro-user" style="background-color: #fff;">
                        <img src="<?php echo base_url(); ?>media/img/avtar/<?php echo $profileimg; ?>" alt="user" class="center-block" style="height: 100px; width: 100px;" >
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li><button type="button" class="btn btn-primary center-block" data-toggle="modal" data-target=".bs-example-modal-lg">Change</button></li>
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
                            <h4> My Profile</h4>
                            
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
                                            <td><?php echo $u_mail; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Class</td>
                                            <td>:</td>
                                            <td><?php echo $u_class; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Batch</td>
                                            <td>:</td>
                                            <td><?php echo $u_batch; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>:</td>
                                            <td><?php echo $result = $this->session->userdata('u_contact'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Parent's Phone</td>
                                            <td>:</td>
                                            <td><?php echo $u_pcontact; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>:</td>
                                            <td><?php echo $u_add; ?></td>
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
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <?php $attributes = array("name" => "loginform");
                    echo form_open("profile/profileimg", $attributes);?>
                  <div class="row text-center">
                  <div class="col-md-3 ">
                      <div class="center-block image-cropper" style="margin-top:50px;width:100px;height:100px;">
                      <img src="<?php echo base_url(); ?>media/img/avtar/profile1.png" alt="..." class='profie-pic'>
                      </div>
                      <br>
                      <label class="radio-inline">
                        <input type="radio" name="img" id="inlineRadio1" value="profile1.png" required> Profile 1
                      </label>
                  </div>
                  <div class="col-md-3">
                      <div class="center-block image-cropper" style="margin-top:50px;width:100px;height:100px;">
                      <img src="<?php echo base_url(); ?>media/img/avtar/profile2.png" alt="..." class='profie-pic'>
                      </div>
                      <br>
                      <label class="radio-inline">
                        <input type="radio" name="img" id="inlineRadio2" value="profile2.png" required>Profile 2
                      </label>
                      </div>
                  <div class="col-md-3">
                      <div class="center-block image-cropper" style="margin-top:50px;width:100px;height:100px;">
                      <img src="<?php echo base_url(); ?>media/img/avtar/profile3.png" alt="..." class='profie-pic'>
                      </div>
                      <br>
                      <label class="radio-inline">
                        <input type="radio" name="img" id="inlineRadio3" value="profile3.png" required>Profile 3
                      </label>
                  </div>
                  <div class="col-md-3">
                      <div class="center-block image-cropper" style="margin-top:50px;width:100px;height:100px;">
                      <img src="<?php echo base_url(); ?>media/img/avtar/profile4.png" alt="..." class='profie-pic'>
                      </div>
                      <br>
                      <label class="radio-inline">
                        <input type="radio" name="img" id="inlineRadio4" value="profile4.png" required>Profile 4
                      </label>
                  </div>
                  <div class="col-md-3">
                      <div class="center-block image-cropper" style="margin-top:50px;width:100px;height:100px;">
                      <img src="<?php echo base_url(); ?>media/img/avtar/profile5.png" alt="..." class='profie-pic'>
                      </div>
                      <br>
                      <label class="radio-inline">
                        <input type="radio" name="img" id="inlineRadio5" value="profile5.png" required>Profile 5
                      </label>
                  </div>
                  <div class="col-md-3">
                      <div class="center-block image-cropper" style="margin-top:50px;width:100px;height:100px;">
                      <img src="<?php echo base_url(); ?>media/img/avtar/profile6.png" alt="..." class='profie-pic'>
                      </div>
                      <br>
                      <label class="radio-inline">
                        <input type="radio" name="img" id="inlineRadio6" value="profile6.png" required>Profile 6
                      </label>
                  </div>
                  <br>
                  <div class="col-md-3">
                  <br><br><br><br><br>
                      <button type="submit" class="btn btn-default" style="background-color:#207d4b;color:white;border:0px;">Submit</button>
                  </div>
                  </div>
                  <?php echo form_close(); ?>
                  <br><br>
                </div>
              </div>
            </div>
    <!--SECTION END-->