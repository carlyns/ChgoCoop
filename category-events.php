<?php get_header(); ?>


<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>
</head>

<body>
	<?php include ('topsticky.php'); ?>

	<?php include ('menu.php'); ?>

<div class="container">

	<!-- Write if statement: if event_start_date is equal to or after todays date, then get those posts.  And show only those here.-->

	<!-- CODE FOUND HERE: https://support.advancedcustomfields.com/forums/topic/using-datepicker-to-display-posts-on-a-page/-->

	<?php // DEFINE THE QUERY ARGUMENTS FOR EVENTS TODAY OR IN THE FUTURE ?>
	<?php
	$today = date("Ymd");

	$args = array (
            'posts_per_page' => -1,
						'orderby'       => 'meta_value_num', // ORDER SOONEST FIRST
            'order'          => 'ASC',
   'meta_query' => array(
         array(
            'key'       => 'event_start_date', // needed to change this to my ACF name
            'compare'   => '>=',
            'value'     => $today,
        )
    ),
	);
 ?>

	<?php // PASS THOSE ARGUMENTS THROUGH TO RETREIVE THE DATA ?>
	<?php $events = new WP_Query( $args ); ?>

	<?php if ( $events->have_posts() ) : ?>
		<h2>Upcoming Events you don't wanna miss</h2>

	<?php while ( $events->have_posts() ) : $events->the_post(); ?>
		<!-- Pulling ACF fields to an archive page works! -->

		<?php  // edited code from: http://www.advancedcustomfields.com/resources/date-picker/
			$date = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			$month = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			$day = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
		?>

		<h3><span class="eventdate"><?php echo $day->format('l'); ?>, <?php echo $date->format('F'); ?> <?php echo $date->format('d'); ?>. </span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

	<?php endwhile; else : ?>
		<!-- Otherwise show this:-->

		<p><?php _e( "Unfortunately, there are no upcoming events.  But check back here soon!  Or subscribe to our RSS feed to be notified. " ); //_e aka echo
		?></p>

	<?php endif; ?>
	<?php wp_reset_postdata(); // RESETTING TO ORIG LOOP ?>



	<!-- Write if statement: if event_start_date is before todays date, then get those posts.  And show only those here.-->
	<?php // DEFINE THE QUERY ARGUMENTS FOR EVENTS TODAY OR IN THE FUTURE ?>
	<?php
	$today = date("Ymd");

	$args = array (
            'posts_per_page' => -1,
            /* --- 'meta_key'       => 'date_debut', --NEEDED TO DELETE THIS --*/
            /* --- 'orderby'       => 'meta_value_num', --- REVERSE DATE ORDER --*/
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

	<?php // PASS THOSE ARGUMENTS THROUGH TO RETREIVE THE DATA ?>
	<?php $pastevents = new WP_Query( $args ); ?>

	<?php if ( $pastevents->have_posts() ) : ?>
		<h2>Past Events.  sorry you missed them :(</h2>

	<?php while ( $pastevents->have_posts() ) : $pastevents->the_post(); ?>
		<?php  // edited code from: http://www.advancedcustomfields.com/resources/date-picker/
			$date = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			$month = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
			$day = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
		?>

		<h3><span class="eventdate"><?php echo $day->format('l'); ?>, <?php echo $date->format('F'); ?> <?php echo $date->format('d'); ?>. </span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

	<?php endwhile; else : ?>

		<p><?php _e( "No past events yet!" ); //_e aka echo
		?></p>

	<?php endif; ?>
	<?php wp_reset_postdata(); // RESETTING TO ORIG LOOP ?>


		<!-- ADD PAGINATION JUST IN CASE??  HOW MANY RESULTS DOES IT DISPLAY? -->


</div>

<?php get_footer(); ?>
