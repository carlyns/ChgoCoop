<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->


<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>

		<!-- if it's an event, show event info & content in between title and content -->
		<?php if (in_category( 18 )) {  ?>
			<?php  // edited code from: http://www.advancedcustomfields.com/resources/date-picker/
				$date = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
				$month = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
				$day = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			?>

			<h3><?php echo $day->format('l'); ?>, <?php echo $date->format('F'); ?> <?php echo $date->format('d'); ?>, <?php echo $date->format('Y'); ?>.</h3>

			<h3><?php the_field('event_location'); ?></h3>
			<a href="<?php the_field('rsvp_link'); ?>" target="_blank"><p><?php the_field('rsvp_link'); ?></p></a>
			<a href="<?php the_field('details_link'); ?>" target="_blank"><p><?php the_field('details_link'); ?></p></a>

		<?php } ?>

		<p><?php the_content(); ?></p>




	<?php endwhile; endif; ?>

	<hr>
	<div class="tags">
		<h5> <!-- wrapping with a <p> tag for some reason gave a line break-->

			<!-- WP Conditionals page is always helpful.  it's in_category not is_category! (which only works on archive pages prob)
			https://codex.wordpress.org/Conditional_Tags
			-->
			<?php
				$events = '18';
					if (in_category( $events )) {  ?>
						You can check out all events by visiting the<span class="category"><?php the_category( ' ') ?></span>archive page.

					<?php
					} else {	// it's neither, do nothing  ?>
					This post was tagged with:
					<span><?php echo the_tags( '<li>', '</li><li>', '</li>' );				?>
					</span>
					<?
					}
			?>
		</h5>
	</div>

</div>


<?php get_footer(); ?>
