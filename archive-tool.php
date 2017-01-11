<?php get_header(); ?>


<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>
</head>

<body>
	<?php include ('topsticky.php'); ?>

	<?php include ('menu.php'); ?>

<div class="container archive">
	<!-- if trying to display posts that are CPT, the ARCHIVE PAGE  NEEDS TO BE TOGGLED EITHER MANUALLY (if custom post types were manually created) OR VIA THE CPT UI SETTINGS: "HAS ARCHIVE".-->
	<!-- but apparently CPT 'tools' needs some more tweaking.-->

	<?php // DISPLAY CUSTOM POST TYPE
	// be aware tag & cat intersection has unique arguments: http://wordpress.stackexchange.com/questions/4201/how-to-query-posts-by-category-and-tag-
	$args = array( 'post_type' => 'tool', 'posts_per_page' => 6, 'cat' => 15 ); //Define your custom post type name in the arguments
	$loop = new WP_Query( $args ); //Define the loop based on those arguments
	//Display the contents
	?>


	<?php if ( have_posts() ) : ?>
		<p>
			You were looking for Tools for Existing Co-ops:
				<!-- add the Tag Description? -->
		</p>

		<?php while ( $loop->have_posts() ) : $loop->the_post();  ?>

		<h3>
			<ul>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				<!-- IF I WANT TO SHOW THE PUBLISHED DATE (but the CPT don't have any!)
				<span class="date">
					(Published: <?php the_date(); ?>)
				</span>----------->
				</li>
			</ul>
		</h3>


	<?php endwhile; else : ?>

		<p>
			You were looking for Tools for Existing Co-ops.
			<?php _e( "Unfortunately, no posts matched your criteria.  But don't give up just yet!" ); //_e aka echo
		?></p>

	<?php endif; ?>
	<?php // RESETTING TO ORIG LOOP
	wp_reset_postdata(); ?>

	<!-- ADD PAGINATION JUST IN CASE??  HOW MANY RESULTS DOES IT DISPLAY? -->

	<div class="search">
		<p>Or try searching for something else.  </p>
		<?php get_search_form(); ?></div>
	</div>

<?php get_footer(); ?>
