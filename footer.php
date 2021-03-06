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

			<?php  // edited code from: http://www.advancedcustomfields.com/resources/date-picker/
				$date = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
				$month = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			?>

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

	</div> <!-- // end of "grid6right"-->


	<div class="credits">
		<p>Copyright ©<?php echo year_shortcode(); ?></p>
		<p>Site Design by <a href="http://sitesforsocialgood.com">Sites for Social Good</a></p>
	</div>

<!-- FOOTER AREA to add widgets -->
			<?php if ( is_active_sidebar( 'main_footer' ) ) : ?>
			<?php dynamic_sidebar( 'main_footer' ); ?>
			<?php endif; ?>

<?php wp_footer(); ?>

<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/coop.js"></script>

</body>
</html>
