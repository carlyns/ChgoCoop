<?php get_header(); ?>


<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>


<body>

<?php include ('topsticky.php'); ?>

<div class="container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>

			<div class="tool-img">
				<!-- if this is a stock photo, you don't want it too big -->
				<!-- also encourage people to click the zoomable pdf link below -->
				<?php $image = get_field('tool_img');
					if( !empty($image) ): ?>

					<!-- it may not have an associated pdf (fireplace link) so you don't want to wrap this with an <a> tag-->
						<a href="<?php echo $image['url']; ?>" target="_blank"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

					<?php endif; ?>
			</div>



			<?php if( get_field('document') ): ?>

				<h4><a href="<?php the_field('document'); ?>" target="_blank">Download File (opens in a new window)</a></h4>

			<?php endif; ?>


		<?php endwhile; endif; ?>

		<hr>
		<div class="tags">
			<h5> <!-- wrapping with a <p> tag for some reason gave a line break-->
				This post was tagged with:
				<span><?php echo the_tags( '<li>', '</li><li>', '</li>' );				?></span>
			</h5>
		</div>


</div>


<?php get_footer(); ?>
