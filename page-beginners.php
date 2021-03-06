<?php get_header(); ?>

<!-- a unique stylesheet for certain pages.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bandedsections.css">

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>


<body>
<?php include_once("analyticstracking.php") ?>
<?php include ('topsticky.php'); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="topbanner">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="topbanner showonscrolldown">
		<h1><?php the_title(); ?></h1>
	</div>
	<?php endwhile; endif; ?>


<div class="container">

	<h2 class="funfact"><?php the_content(); ?></h2>

	<div class="allposts">
		<h2>Tools & Posts relevant to beginners</h2>

			<?php // ALL 'BEGINNERS' TOOLS
			$args = array( 'post_type' => 'tool', 'tag' => 'beginners', 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'title' );

			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
				<h4><?php the_title(); ?></h4>
			</a>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>


			<?php // ALL FROM EXPLORE CATEGORY
			$args = array( 'cat' => 10, 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'title' );
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
				<h4><?php the_title(); ?></h4>
			</a>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

	</div>

</div> <!-- end of "container" -->


<?php get_footer(); ?>
