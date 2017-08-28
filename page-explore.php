<?php get_header(); ?>

<!-- a unique stylesheet for certain pages.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bandedsections.css">

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>


<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include ('topsticky.php'); ?>

<div class="allsections">
	<div class="topbanner">
		<h1><?php the_field('explore_banner'); ?></h1>
	</div>
	<!-- repeated div that's unique to scrolldown -->
	<div class="topbanner showonscrolldown">
		<h1><?php the_field('explore_banner'); ?></h1>
	</div>

	<div class="band">
		<h2>The Very Beginning</h2>

		<section>

			<?php

			$args = array( 'post_type' => 'tool', 'tag' => 'beginners', 'posts_per_page' => 6, 'order'=> 'DESC', 'orderby' => 'date' );

 			//Define your custom post type name in the arguments
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
				<div class="infotool">
					<div class="icon">

					<?php // IF you uploaded a standard tool icon under ACF 'icon_thumb', it means you want this to display as the landingpage icon. This captures pdf documents.  ?>
					<?php
					$icon_thumb = get_field('icon_thumb');
					$image = get_field('tool_img');
			      if( !empty($icon_thumb) ): ?>
						<img src="<?php echo $icon_thumb['url']; ?>" alt="<?php echo $icon_thumb['alt']; ?>" />

					<?php // ELSE you want the uploaded post image to display as the landingpage icon
					$image = get_field('tool_img');
						else : ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>

					</div>



					<h3><?php the_title(); ?></h3>
				</div>
				<?php endwhile; ?>
			</a>
			<?php // RESETTING TO ORIG LOOP
			wp_reset_postdata(); ?>
		</section>

		<a href="<?php echo get_permalink(41); ?>"><div class="button-section">See All</div></a>

	</div>

	<div class="band">
		<h2>Anecdotes & Advice for Beginners</h2>

		<section>

			<?php
			$args = array( 'tag' => 'advice', 'cat' => 10, 'posts_per_page' => 6, 'order'=> 'ASC', 'orderby' => 'title' );
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
			<div class="infotool">
				<div class="icon">
					<?php the_post_thumbnail('tool-icon'); ?>
				</div>
				<h3><?php the_title(); ?></h3>
			</div>
			</a>

			<?php endwhile; ?>
		<?php // RESETTING TO ORIG LOOP
		wp_reset_postdata(); ?>

		</section>

		<a href="<?php echo get_tag_link( 11 ); ?>"><div class="button-section">See All Inspiring Stories</div></a>
	</div>

	<div class="band" class="threeactions">
		<h2><?php the_field('vacancy_section'); ?></h2>

		<div class="explore-action">
			<?php the_field('first_explore_action'); ?>
			<a href="<?php the_field('first_explore_action_link'); ?>"><div class="button-bottom"><?php the_field('first_explore_action_button'); ?></div></a>
		</div>

		<div class="explore-action">
			<?php the_field('second_explore_action'); ?>
			<a href="<?php the_field('second_explore_action_link'); ?>"><div class="button-bottom"><?php the_field('second_explore_action_button'); ?></div></a>
		</div>

		<div class="explore-action">
			<?php the_field('third_explore_action'); ?>
			<a href="<?php the_field('third_explore_action_link'); ?>"><div class="button-bottom"><?php the_field('third_explore_action_button'); ?></div></a>
		</div>


	</div>

	<div class="band">
		<h2>DIY: Form Your Own Co-op!</h2>

		<section>

			<?php

			$args = array( 'post_type' => 'tool', 'tag' => 'formation', 'posts_per_page' => 6, 'orderby' => 'rand' );
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
			<div class="infotool">
				<div class="icon">

					<?php // IF you uploaded a standard tool icon under ACF 'icon_thumb', it means you want this to display as the landingpage icon. this captures ugly pdf documents.  ?>
					<?php
					$icon_thumb = get_field('icon_thumb');
					$image = get_field('tool_img');
			      if( !empty($icon_thumb) ): ?>
						<img src="<?php echo $icon_thumb['url']; ?>" alt="<?php echo $icon_thumb['alt']; ?>" />

					<?php // ELSE you want the uploaded post image to display as the landingpage icon
					$image = get_field('tool_img');
						else : ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>

				</div>
				<h3><?php the_title(); ?></h3>
			</div>
			</a>

			<?php endwhile; ?>
		<?php // RESETTING TO ORIG LOOP
		wp_reset_postdata(); ?>

		</section>
		<a href="<?php echo get_permalink(43); ?>"><div class="button-section">See All</div></a>
	</div>

</div> <!-- //end of "allsections"-->


<?php get_footer(); ?>
