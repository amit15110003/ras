<div class="spacer"></div>
<div id="startchange"></div>
<div class="container-fluid single-product th-sp" style="padding-top: 10%;">
	<div class="col-md-10 col-xs-12 col-md-offset-1">
		<div class="row th-pt th-pb">
			<div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="name" placeholder="Name" required></div>
			<div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" type="email" name="email" placeholder="Email" title="Oops! Seems you have entered an invalid email" required></div>
			<div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" type="text" name="no" placeholder="Mobile No" pattern="[0-9].{9,}" title="Oops! Seems you have entered an invalid mobile no." required></div>
		</div>
		<div class="row th-pt th-pb">
				<div class="col-md-6 col-xs-12">
					<p class="col-md-4 col-xs-12" style="padding-left: 0px;">Select Size :<br>
					<a class="text-right pral" href="" data-toggle="modal" data-target="#size" style="padding-right: 0px;font-size:14px;"><i style="font-size:14px !important;">(<u>Size Chart</u>)</i></a></p>
					<div style="padding: 0;" class="col-md-8 col-xs-12" data-toggle="buttons">
					  <label class="btn th-btn-sm"><input type="radio" name="size" id="option2" value="36" autocomplete="off"> 36 </label>
					  <label class="btn th-btn-sm active"><input type="radio" name="size" id="option3" value="38" autocomplete="off" checked> 38</label>
					  <label class="btn th-btn-sm"><input type="radio" name="size" id="option3" value="40" autocomplete="off"> 40</label>
					  <label class="btn th-btn-sm"><input type="radio" name="size" id="option3" value="42" autocomplete="off"> 42 </label>
					  <label class="btn th-btn-sm"><input type="radio" name="size" id="option3" value="44" autocomplete="off"> 44 </label>
					  <label class="btn th-btn-sm"><input type="radio" name="size" id="option3" value="46" autocomplete="off"> 46 </label>
					</div>
				</div>
                <div class="col-md-6 col-xs-12">
                    <div class=" col-md-4 col-xs-12" style="padding-left: 0px;">
                    	<p > Choose Fit:</p>
                    </div>
                    <div class=" col-md-8 col-xs-12" style="padding-right: 0px;">
                        <select class="form-control" name="fit" id="fit">
                            <option>Slim Fit</option>
                            <option>Comfort Fit</option>
                            <option>Relaxed Fit</option>
                        </select>
                    </div>
                </div>
			</div>
			<br>
		        <div class="col-md-12 col-xs-12 btn-product" >
                                                                <div class="col-md-2 col-xs-12 col-md-offset-1 text-center">
						      			<p><span class="th-bold">Collar(10)</span></p>
<button class="btn btn-default btn-block visible-xs hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target="#Foo1">Select</button>
						      			<div class="scl collapse in" id="Foo1">
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="collar" value="Button Down Collar" <?php if($collar=="Button Down Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar1.jpg">
												    <p>Button Down </p>
												</div>
										</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="collar" value="Spread Collar" <?php if($collar=="Spread Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar2.jpg">
												    <p>Spread </p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="collar" value="Band Collar" <?php if($collar=="Band Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar3.jpg">
												    <p>Band </p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="collar" value="Cutaway Collar" <?php if($collar=="Cutaway Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar4.jpg">
												    <p>Cutaway </p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="collar" value="Hidden Button Collar" <?php if($collar=="Hidden Button Collar"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar5.jpg">
												    <p>Hidden Button </p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="collar" value="Pin Collars" <?php if($collar=="Pin Collars"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar6.jpg">
												    <p>Pin </p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="collar" value="Classic Collar"  <?php if($collar=="Classic Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar7.jpg">
												    <p>Classic </p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="collar" value="Straight Point Collar" <?php if($collar=="Straight Point Collar"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar8.jpg">
												    <p>Straight</p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="collar" value="Winged Tip Collar" <?php if($collar=="Winged Tip Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar9.jpg">
												    <p>Winged Tip </p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="collar" value="Club Collar" <?php if($collar=="Club Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar10.jpg">
												    <p>Club </p>
												</div>
										  	</label>
									  	</div>
						    		</div>
						      		<div class="col-md-2 col-xs-12">
						      			<p><span class="th-bold">Cuff(3)</span></p><button class="btn btn-default btn-block visible-xs hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target="#Foo2">Select</button>
						      			<div class="scl collapse in" id="Foo2">
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="cuff" value="French Cuff" <?php if($cuff=="French Cuff"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/cuff1.jpg">
												    <p>French </p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="cuff" value="Single Round Cuff" <?php if($cuff=="Single Round Cuff"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/cuff2.jpg">
												    <p>Single Round </p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="cuff" value="Two Button Cuff" <?php if($cuff=="Two Button Cuff"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/cuff3.jpg">
												    <P>Two Button </P>
												</div>
										  	</label>
										</div>
						    		</div>
						      		<div class="col-md-2 col-xs-12">
						      			<p><span class="th-bold">Placket(4)</span></p>
<button class="btn btn-default btn-block visible-xs hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target="#Foo3">Select</button>
						      			<div class="scl collapse in" id="Foo3">
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="placket" value="Conventional" <?php if($placket=="Conventional"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket1.jpg">
												    <p>Conventional</p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="placket" value="Concealed" <?php if($placket=="Concealed"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket2.jpg">
												    <p>Concealed</p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="placket" value="French" <?php if($placket=="French"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket3.jpg">
												    <p>French</p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="placket" value="Contrast" <?php if($placket=="Contrast"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket4.jpg">
												    <p>Contrast</p>
												</div>
										  	</label>
									  	</div>
						    		</div>
						      		<div class="col-md-2 col-xs-12">
						      			<p><span class="th-bold">Sleeve(2)</span></p>
<button class="btn btn-default btn-block visible-xs hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target="#Foo4">Select</button>
						      			<div class="scl collapse in" id="Foo4">
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="sleeve" value="Half Sleeve" <?php if($sleeve=="Half Sleeve"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/sleeve1.jpg">
												    <p>Half </p>
												</div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="sleeve" value="Full Sleeve" <?php if($sleeve=="Full Sleeve"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/sleeve2.jpg">
												    <p>Full </p>
												</div>
										  	</label>
										</div>
						    		</div>
						      		<div class="col-md-2 col-xs-12">
						      			<p><span class="th-bold">Hem(2)</span></p>
                                                                        <button class="btn btn-default btn-block visible-xs hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target="#Foo5">Select</button>
						      			<div class="scl collapse in" id="Foo5">
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="hem" value="Round"  <?php if($hem=="Round"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/hem1.jpg">
												    <p>Round</p>
											    </div>
										  	</label>
							      			<label class="col-xs-6 col-md-12">
											    <input type="radio" name="hem" value="Straight" <?php if($hem=="Straight"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/hem2.jpg">
												    <p>Straight</p>
												</div>
										  	</label>
										</div>
						    		</div>
						      		
						    	</div>
                        <div clas=" col-md-12 col-xs-12 th-pt">
                        <div class="col-md-12 col-xs-12 th-pt" style="border:solid 1px #a3a3a3;margin-top:15px;">
                            <p class="text-center">Shirt Attributes</p>
                            <p clas="th-pt"><span class="col-md-6 col-xs-12">&#9632; <span id="collar1"></span></span><span class="col-md-6 col-xs-12">&#9632; <span id="cuff1"></span></span><span class="col-md-6 col-xs-12">&#9632; <span id="placket1"></span> Placket</span><span class="col-md-6 col-xs-12"> &#9632;<span id="sleeve1"></span></span><span class="col-md-6 col-xs-12">&#9632; <span id="hem1"></span> Hem</span></p>
                        </div>
                        </div>
		        <div class="th-gap"></div>
		        <div class="th-gap"></div>
				<div class="col-md-12 col-xs-12">
			            	<?php if(!empty($this->session->userdata('uid'))){?>
			                <div><button id="addcartbtn" class="th-btn col-md-12 col-xs-12" onclick="javascript:cartadd(<?php echo $id;?>);">ADD TO CART</button ></div>
			                <?php }else{?>
			                <div><button id="addcartbtn" class="th-btn col-md-12 col-xs-12" onclick="javascript:cartadd1(<?php echo $id;?>);">ADD TO CART</button ></div>
			                <?php }?>
	       		</div> 
	    	</div>
	</div>
</div>

<div id="cartmsg" style="position: fixed;left:0;right:0;top:50%;bottom:0;display:none;z-index:5000;">
    <div class="col-md-4  col-xs-12 col-md-offset-4 text-center" style="background-color:#fff;box-shadow:0 10px 10px #a3a3a3;padding:3% 2% 2% 2%;z-index:5000;">
          <p>Item added to cart.</p>
          <br>
          <div class="col-md-12 col-xs-12 th-pb">
          <a href="" class="btn th-btn col-md-12 col-xs-12" onclick="javascript:cartmsghide();">Continue shopping</a>
          </div>
          <div class="col-md-12 col-xs-12 th-pb">
          <a href="<?php echo base_url(); ?>index.php/cart" class="btn th-btn col-md-12 col-xs-12">Go to cart</a>
          </div>
    </div>
</div>
<div id="wishmsg" style="position: fixed;left:0;right:0;top:50%;bottom:0;display:none;z-index:5000;">
    <div class="col-md-4 col-md-offset-4 col-xs-12 text-center" style="background-color:#fff;box-shadow:0 10px 10px #a3a3a3;padding:3% 2% 2% 2%;z-index:5000;">
          <p>Item added to wishlist.</p>
    </div>
</div>
<div class="th-gap"></div></div></div>

				<div class="modal fade bs-example-modal-lg" id="size" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content" style="border-radius:0px;padding-right:15px !important;padding-left:15px !important;">
				      <div class="col-md-12"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding-right:15px;font-size:24px;">&times;</span></button></div>
                                      <table class="table table-bordered" style="color:#a3a3a3;">
                                        <p>Size Chart</p>
                                        <tr>
                                          <th>Size</th>
                                          <th>Length (Inches)</th> 
                                          <th>Chest (Inches)</th>
                                          <th>Stomach (Inches)</th>
                                          <th>Hip (Inches)</th> 
                                          <th>Shoulder (Inches)</th>
                                          <th>Sleeve (Inches)</th>
                                          <th>Half-Sleeve (Inches)</th> 
                                          <th>Neck (Inches)</th>
                                          <th>Across-Back (Inches)</th>
                                        </tr>
                                        <tr>
                                          <th>36</th>
                                          <th>26</th>
                                          <th>36</th> 
                                          <th>33</th>
                                          <th>35.5</th>
                                          <th>17</th> 
                                          <th>24.5</th>
                                          <th>9</th>
                                          <th>15</th> 
                                          <th>17.5</th>
                                        </tr>
                                        <tr>
                                          <th>38</th>
                                          <th>26</th> 
                                          <th>38</th>
                                          <th>35</th>
                                          <th>37.5</th> 
                                          <th>17.5</th>
                                          <th>25</th>
                                          <th>9</th> 
                                          <th>15.5</th>
                                          <th>17.5</th>
                                        </tr>
                                        <tr>
                                          <th>40</th>
                                          <th>27</th> 
                                          <th>40</th>
                                          <th>37</th>
                                          <th>39</th> 
                                          <th>18</th>
                                          <th>25.5</th>
                                          <th>9.5</th> 
                                          <th>16</th>
                                          <th>18.5</th>
                                        </tr>
                                        <tr>
                                          <th>42</th>
                                          <th>28</th> 
                                          <th>42</th>
                                          <th>39</th>
                                          <th>41</th> 
                                          <th>18.5</th>
                                          <th>26</th>
                                          <th>10</th> 
                                          <th>16.5</th>
                                          <th>19</th>
                                        </tr>
                                        <tr>
                                          <th>44</th>
                                          <th>28.5</th> 
                                          <th>44</th>
                                          <th>41</th>
                                          <th>43</th> 
                                          <th>19</th>
                                          <th>26.75</th>
                                          <th>10.5</th> 
                                          <th>17</th>
                                          <th>19.5</th>
                                        </tr>
                                        <tr>
                                          <th>46</th>
                                          <th>29.5</th> 
                                          <th>46</th>
                                          <th>44</th>
                                          <th>45</th> 
                                          <th>19.5</th>
                                          <th>27</th>
                                          <th>11</th> 
                                          <th>17.5</th>
                                          <th>20.5</th>
                                        </tr>
                                    </table>
                                    <p class="text-center"><a  href="<?php echo base_url();?>index.php/home/sizechart" style="color:#000;">Have a look at our detailed Size Guide Here</a></p>
				    </div>
				  </div>
				</div>
<script>
function refreshproduct()
    {
                     location.reload();
                
    }
</script>
     <script type="text/javascript">
        $(document).ready(function() {
       
         document.getElementById("hem1").innerHTML = $('input[name=hem]:checked').val();
        document.getElementById("cuff1").innerHTML= $('input[name=cuff]:checked').val();
        document.getElementById("collar1").innerHTML= $('input[name=collar]:checked').val();
        document.getElementById("sleeve1").innerHTML= $('input[name=sleeve]:checked').val();
        document.getElementById("placket1").innerHTML = $('input[name=placket]:checked').val();
         document.getElementById("hem2").innerHTML = $('input[name=hem]:checked').val();
        document.getElementById("cuff2").innerHTML= $('input[name=cuff]:checked').val();
        document.getElementById("collar2").innerHTML= $('input[name=collar]:checked').val();
        document.getElementById("sleeve2").innerHTML= $('input[name=sleeve]:checked').val();
        document.getElementById("placket2").innerHTML = $('input[name=placket]:checked').val();
      });
      </script>
      <script>
        function productc()
        {
         document.getElementById("hem1").innerHTML = $('input[name=hem]:checked').val();
        document.getElementById("cuff1").innerHTML= $('input[name=cuff]:checked').val();
        document.getElementById("collar1").innerHTML= $('input[name=collar]:checked').val();
        document.getElementById("sleeve1").innerHTML= $('input[name=sleeve]:checked').val();
        document.getElementById("placket1").innerHTML = $('input[name=placket]:checked').val();
         document.getElementById("hem2").innerHTML = $('input[name=hem]:checked').val();
        document.getElementById("cuff2").innerHTML= $('input[name=cuff]:checked').val();
        document.getElementById("collar2").innerHTML= $('input[name=collar]:checked').val();
        document.getElementById("sleeve2").innerHTML= $('input[name=sleeve]:checked').val();
        document.getElementById("placket2").innerHTML = $('input[name=placket]:checked').val();
      }
      </script>



<script type="text/javascript">
    $(document).ready(function () {
      if (matchMedia) {
        var mq = window.matchMedia("(max-width: 768px)");
        mq.addListener(WidthChange);
        WidthChange(mq);
      }

      function WidthChange(mq) {
        if (mq.matches) {
          $("#Foo1").removeClass("in");
          $("#Foo2").removeClass("in");
          $("#Foo3").removeClass("in");
          $("#Foo4").removeClass("in");
          $("#Foo5").removeClass("in");
        }
      }
    });
  </script>