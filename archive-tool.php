<?php get_header(); ?>


<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
</head>

<body>
	<?php include ('topsticky.php'); ?>

<div class="container archive">

	<?php // DISPLAY CUSTOM POST TYPE
	$args = array( 'post_type' => 'tool', 'posts_per_page' => -1, 'cat' => 15, 'order'=> 'ASC', 'orderby' => 'title' ); //Define your custom post type name in the arguments
	$loop = new WP_Query( $args ); //Define the loop based on those arguments
	//Display the contents
	?>


	<?php if ( have_posts() ) : ?>
		<p>
			You were looking for Tools for Existing Co-ops:
		</p>

		<?php while ( $loop->have_posts() ) : $loop->the_post();  ?>

		<h3>
			<ul>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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

	<div class="search">
		<p>Or try searching for something else.  </p>
		<?php get_search_form(); ?></div>
	</div>

<?php get_footer(); ?>
