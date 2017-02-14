<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bandedsections.css">

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<div class="allsections">
	<div class="topbanner">
		<h1><?php the_field('explore_banner'); ?></h1>
	</div>
	<!-- repeated div that unique to scrolldown -->
	<div class="topbanner showonscrolldown">
		<h1><?php the_field('explore_banner'); ?></h1>
	</div>

	<div class="band-white">
		<h2>The Very Beginning</h2>
			<!-- Show all posts (CPT only) of "tools" (not tagged with "formation") + Explore Category -->


		<section>

			<?php //HOW TO DISPLAY CUSTOM POSTS from https://wp-types.com/documentation/user-guides/displaying-wordpress-custom-content/

			// how to exclude a tag: http://wordpress.stackexchange.com/questions/180052/exclude-tags-by-array  but in the end it made more sense to just create another tag

			$args = array( 'post_type' => 'tool', 'tag' => 'beginners', 'posts_per_page' => 6, 'order'=> 'DESC', 'orderby' => 'date' ); //Which tag you want, how many posts to show

 			//Define your custom post type name in the arguments
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
				<?php endwhile; ?>
			</a>
			<?php // RESETTING TO ORIG LOOP
			wp_reset_postdata(); ?>
		</section>


		<!-- THE FOLLOWING LINK SHOULD BE A CRAFTED PAGE JUST FOR BEGINNING EXPLORERS -->
		<a href="<?php get_page_template(); ?>/chgocoopWP/explore/beginners"><div class="button-section">Get Started</div></a>

	</div>

	<div class="band-green">
		<h2>Anecdotes & Advice for Beginners</h2>
		<!--
			Show all posts (blog only) of "advice"  + Explore Category
			(advice tag could be for Explore & Enhance, eg for the co-op principles)
		-->
		<section>


			<?php
			$args = array( 'tag' => 'advice', 'cat' => 10, 'posts_per_page' => 6, 'order'=> 'ASC', 'orderby' => 'title' ); //Which tag you want, how many posts to show
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
		<!-- THE FOLLOWING LINK SHOULD BE AN ARCHIVE PAGE for tag "advice" -->
		<a href="<?php get_page_template(); ?>/chgocoopWP/tag/advice"><div class="button-section">See All Inspiring Stories</div></a>
	</div>

	<div class="band-white" class="threeactions">
		<h2>Find an Existing Co-op Vacancy</h2>
		<p>If you prefer to drop into an already existing cooperative in/near Chicago, there are a few options:</p>
		<div class="explore-action">
			<p>Check out the directory for vacancies. We also profile vacancies in the <a href="http://eepurl.com/cmiuZv" target="_blank">"Good Housing" newsletter</a>, managed by RESUS.</p>
			<a href="<?php get_page_template(); ?>/chgocoopWP/directory"><div class="button-bottom">View directory</div></a>
		</div>
		<div class="explore-action">
			<p>
				Visit Craigslist and use the search term “co-op” or “cooperative.” You may also want to try online real-estate listings.
			</p>
			<a href="http://chicago.craigslist.org/search/hhh?query=%22cooperative%22&availabilityMode=0" target="_blank"><div class="button-bottom">Visit Craigslist</div></a>
		</div>
		<div class="explore-action">
			<p>
				Get notified when Fireplace - a new match tool - is launched.  It will help you discover your closest co-op match for a co-op or a group.
			</p>
			<a href="http://eepurl.com/_-yvz"><div class="button-bottom">Get updates</div></a>
		</div>


	</div>

	<div class="band-green">
		<h2>DIY: Form Your Own Co-op!</h2>
		<!--
			Show all posts (CPT only) of "tools" (tagged with "formation") + Explore Category
		-->
		<section>

			<?php

			$args = array( 'post_type' => 'tool', 'tag' => 'formation', 'posts_per_page' => 6, 'orderby' => 'rand' ); //Which tag you want, how many posts to show
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
		<!-- THE FOLLOWING LINK SHOULD BE A CRAFTED PAGE DETAILING THE PROCESS OF FORMING COOPS -->
		<a href="<?php get_page_template(); ?>/chgocoopWP/explore/formation"><div class="button-section">Read More</div></a>
	</div>

</div> <!-- //end of "allsections"-->


<?php get_footer(); ?>
