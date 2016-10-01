<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bandedsections.css">



<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<?php include ('menu.php'); ?>

<div class="allsections">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>
	<?php endwhile; endif; ?>  <!-- THIS CONTENT PROBABLY WONT SHOW -->

	<div class="band-white">
		<h2>The Very Beginning</h2>
		<p>
			Show all posts (CPT only) of "tools" (not tagged with "formation") + Explore Category
		</p>
		<section>
			<!-- DISPLAY CUSTOM POST TYPE OF "TOOL" WITH THE PROPER DIV/CLASS WRAPPING.  AS A CUSTOM POST TYPE, IT WON'T SHOW UP IN THE BLOG FEED. THIS IS PROBABLY GOOD FOR DOCUMENTS AND TEMPLATES.  NEEDS TO BE WRAPPED IN A LINK TO THE POST. DISPLAY 6 MAX. -->

			<?php //HOW TO DISPLAY CUSTOM POSTS from https://wp-types.com/documentation/user-guides/displaying-wordpress-custom-content/
			$args = array( 'post_type' => 'tool', 'posts_per_page' => 6 ); //Define your custom post type name in the arguments
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
				<div class="infotool">
					<div class="icon">
						<?php
							$image = get_field('tool_img');
				      if( !empty($image) ): ?>
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
		<h2>Anecdotes / Stories, Advice for Beginners</h2>
		<p>
			Show all posts (blog only) of "advice"  + Explore Category
			(advice tag could be for Explore & Enhance, eg for the co-op principles)
		</p>
		<section>


			<?php
			$args = array( 'tag' => 'advice', 'posts_per_page' => 6, 'order'=> 'ASC', 'orderby' => 'title' ); //Which tag you want, how many posts to show
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
			<div class="infotool">
				<div class="icon">
					<!-- ADD A ICON FOR ALL THE 'ADVICE' TAGGED POSTS -->
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

	<div class="band-white">
		<h2>Find an Existing Co-op Vacancy</h2>
		<p>
			>> STYLE THIS INTO 3 ACTION BUTTONS
		</p>
		<p>If you prefer to drop into an already existing cooperative in/near Chicago, there are a few options:</p>
		<ol>
			<li>Check out the map for vacancies. We also profile vacancies <a href="#">on our blog</a>, so subscribe to it!</li>
			<li>Visit Craigslist and use the search term “co-op” or “cooperative” (We also capture these via ifttt in our blog)</li>
			<li>Create a Fireplace profile and discover your closest co-op match. This new tool will connect you!</li>
		</ol>
	</div>

	<div class="band-green">
		<h2>Form Your Own Co-op! (DIY)</h2>
		<p>
			Show all posts (CPT only) of "tools" (tagged with "formation") + Explore Category
		</p>
		<section>

			<?php
			$args = array( 'post_type' => 'tool', 'tag' => 'formation', 'posts_per_page' => 6, 'order'=> 'ASC', 'orderby' => 'title' ); //Which tag you want, how many posts to show
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
			<div class="infotool">
				<div class="icon">
					<!-- ADD A ICON FOR ALL THE 'FORMATION' TAGGED POSTS -->
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
