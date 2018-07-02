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
                        <li><a href="<?php echo base_url(); ?>index.php/profile/asked">Asked Questions</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user" style="background-color: #fff;">
                        <img src="<?php echo base_url(); ?>media/img/avtar/<?php echo $result = $this->session->userdata('profileimg'); ?>" alt="user">
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
                      <?php
                      if(!empty($query)){
                      foreach($query as $row)
                       {?>
                      <div class="fed" id="fed_<?php echo $row->id; ?>" style="padding-bottom: 10px;">
                        <div class="question" style="box-shadow: 1px 1px 1px #888888;background-color: #FFFFFF;border-radius: 3px;">
                            <div class="top-question">
                              <div class="row" style="padding-right: 10px;">
                                <div class="col-md-6" style="padding-left: 30px;padding-top: 5px;">
                                  <h4 style="text-decoration:none; text-transform: capitalize; "><a href=""><?php $details=$this->user->get_profile($row->u_id);
                                    echo $details[0]->u_name;
                                    ?></a>
                                  <br><small><?php $time = $row->posted;
                                        $time = date('g:i A, dS M ', strtotime($time));
                                      echo $time; ?></small></h4>
                                </div>
                                <div class="col-md-6" style="padding-top: 5px;">
                                    <div class="dropdown pull-right" >
                                          <a  id="dLabel" data-target="#" href="http://example.com" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                             Options <span class="caret"></span>
                                          </a>

                                          <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                <li><a href="" onclick="javascript:feddelete(<?php echo $row->id;?>);">Delete</a></li>
                                          </ul>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="center-question" style="padding-left: 15px;padding-right: 15px;">
                                <p>Q: <?php $quest=entity_decode($row->quest,$charset = NULL); echo auto_typography(html_escape($quest)); ?></p>
                                <?php 
                                  if ($row->picture) {?>
                                  <img class="img-responsive"  style=" width:100%; max-height: 450px;"  src="<?php echo base_url(''); ?>/uploads/<?php echo $row->picture; ?>">
                                <?php }?>
                                    <hr>
                            </div>
                            <div class="bottom-question" style="padding-left: 15px;padding-right: 15px;margin-top:-10px;" >
                                <div class="row">
                                  <div class="col-md-6 col-xs-6">
                                      <p><span class="glyphicon glyphicon-folder-open" aria-hidden="true" ></span> <?php echo $row->sub;?></p>
                                  </div>
                                  <div class="col-md-6 col-xs-6" style="">
                                    <a href="<?php echo base_url().'index.php/home/answer/'.$row->id; ?>"><p class="text-right"> Answer <?php $detail3=$this->user->counta_id($row->id); echo $detail3; ?></p></a>
                                  </div>
                                </div>
                            </div>
                            
                      </div>
                      </div>
                      <?php }}else{?>
                      <div class="fed" id="fed_" style="padding-bottom: 10px;">
                        <div class="question" style="box-shadow: 1px 1px 1px #888888;background-color: #FFFFFF;border-radius: 3px;padding:30px;">
                            <h4 class="text-center" style="font-family: 'Roboto', sans-serif;font-style: italic;font-size: 14px;margin:0;">No Question To Display</h4>
                            
                      </div>
                      </div>
                      <?php }?>
                          <nav aria-label="Page navigation">
                            <ul class="pagination pull-right">
                              <li><?php echo $links; ?></li>
                            </ul>
                          </nav>
                      </div>
                </div>
            </div>
        </div>
    </section>
    
    

    <script type="text/javascript">
    function feddelete(postid)
    {
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('profile/deletepost');?>",
                    data:"postid="+postid,
                    success: function (response) {
                     $("#fed_"+postid).hide();
                    }
                });
    }
  </script>

  </body>
</html>