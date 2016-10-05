<?php get_header(); ?>


<title>Cooperative Homes & Communities of Chicago</title>

</head>



<body>
	<div class="container">

				<p class="tagline">This is the index.php page!</p>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<p>Posted on: <?php the_date('l, F j, Y'); ?></p>
					<?php the_excerpt(); ?>
				<?php endwhile; endif; ?> <!-- THIS CONTENT PROBABLY WONT SHOW -->



</div> <!--/ "container" -->


</body>
</html>
