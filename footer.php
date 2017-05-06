<footer>

	<div class="grid6right">
		<div class="map">
			<?php the_field( 'map', 2 ); ?>
		</div>

		<!-- permalink for Directory -->
		<a href="<?php echo get_permalink(11); ?>"><div class="style-button">See Directory</div></a>
	</div>


	<div class="grid6right">
		<!-- permalink for Team -->
		<h3><a href="<?php echo get_permalink(15); ?>">Our Team</a></h3>

		<div class="eventlist">

			<h3>Upcoming Events</h3>
				<?php // DEFINE THE QUERY ARGUMENTS FOR EVENTS TODAY OR IN THE FUTURE ?>
				<?php
				$today = date("Ymd");
				// WOW for some reason, making a post "sticky" placed it in the events list and broke the query. So must include ignore_sticky_posts in the array

				$args = array (
					 	'category' => 18,
						'ignore_sticky_posts' => 1,
						'posts_per_page' => 4,
						'orderby'       => 'meta_value_num',
						'order'          => 'ASC',
				 'meta_query' => array(
							 array(
									'key'       => 'event_start_date',
									'compare'   => '>=',
									'value'     => $today,
							)
					),
				);
			 ?>

			<?php
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
		 //Display the contents
		 while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<!-- Then, need to pull the ACF data. -->
			<?php  // edited code from: http://www.advancedcustomfields.com/resources/date-picker/
				$date = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
				$month = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			?>

			<!-- And display in the desired format.
			Date and time formats: https://codex.wordpress.org/Formatting_Date_and_Time -->
			<div class="eventinfo">
				<a href="<?php the_permalink(); ?>">
					<div class="datebox">
						<p><?php echo $date->format('d'); ?></p>
						<p><?php echo $month->format('M'); ?></p>
					</div>
				</a>
				<a href="<?php the_permalink(); ?>">
					<div class="eventtitle"><?php the_title(); ?></div>
				</a>
			</div>

		<?php endwhile; ?>
		<?php // RESETTING TO ORIG LOOP
		wp_reset_postdata(); ?>

	</div>

		<div class="contactinfo">
			<h3>Stay in Touch</h3>
			<?php the_field( 'contact_info', 2 ); ?>

		</div>

		<div class="loves">
			<h3>We also love: </h3>
			<?php the_field( 'worker_coop_links', 2 ); ?>
			<?php the_field( 'food_coop_links', 2 ); ?>
		</div>

		<div class="loves">
			<?php the_field( 'platinum_sponsor', 2 ); ?>
		</div>


	</div> <!-- // end of "grid6right"-->


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
