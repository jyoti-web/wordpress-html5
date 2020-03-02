<div class="container-fluid">
			<!-- footer -->
			 <footer class="footer" role="contentinfo">
				<div class="row" id="footer-margin-bottom">
					<div class="col-sm-3">
						<h4>Extra Link</h4>
						<ul class="lists">
							<li><a href="/wordpress-html5/index.php/departments/">Departments</a></li>
							<li><a href="/wordpress-html5/index.php/contacts/">Site Map</a></li>
							<li><a href="/wordpress-html5/index.php/doctors/">Doctors</a></li>
							<li><a href="/wordpress-html5/index.php/faq/">Common Questions</a></li>
							<li><a href="/wordpress-html5/index.php/timetable/">TimeTable</a></li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h4>Help & FAQs</h4>
						<ul class="lists">
							<li>Appointment</li>
							<li>Privacy & Policy</li>
							<li>Terms & Conditions</li>
							<li>Blog</li>
							<li>Login</li>

						</ul>
					</div>
					<div class="col-sm-3">
				        <h4>Contact US</h4>
						<address><b>Address: </b>SBS Ngr, 376-E, Ludhiana, Punjab</address>
						<p><b>Tel. </b> 0161 2562276</p>
						<p><b>Email: </b><a href="mailto:drpal@gmail.com?Subject=Hello%20again" target="_top">drpal@gmail.com</a></p>    	
					</div>
					<div class="col-sm-3">
						<h4>Keep in touch</h4>
							<form id="footer-form">
								<ul style="display: flex; list-style-type: none; margin-left: -40px; margin-top: 20px">
    								<li><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required style="height: 25px; border-radius: 0px; border: 1px;"></li>
									<li><button type="Submit" class="btn btn-primary">Submit</button></li>


								</ul>

							   </form><br>
							<ul class="social-network social-circle">
				             	<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
				             	<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
				             	<li><a href="#" class="icoYoutube" title="YouTube"><i class="fa fa-youtube"></i></a></li>
				             	<li><a href="#" class="icoInsta" title="Instagram"><i class="fa fa-instagram"></i></a></li>
				             	<li><a href="#" class="icoWhatsapp" title="Whatsapp"><i class="fa fa-whatsapp"></i></a></li>
					        </ul> 
						</form>
					</div>
				</div> 
<!-- 				hide footer menu
 -->				<?php 	//wp_nav_menu( array('theme_location' => 'footer_menu',));?>
				<hr>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->
   
		</div>
		<!-- /wrapper1 -->

		<?php wp_footer(); 
	
?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
