<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>



<body>
<?php include_once("analyticstracking.php") ?>
<?php include ('topsticky.php'); ?>


<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <?php the_content(); ?>
	<?php endwhile; endif; ?>

</div>


<?php get_footer(); ?>
