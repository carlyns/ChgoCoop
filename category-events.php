<?php get_header(); ?>


<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
</head>

<body>
	<!-- menu not appearing on it's own, so adding this snippet -->
		<?php

		global $query_string;
		parse_str($query_string, $args);
		$args['post_type'] = array('nav_menu_item','post'); // can delete articles from the array and it'll still work.  this is leftover from the copied code cuz somone had a CPT of 'articles'
		query_posts( $args );
		?>
		<?php include ('topsticky.php'); ?>

<div class="container archive">

	<!-- Write if statement: if event_start_date is equal to or after todays date, then get those posts.  And show only those here.-->

	<!-- CODE FOUND HERE: https://support.advancedcustomfields.com/forums/topic/using-datepicker-to-display-posts-on-a-page/-->

	<?php // DEFINE THE QUERY ARGUMENTS FOR EVENTS TODAY OR IN THE FUTURE
	$today = date("Ymd");

	$args = array (
		'cat' => 18, // oddly, a startup story was getting queried so i added this filter
		'posts_per_page' => -1,
		'orderby' => 'meta_value_num', // order soonest first, seems to be working even though acf is different from publish date 
		'order' => 'ASC',
	 	'meta_query' => array(
		 array(
				'key'       => 'event_start_date', // needed to change this to my ACF name
				'compare'   => '>=', // met this condition
				'value'     => $today,
			)
		),
	);
	?>

	<?php // PASS THOSE ARGUMENTS THROUGH TO RETREIVE THE POSTS THAT MEET THE >= CONDITION ?>
	<?php $events = new WP_Query( $args ); ?>

	<?php if ( $events->have_posts() ) : ?>
		<h2>Upcoming Events</h2>

	<?php while ( $events->have_posts() ) : $events->the_post(); ?>
		<!-- Pulling ACF fields to an archive page works! -->

		<?php  // edited code from: http://www.advancedcustomfields.com/resources/date-picker/
			$date = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			$month = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			$day = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
		?>

		<h3><span class="eventdate"><?php echo $day->format('l'); ?>, <?php echo $date->format('F'); ?> <?php echo $date->format('d'); ?>, <?php echo $date->format('Y'); ?>. </span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

	<?php endwhile; else : ?>

		<p><?php _e( "Unfortunately, there are no upcoming events.  But check back here soon!  Or subscribe to our RSS feed to be notified. " ); //_e aka echo
		?></p>

	<?php endif; ?>
	<?php wp_reset_postdata(); // RESETTING TO ORIG LOOP ?>


	<hr>
	<!-- Write if statement: if event_start_date is before todays date, then get those posts.  And show only those here.-->
	<?php // DEFINE THE QUERY ARGUMENTS FOR EVENTS IN THE PAST
	$today = date("Ymd");

	$args = array (
		'cat' => 18, // oddly, a startup story was getting queried so i added this filter
    'posts_per_page' => -1,
    /* --- 'meta_key'       => 'date_debut', --NEEDED TO DELETE THIS --*/
    'orderby' => 'event_start_date', /* --- need to use this (not meta_value_num) because Published Date of Post is different from the ACF date --*/
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

	<?php // PASS THOSE ARGUMENTS THROUGH TO RETREIVE THE POSTS THAT MEET THE > CONDITION ?>
	<?php $pastevents = new WP_Query( $args ); ?>

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
		<p><?php _e( "No past events yet!" ); //_e aka echo
		?></p>

	<?php endif; ?>
	<?php wp_reset_postdata(); // RESETTING TO ORIG LOOP ?>



		<!-- ADD PAGINATION JUST IN CASE??  HOW MANY RESULTS DOES IT DISPLAY? -->


</div>

<?php get_footer(); ?>
