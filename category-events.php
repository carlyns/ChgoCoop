<?php get_header(); ?>


<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
</head>

<body>
	<!-- menu not appearing on it's own, so adding this snippet -->
		<?php
			global $query_string;
			parse_str($query_string, $args);
			$args['post_type'] = array('nav_menu_item','post');
			query_posts( $args );
		?>
		<?php include ('topsticky.php'); ?>

<div class="container archive">

	<!-- if event_start_date is equal to or after todays date, then get those posts. -->

	<?php // DEFINE THE QUERY ARGUMENTS FOR EVENTS TODAY OR IN THE FUTURE
	$today = date("Ymd");

	$args = array (
		'cat' => 18,
		'posts_per_page' => -1,
		'orderby' => 'meta_value_num', // order soonest first
		'order' => 'ASC',
	 	'meta_query' => array(
		 array(
				'key'       => 'event_start_date', // ACF name
				'compare'   => '>=', // met this condition
				'value'     => $today,
			)
		),
	);
	?>

	<?php // PASS THOSE ARGUMENTS THROUGH TO RETREIVE THE POSTS THAT MEET THE >= CONDITION
	$events = new WP_Query( $args ); ?>

	<?php if ( $events->have_posts() ) : ?>
		<h2>Upcoming Events</h2>

	<?php while ( $events->have_posts() ) : $events->the_post(); ?>

		<?php  // edited code from: http://www.advancedcustomfields.com/resources/date-picker/
			$date = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			$month = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			$day = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
		?>

		<h3><span class="eventdate"><?php echo $day->format('l'); ?>, <?php echo $date->format('F'); ?> <?php echo $date->format('d'); ?>, <?php echo $date->format('Y'); ?>. </span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

	<?php endwhile; else : ?>

		<p><?php _e( "Unfortunately, there are no upcoming events.  But check back here soon!  Or subscribe to our RSS feed to be notified. " );
		?></p>

	<?php endif; ?>
	<?php wp_reset_postdata(); // RESETTING TO ORIG LOOP ?>


	<hr>
	<!-- if event_start_date is before todays date, then get those posts.-->
	<?php // DEFINE THE QUERY ARGUMENTS FOR EVENTS IN THE PAST
	$today = date("Ymd");

	$args = array (
		'cat' => 18,
    'posts_per_page' => -1,
    'orderby' => 'event_start_date',
    'order'          => 'ASC',
   	'meta_query' => array(
	     array(
	        'key'       => 'event_start_date',
	        'compare'   => '<',
	        'value'     => $today,
	    )
    ),
	);
 ?>

	<?php // PASS THOSE ARGUMENTS THROUGH TO RETREIVE THE POSTS THAT MEET THE > CONDITION
	$pastevents = new WP_Query( $args ); ?>

	<?php if ( $pastevents->have_posts() ) : ?>
		<h2>Past Events</h2>

	<?php while ( $pastevents->have_posts() ) : $pastevents->the_post(); ?>
		<?php  // edited code from: http://www.advancedcustomfields.com/resources/date-picker/
			$date = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			$month = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			$day = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
		?>

		<h3><span class="eventdate"><?php echo $day->format('l'); ?>, <?php echo $date->format('F'); ?> <?php echo $date->format('d'); ?>, <?php echo $date->format('Y'); ?>. </span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

	<?php endwhile; else : ?>
		<p><?php _e( "No past events yet!" );
		?></p>

	<?php endif; ?>
	<?php wp_reset_postdata(); // RESETTING TO ORIG LOOP ?>


</div>

<?php get_footer(); ?>
