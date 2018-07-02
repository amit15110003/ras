 <!--content-->
    <div class="container-fluid" style="padding-top: 70px;">
      <div class="row">
        <div class="col-md-8 col-md-offset-2" >
        <?php
        if (isset($data))
        {
          
        }
        else {
          $data=0;
        }?>
        <div class="content " style="padding-bottom: 10px;">
          <div class="question" style="box-shadow: 1px 1px 1px #888888;background-color: #FFFFFF;border-radius: 3px;">
              <div class="top-question">
                <div class="row" style="padding-left: 15px;">
              <?php $details=$this->user->get_profile($u_id);?>
                <div class="col-md-1 col-xs-2" style="padding-top: 8px;">
                 <!-- <div class="image-cropper" style="width: 35px;height:35px;">
                    <img src="<?php echo base_url(); ?>media/img/avtar/<?php
                              if($details[0]->profileimg) { echo $details[0]->profileimg;} else {echo "profile1.png";}?>" alt="..." class='profie-pic'>
                  </div>
                -->
                </div>
                <div class="col-md-8 col-xs-8">
                  <h5 style="text-decoration:none; text-transform: capitalize;margin-left: -10px;font-size: 16px;"><a href="" class=""><?php  if(!empty($details[0]->u_name)){ echo $details[0]->u_name;}else{echo "Unknown";}?> </a>
                  <br><small><?php $time = $posted;
                          $time = date('g:i A, dS M ', strtotime($time));
                        echo $time; ?>   </small></h5>
                  <?php ?>
                </div>
                <div class="col-md-2 col-xs-4">
                </div>
              </div>
              </div>
              <div class="center-question" style="padding-left: 15px;padding-right: 15px;">
                <p><span class="glyphicon glyphicon-folder-open" aria-hidden="true" ></span> <?php echo $sub;?></p>
                <p>Q:<?php $quest=entity_decode($quest,$charset = NULL); echo auto_typography(html_escape($quest)); ?></p>
                <?php 
                  if ($picture) {?>
                  <img class="materialboxed "  style=" width:100%; max-height: 450px;"  src="<?php echo base_url(''); ?>/uploads/<?php echo $picture;?>">
                <?php }?>
                    <hr>
              </div>
              <div class="bottom-question" style="padding-left: 30px;padding-right: 30px;margin-top:-10px;" >
                <div class="row">
                <?php foreach( $query as $row)
                  {?>
                <div class="row" style="">
              <?php $details=$this->user->get_profile($row->u_id);?>
                <div class="col-md-1 col-xs-2" style="padding-top: 8px;">
                  <div class="image-cropper" style="width: 35px;height:35px;">
                    <!--<img src="<?php echo base_url(); ?>media/img/avtar/<?php
                              if($details[0]->profileimg) { echo $details[0]->profileimg;} else {echo "profile1.png";}?>" alt="..." class='profie-pic'>
                  </div>
                -->
                </div>
                </div>
                <div class="col-md-8 col-xs-8">
                  <h5 style="text-decoration:none; text-transform: capitalize;margin-left: -10px;font-size: 16px;"><a href="" class=""><?php  if(!empty($details[0]->u_name)){ echo $details[0]->u_name;}else{echo "Unknown";}?> </a>
                  </h5>
                  <?php ?>
                </div>
                <div class="col-md-2 col-xs-4">
                </div>
              </div>
                  <p> Answer:
                     <?php $rply=entity_decode($row->rply,$charset = NULL); echo auto_typography(html_escape($rply)); ?>
                 </p>
                  <?php 
                    if ($row->picture) {?>
                    <img class="materialboxed "  style=" width:100%; max-height: 450px;"  src="<?php echo base_url(''); ?>/uploads/<?php echo $row->picture; ?>">
                  <?php }?>

                  <?php }?>

                </div>
              </div>
              <div class="rply-box" style="padding-bottom: 10px;">
                <div class="rply" style="">
                <?php $attributes = array("name" => "rply");
                    $qid=$this->session->userdata('qid');
                echo form_open_multipart("questions/answer/.$qid", $attributes);?>
                <div class="ask-question" style="padding-left: 30px;padding-right: 30px;padding-top: 5px;">
                <div class="row" style="padding-top: 5px;">
                  <input   value="<?php echo $id; ?>" id="first_name" type="hidden" class="validate" name="qid">
                  <textarea class="form-control" rows="3" placeholder="Reply" length="1500" name="rply" required></textarea>
                </div>
                <div class="bottom-rply" style="padding-left: 15px;padding-right: 15px;padding-top: 5px;" >
                  <div class="row">
                    <div class="col-md-6 col-xs-6">
                      <span id="fileselector">
                          <label class="btn btn-default" for="upload-file-selector">
                          <input id="upload-file-selector" type="file" name="picture">
                          <i class="glyphicon glyphicon-camera"></i>
                          </label>
                      </span>
                    </div>
                    <div class="col-md-6 col-xs-6" style="">
                      <button class="btn btn-default pull-right" type="submit">Submit</button>
                    </div>
                  </div>
                </div>
                <?php echo $this->session->flashdata('msg'); ?>
                <?php echo form_close();?>
              </div>
          </div>
          </div>
        </div>
        </div>
        </div>


        
      </div>
    </div>
  </div>




    <script type="text/javascript">
    function savelike(postid)
    {
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/savelikes');?>",
                    data:"postid="+postid,
                    success: function (response) {
                     $("#like_"+postid).html(response+"");
                      $("#like1_"+postid).toggleClass("btn-danger");
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function savelike1(postid)
    {
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/savelikes');?>",
                    data:"postid="+postid,
                    success: function (response) {
                     $("#like_"+postid).html(response+"");
                      $("#like1_"+postid).toggleClass("btn-default1");
                    }
                });
    }
  </script>
    
  </body>
</html>