<?php get_header(); ?>

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>

<body>

<?php include ('topsticky.php'); ?>

<div class="container archive">

	<h1>Search Results:</h1>

	<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></a>
			<span class="date">(Posted on: <?php the_date('l, F j, Y'); ?>)</span></h3>

	<?php endwhile; else : ?>
		<p>Sorry, no search results were found. </p>

	<?php endif; ?>

</div> <!--/ "container" -->


<?php get_footer(); ?>
