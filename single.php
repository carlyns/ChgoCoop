<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->


<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<?php include ('menu.php'); ?>


<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>
	<?php endwhile; endif; ?>

	<hr>
	<div class="tags">
		<h5> <!-- wrapping with a <p> tag for some reason gave a line break-->

			<!-- WP Conditionals page is always helpful.  it's in_category not is_category! (which only works on archive pages prob)
			https://codex.wordpress.org/Conditional_Tags
			-->
			<?php
				$category = '18';
					if (in_category( $category )) {  ?>
						You can check out all events by visiting the<span class="category"><?php the_category( ' ') ?></span>archive page.

					<?php
					} else {	// it's neither, do nothing  ?>
					This post was tagged with:
					<span><?php echo the_tags( '<li>', '</li><li>', '</li>' );				?>
					</span>
					<?
					}
			?>
		</h5>
	</div>

</div>


<?php get_footer(); ?>
