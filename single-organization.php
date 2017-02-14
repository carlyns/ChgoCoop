<?php get_header(); ?>

	<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>

<body>

<?php include ('topsticky.php'); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>
	<?php endwhile; endif;  ?>

	<hr>
	<div class="tags">
		<h5> <!-- wrapping with a <p> tag for some reason gave a line break-->

			You can check out all organizations by visiting the<span class="category"><a href="<?php get_page_template(); ?>/chgocoopWP/organization">organizations</a>
			</span>archive page.

		</h5>
	</div>

</div>


<?php get_footer(); ?>
