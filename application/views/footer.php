<footer id="footer-2">

			<div class="container">

				<div class="row">

					<div class="column_1">

						<div class="logo"><a href="#"><img src="<?php echo base_url();?>media/images/logobwn.png" width="150" height="80" alt="descipline"></a></div>

						<p>A pioneer coaching institute for the preparation of JEE (Main+Advanced), JEE (Main), Pre-Medical (AIPMT (NEET-UG)/ AIIMS). The Institute is well regarded for the best results year after year in jamalpur.</p>

						<ul class="footer-social">

							<li><a href="https://www.facebook.com/RajivAcademyofSciences"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>

							<li><a href="#"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>

						</ul>

					</div>

					<div class="column_2">

						<span class="heading">Useful Links</span>

						<li><a href="#">About Us</a></li><br>
						<li><a href="#">Courses</a></li><br>
						<li><a href="#">Results</a></li><br>
						<li><a href="#">Contact Us</a></li><br>
						<li><a href="#">Student Zone</a></li><br>

						
					</div>

					<div class="column_3">

						<span class="heading">contact us</span>

						<span class="address">

							<i class="fa fa-map-marker" aria-hidden="true"></i>

							Nayagoan, Manaskunj Mandir, Jamalpur-811214

						</span>

						<span class="tel">

							<i class="fa fa-phone" aria-hidden="true"></i>

							<a href="#">+01 123 456 7899</a>

							<a href="#">+01 123 456 7856</a>

						</span>

						<span class="mail">

							<i class="fa fa-envelope-o" aria-hidden="true"></i>

							<a href="#">info@gmail.com</a>

							<a href="#">support@gmail.com</a>

						</span>

					</div>

					<div class="column_4">

						<span class="heading">get in touch</span>

						<form class="touch-form" action="#">

							<input type="text" placeholder="Name">

							<input type="email" placeholder="Email">

							<button onclick="javascript:subscribe('');">Send Message</button>

						</form>

					</div>

				</div>

			</div>

		</footer>

	

		<div class="bottom-footer inner">

			<span>&copy;2018 RAS. All Rights Reserved <small>Powered by Trixno</small></span>

		</div>

		

	</div>





	<!-- Modal -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

	  <div class="modal-dialog yellow" role="document">

	    <div class="modal-content">

	      <div class="modal-header">

	        <button type="button" class="close yellow" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

	        <h4 class="modal-title form" id="myModalLabel">signin</h4>

	      </div>

	      <div class="modal-body">

	    	<div class="main-login main-center yellow">



				<div class="" >
				<?php $attributes = array("name" => "loginform");
            echo form_open("login", $attributes);?>


					<div class="form-group">

						<label for="email" class="cols-sm-2 control-label">RAS Id</label>

						<div class="cols-sm-10">

							<div class="input-group">

								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>

								<input type="text" class="form-control" name="u_card" id="email"  placeholder="Enter your Email"/>

							</div>

						</div>

					</div>



					<div class="form-group">

						<label for="password" class="cols-sm-2 control-label">Password</label>

						<div class="cols-sm-10">

							<div class="input-group">

								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>

								<input type="password" class="form-control" name="u_pass" id="password"  placeholder="Enter your Password"/>

							</div>

						</div>

					</div>



					<div class="form-group ">

						<button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Signin</a>

					</div>



					<div class="form-group ">

						<p>Already have an account! <a href="#">Sign In Here</a> </p>

					</div>

					<?php echo form_close(); ?>

				</div>

			</div>

	      </div>

	      

	    </div>

	  </div>

	</div>





	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script  type="text/javascript" src="<?php echo base_url();?>media/js/jquery.min.js"></script>

	<script  type="text/javascript" src="<?php echo base_url();?>media/js/bootstrap.min.js"></script>

	<script  type="text/javascript" src="<?php echo base_url();?>media/js/owl.carousel.min.js"></script>

	<script  type="text/javascript" src="<?php echo base_url();?>media/js/switcher.js"></script>

	<script  type="text/javascript" src="<?php echo base_url();?>media/js/custom.js"></script>		

	<script>
		         function subscribe() {
		             var email =document.getElementById("subemail").value;
		             $.ajax({
		                 type: 'POST',
		                 url: '<?php echo base_url(); ?>index.php/ras/subscribe',
		                 data:'&email='+email,
		                 beforeSend: function () {
		                     $('.loading').show();
		                 },
		                 success: function (html) {
		                     $('#subcribed').html(html);
		                     $('.loading').fadeOut("slow");
		                 }
		             });
		         }
		</script>


	

	</body>

</html>

