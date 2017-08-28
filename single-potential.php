<?php get_header(); ?>

<!-- a unique stylesheet for certain pages.-->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/profiles.css">

	<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>

<body>

<?php include ('topsticky.php'); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>
	<?php endwhile; endif; ?>


	<hr>
  <div class="tags">
		<h5 class="potentialtips">
			If you can imagine this property as a great housing co-op for your group, here are <a href="<?php echo get_permalink(496); ?>">some tips</a>.
		</h5>
		<h5>
      You can check out all Potential Properties by visiting the<span class="category"><a href="<?php echo get_post_type_archive_link( 'potential' ); ?>">potential</a>
      </span>archive page.
		</h5>
	</div>

</div>


<?php get_footer(); ?>
