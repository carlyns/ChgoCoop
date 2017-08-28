<?php get_header(); ?>

<!-- a unique stylesheet for certain pages.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/frontpage.css">

<title><?php bloginfo( 'name' ); ?></title>

</head>

<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include ('topsticky-uniquefront.php'); ?>

	<div class="overview">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  <?php the_content(); ?>
		<?php endwhile; endif; ?>

	</div>
</header>
</div>
<!-- header tag closes within topsticky for every page except front page-->


<div class="container">

<div class="row twousers">
	<div class="grid6">
		<div class="explorers">
			<h2>EXPLORE</h2>
			<div class="block">
				<p><?php the_field( 'explore_message' ); ?></p>
			</div>

			<!-- permalink for Explore page -->
			<a href="<?php echo get_permalink(7); ?>"><div class="style-button button-bottom">GO</div></a>
		</div>
	</div>

	<div class="grid6">
		<div class=existing>
			<h2>ENHANCE</h2>

			<div class="block">
				<p><?php the_field( 'enhance_message' ); ?></p>
			</div>

			<!-- permalink for Enhance page -->
			<a href="<?php echo get_permalink(5); ?>"><div class="style-button button-bottom">GO</div></a>
		</div>
	</div>
</div>

	<div class="row latest">
		<h2>The Latest: What’s Happening in Chicago?</h2>

		<div class="grid4">
			<div class="featured-org">

				<h3>PROPERTY SPOTLIGHT</h3>

					<?php
					// vars
					$org = get_field('featured_prop', false, false);

					// check
					if( $org ): ?>

					<div class="thumbnail">
					  <a href="<?php echo get_the_permalink($org); ?>"><?php echo get_the_post_thumbnail($org); ?></a>

					</div>
					<p class="orgname"><?php echo get_the_title($org); ?>:
					<?php echo get_the_excerpt($org); ?></p>
					<a href="<?php echo get_the_permalink($org); ?>"><div class="style-button button-bottom">Read More</div></a>

					<?php endif; ?>


			</div> <!-- end of 'featured'-->
		</div> <!-- end of 'grid4'-->

		<div class="grid4">
			<div class="featured-unit">
				<h3>FEATURED THIS MONTH</h3>

				<?php
				// vars
				$tool = get_field('featured_tool', false, false);

				// check
				if( $tool ): ?>

				<div class="thumbnail">
					<a href="<?php echo get_the_permalink($tool); ?>"><?php echo get_the_post_thumbnail($tool); ?></a>
				</div>

				<p>
				<?php echo get_the_excerpt($tool); ?></p>

				<a href="<?php echo get_the_permalink($tool); ?>"><div class="style-button button-bottom">Try It</div></a>
				<?php endif; ?>


			</div> <!-- end of 'featured'-->
		</div>  <!-- end of 'grid4'-->

		<div class="grid4">
			<div class="featured-coop">


				<h3>STARTUP STORIES</h3>

				<?php
				// vars
				$startup = get_field('featured_startup_story', false, false);

				// check
				if( $startup ): ?>

				<div class="thumbnail">
					<a href="<?php echo get_the_permalink($startup); ?>"><?php echo get_the_post_thumbnail($startup); ?></a>
				</div>

				<p>
				<?php echo get_the_excerpt($startup); ?></p>
				<a href="<?php echo get_the_permalink($startup); ?>"><div class="style-button button-bottom">Read More</div></a>

				<?php endif; ?>



			</div> <!-- end of 'featured'-->
		</div> <!-- end of 'grid4'-->
	</div> <!-- end of 'row latest'-->

	<div class="row randomaction">
		<h4><?php the_field( 'random_action' ); ?></h4>

		<a href="<?php the_field( 'random_action_link' ); ?>" target="_blank"><div class="style-button"><?php the_field( 'random_action_button' ); ?></div></a>
	</div>


</div> <!--/ "container" -->

<?php get_footer(); ?>
