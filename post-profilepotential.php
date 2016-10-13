<?php get_header(); ?>

<?php /* WP Post Template: Profile: Potential Property */ ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/profiles.css">-->



<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<?php include ('menu.php'); ?>


<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		This is uniquely formatted for an Property that has Co-op Potential.
		<h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>
	<?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag! ?>

</div>


<?php get_footer(); ?>