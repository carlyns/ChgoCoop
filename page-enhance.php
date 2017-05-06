<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bandedsections.css">

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>



<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include ('topsticky.php'); ?>

<div class="allsections">
	<div class="topbanner">
		<h1><?php the_field('enhance_banner'); ?></h1>
	</div>
	<!-- repeated div that unique to scrolldown -->
	<div class="topbanner showonscrolldown">
		<h1><?php the_field('enhance_banner'); ?></h1>
	</div>

	<div class="band">
		<h2>Fundamentals & Collaboration</h2>
			<!-- Show all posts (CPT or blog) + Enhance Category -->
		<section>
			<?php
			$args = array( 'cat' => 15, 'posts_per_page' => 6, 'orderby' => 'rand' ); //Which tag you want, how many posts to show
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<!-- STILL DOESN'T SHOW BOTH REG BLOG POSTS AND CPT POSTS, EVEN THOUGH ARCHIVE PAGE DOES!! -->

			<!-- THIS LOOP IS NOT SHOWING THE CPT ... HOW TO INCLUDE THE CPT THAT ARE TAGGED WITH 'PRINCIPLES'?? -->

			<a href="<?php the_permalink(); ?>">
			<div class="infotool">
				<div class="icon">
					<?php the_post_thumbnail('tool-icon'); // where tool-icon is a size i specified in functions.php ?>
				</div>
				<h3><?php the_title(); ?></h3>
			</div>
			</a>

			<?php endwhile; ?>
			<?php // RESETTING TO ORIG LOOP
			wp_reset_postdata(); ?>


		</section>

		<a href="<?php echo get_tag_link( 15 ); ?>"><div class="button-section">See All articles</div></a>
	</div>


	<div class="band">
		<h2>Tool & Templates</h2>
		 <!-- (hard skills) -->
			<!-- Show all posts (CPT only) of "tools" + Enhance Category -->
		<section>

			<?php // DISPLAY CUSTOM POST TYPE
			// be aware tag & cat intersection has unique arguments: http://wordpress.stackexchange.com/questions/4201/how-to-query-posts-by-category-and-tag-
			$args = array( 'post_type' => 'tool', 'posts_per_page' => 6, 'cat' => 15, 'orderby' => 'date'  ); //Define your custom post type name in the arguments
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
		<!-- THE FOLLOWING LINK SHOULD BE AN ARCHIVE PAGE FOR ALL TOOLS, A TAG? -->
		<a href="<?php echo get_post_type_archive_link( 'tool' ); ?>"><div class="button-section">See All Tools</div></a>
	</div>

	<div class="band" id="cooplisting">
		<?php the_field('map_listing'); ?>

		<div>
			<form action="https://formspree.io/cso@RESUSstudio.com" method="POST">
				<input class="taller-field" type="text" name="coopname" id="coopname" placeholder="Co-op Name">
				<input class="taller-field" type="text" name="intersection" id="intersection" placeholder="Major Intersection, City">
				<input class="taller-field" type="text" name="coopsize" id="coopsize" placeholder="Number of Units/Apts">
				<br>
				<input class="form-submit-style" type="submit" name="submit" value="Get on the Map (free)"> <!-- target="_blank" doens't work on the submit button -->
			</form>
		</div>

		<hr>
		<?php the_field('coop_listing'); ?>

		<a href="<?php the_field('coop_listing_link'); ?>"><div class="button-section"><?php the_field('coop_listing_button'); ?></div></a>
	</div>

	<div class="band">
		<?php the_field('vacancy_listing'); ?>

		<a href="<?php the_field('vacancy_listing_link'); ?>"><div class="button-section"><?php the_field('vacancy_listing_button'); ?></div></a>
	</div>


</div> <!-- //end of "allsections"-->

<?php get_footer(); ?>
