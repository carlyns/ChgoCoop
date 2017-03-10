<?php get_header(); ?>

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
</head>

<body>

<?php include ('topsticky.php'); ?>

<div class="container archive">

	<h1>Archived News Items</h1>
	<!-- SHOULD NOT DISPLAY CPTs -->
	<p>(Ordered by most recently published)</p>

	<!-- see menu.php for documentation on the issue i had and why the following snippet is here. isolating this target query here, where there's the main problem. -->
	<?php

	global $query_string;
	parse_str($query_string, $args);
	$args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'order'=> 'DESC', 'orderby' => 'post_date' );	// can delete articles from the array and it'll still work.  this is leftover from the copied code cuz somone had a CPT of 'articles' -- array was also slightly revised from just this ( $args['post_type'] = array('post');  )  to order alphabetically
	// any stickys ends up at top
	query_posts( $args );


	?>

		<ul>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li>
					<h3>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<span class="date">(Posted on: <?php the_date('l, F j, Y'); ?>)</span>
					</h3>
				</li>
			<?php endwhile; endif; ?>
		</ul>

</div> <!--/ "container" -->


<?php get_footer(); ?>
