 <!--content-->
    <div class="container-fluid" style="padding-top: 70px;">
      <div class="row">
        


        <div class="col-md-offset-2 col-md-8 ">

          <div class="content " style="padding-bottom: 10px;">
            <div class="ask-question" style="box-shadow: 2px 2px 2px 2px #888888;background-color: #fff;border-radius: 3px;padding-bottom: 15px;">
            <?php $attributes = array("name" => "ask");
            echo form_open_multipart("questions/question", $attributes);?>
              <div class="ask-question" style="padding-left: 30px;padding-right: 30px;padding-top: 5px;">
                <div class="row ">
                    <label class="radio-inline">
                      <input type="radio" name="sub" id="inlineRadio1" value="Physics" required> Physics
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="sub" id="inlineRadio2" value="Maths" required>Maths
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="sub" id="inlineRadio3" value="Chemistry" required>Chemistry
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="sub" id="inlineRadio4" value="Biology" required>Biology
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="sub" id="inlineRadio5" value="Miscellaneous" required>Miscellaneous
                    </label>
                </div>
                <div class="row" style="padding-top: 5px;">
                  <textarea class="form-control" rows="3" placeholder="Ask Question" length="1500" name="quest" required></textarea>
                </div>
              </div>
              <div class="bottom-question" style="padding-left: 15px;padding-right: 15px;padding-top: 5px;" >
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <span id="fileselector">
                        <label class="btn btn-default" for="upload-file-selector">
                        <input id="upload-file-selector" type="file" name="picture">
                        <i class="glyphicon glyphicon-camera"> max-3mb</i>
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

          <?php foreach ($query as $row) {
          ?>
          <div class="content " style="padding-bottom: 15px;">
          <div class="question box">
              <div class="top-question">
              <div class="row" style="padding-left: 15px;">
              <?php $details=$this->user->get_profile($row->u_id);?>
                <div class="col-md-1 col-xs-2" style="padding-top: 8px;">
                 <div class="image-cropper" style="width: 35px;height:35px;">
                    <img src="<?php echo base_url(); ?>media/img/avtar/<?php
                              if(!empty($details[0]->profileimg)) { echo $details[0]->profileimg;} else {echo "profile1.png";}?>" alt="..." class='profie-pic'>
                  </div>
                </div>
                <div class="col-md-8 col-xs-8">
                  <h5 style=""><a href="" class=""><?php if(!empty($details[0]->u_name)){ echo $details[0]->u_name;}else{echo "Unknown";}?> </a>
                  <br><small><?php $time = $row->posted;
                          $time = date('g:i A, dS M ', strtotime($time));
                        echo $time; ?>   </small></h5>
                  <?php ?>
                </div>
                <div class="col-md-2 col-xs-4">
                </div>
              </div>
            </div>
            <div class="center-question" style="padding-left: 15px;padding-right: 15px;">
              <p>Q: <?php $quest=entity_decode($row->quest,$charset = NULL); echo word_limiter(auto_typography(html_escape($quest)),100); ?></p>
              <hr>
            </div>
            <div class="bottom-question" style="padding-left: 15px;padding-right: 15px;margin-top:-10px;" >
              <div class="row">
                <div class="col-md-6 col-xs-6">
                    <p><span class="glyphicon glyphicon-folder-open" aria-hidden="true" ></span> <?php echo $row->sub;?></p>
                </div>
                <div class="col-md-6 col-xs-6" style="">
                  <a href="<?php echo base_url().'index.php/questions/answer/'.$row->id; ?>"><p class="text-right"> Answer <?php $detail3=$this->user->counta_id($row->id); echo $detail3; ?></p></a>
                </div>
              </div>
            </div>
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
  <script type="text/javascript">
  </script>
    
  </body>
</html>