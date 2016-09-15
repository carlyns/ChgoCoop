<footer>

	<div class="grid6right">
		<div class="map">
			<iframe src="https://www.google.com/maps/d/u/4/embed?mid=1XihqVgdsrpQRCvE-2q5KsEsj0iY" width="100%"></iframe>
		</div>


		<div class="button"><a href="#">See Larger Map</a></div>
	</div>


	<div class="grid6right">
		<h3><a href="about.html">Our Team</a></h3>

		<div class="eventlist">
			<h3>Upcoming Events</h3>
			<div class="eventinfo">
				<div class="datebox">27</br>feb</div>
				<div class="eventtitle">Open House</div>
			</div>
			<div class="eventinfo">
				<div class="datebox">14</br>mar</div>
				<div class="eventtitle">Meetup for those Exploring Housing Cooperatives</div>
			</div>
			<div class="eventinfo">
				<div class="datebox">02</br>apr</div>
				<div class="eventtitle">CCLF-hosted info session @StoneSoup</div>
			</div>
			<div class="eventinfo">
				<div class="datebox">20</br>may</div>
				<div class="eventtitle">On The Table dinner and discussion</div>
			</div>
		</div>

		<div class="contactinfo">
			<h3>Stay in Touch</h3>

			<p><a href="mailto:cso@RESUSstudio.com">Email us</a></p>
			<p><a href="https://www.facebook.com/Exploring-Housing-Cooperatives-420807511344699/">Find us on Facebook</a></p>
		</div>

		<h3>We also love: </h3>
		<p>
			<a href="http://workerdemocracy.org/Directory.aspx">Chicagoland worker co-ops</a>
		</p>
		<p>
			<a href="http://www.chifoodcoops.org">Chicagoland food co-ops</a>
		</p>

	</div>

	<div class="credits">
		<p>Copyright ©<?php echo year_shortcode(); ?></p>
		<p>Site Design by <a href="http://sitesforsocialgood.com">Sites for Social Good</a></p>
	</div>

<!-- FOOTER AREA to add widgets -->
			<?php if ( is_active_sidebar( 'main_footer' ) ) : ?>
			<?php dynamic_sidebar( 'main_footer' ); ?>
			<!-- ADD CLASSES TO REGISTER_SIDEBAR FUNCTION IN FUNCTIONS.PHP TO WRAP DIVS UNIQUELY.  Didn't really try to do this.  Instead of having two different sizes for the icons, I made them a universal 40px wide and fudged the centering on larger screens. -->
			<?php endif; ?>

<?php wp_footer(); ?>

<!-- FOR SCRIPTS, PATH NEEDS TO USE PHP template_url, NOT JUST RELATIVE URL -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/coop.js"></script>

</body>
</html>
