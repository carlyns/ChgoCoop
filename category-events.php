<?php get_header(); ?>


<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>
</head>

<body>
	<?php include ('topsticky.php'); ?>

	<?php include ('menu.php'); ?>

<div class="container">
	<!-- if trying to display posts that are CPT, the ARCHIVE PAGE  NEEDS TO BE TOGGLED EITHER MANUALLY (if custom post types were manually created) OR VIA THE CPT UI SETTINGS: "HAS ARCHIVE".-->
	<!-- but apparently CPT 'tools' needs some more tweaking.-->

	<?php if ( have_posts() ) : ?>
		<h2>Upcoming Events you don't wanna miss</h2>

	<?php while ( have_posts() ) : the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p>
			<?php the_tags()  ?>
		</p>

	<?php endwhile; else : ?>

		<p><?php _e( "Unfortunately, there are no upcoming events.  But check back here soon!  Or subscribe to our RSS feed to be notified. " ); //_e aka echo
		?></p>

	<?php endif; ?>



	<?php if ( have_posts() ) : ?>
		<h2>Past Events.  sorry you missed them :(</h2>

	<?php while ( have_posts() ) : the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p>
			<?php the_tags()  ?>
		</p>

	<?php endwhile; else : ?>

		<p><?php _e( "None yet!" ); //_e aka echo
		?></p>

	<?php endif; ?>


		<!-- ADD PAGINATION JUST IN CASE??  HOW MANY RESULTS DOES IT DISPLAY? -->


</div>

<?php get_footer(); ?>
