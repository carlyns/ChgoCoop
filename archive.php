<?php get_header(); ?>

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
</head>

<body>
	<!-- menu not appearing on it's own, so adding this snippet -->
		<?php
		global $query_string;
		parse_str($query_string, $args);
		$args['post_type'] = array('nav_menu_item','post');
		query_posts( $args );
		?>

<?php include ('topsticky.php'); ?>

<div class="container archive">

	<?php if ( have_posts() ) : ?>
		<p>
			You were looking for the tag/category/type <span class="keyword">
				<?php if ( is_post_type_archive() ){
					echo get_post_type();
				} ?>

				<?php single_tag_title(); ?>
			</span>.  Here are some posts/pages that match:
		</p>
		<p>(In order of publication)</p>

		<ul>
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<h3>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>
				</li>
			<?php endwhile; else : ?>
		</ul>

		<p>
				You were looking for the tag/category/type <span class="keyword"><?php single_tag_title(); ?></span>.
			<?php _e( "Unfortunately, no posts matched your criteria.  But don't give up just yet!" ); 
		?></p>

	<?php endif; ?>

	<div class="search">
		<p>Or try searching for something else.  </p>
		<?php get_search_form(); ?></div>
	</div>

<?php get_footer(); ?>
