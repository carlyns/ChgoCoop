<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bandedsections.css">

<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<?php include ('menu.php'); ?>

<div class="allsections">

	<div class="band-white">
		<h2>Principles/Fundamentals</h2>
			<!-- Show all posts (CPT or blog) tagged with "principles/values" + Enhance Category -->
		<section>
			<?php
			$args = array( 'tag' => 'principles', 'posts_per_page' => 6, 'order'=> 'ASC', 'orderby' => 'title' ); //Which tag you want, how many posts to show
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<!-- STILL DOESN'T SHOW BOTH REG BLOG POSTS AND CPT POSTS, EVEN THOUGH ARCHIVE PAGE DOES!! -->

			<!-- THIS LOOP IS NOT SHOWING THE CPT ... HOW TO INCLUDE THE CPT THAT ARE TAGGED WITH 'PRINCIPLES'?? -->

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
		<!-- THE FOLLOWING LINK SHOULD BE A CRAFTED PAGE JUST FOR REVIEWING FUNDAMENTALS -->
		<a href="<?php get_page_template(); ?>/chgocoopWP/tag/principles"><div class="button-section">More Resources on Fundamentals</div></a>
	</div>

	<div class="band-purple">
		<h2>Collaboration Tools</h2>
		 <!-- (soft skills) -->
			<!-- Show all posts (CPT or blog) tagged with "collaboration" + Enhance Category -->
		<section>

			<?php
			$args = array( 'tag' => 'collaboration', 'posts_per_page' => 6, 'order'=> 'ASC', 'orderby' => 'title' ); //Which tag you want, how many posts to show
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
			<div class="infotool">
				<div class="icon">
					<?php the_post_thumbnail('tool-icon'); ?>

					<?php // HOW TO ADD THE IMAGE HERE?  OR JUST ADD A DEFAULT ONE FOR EACH TYPE OF TAG, IN THIS CASE 'COLLABORATION'
						/* $images = get_attached_media('image', $post->ID);
						foreach($images as $image) { ?>
						    <img src="<?php echo wp_get_attachment_image_src($image->ID,'thumbnail'); ?>" />
						<?php } */ ?>


				</div>
				<h3><?php the_title(); ?></h3>
			</div>
			</a>

			<?php endwhile; ?>
			<?php // RESETTING TO ORIG LOOP
			wp_reset_postdata(); ?>


		</section>
		<!-- THE FOLLOWING LINK SHOULD BE AN ARCHIVE PAGE FOR ALL TOOLS, A TAG? -->
		<a href="<?php get_page_template(); ?>/chgocoopWP/tag/collaboration"><div class="button-section">See All articles</div></a>
	</div>


	<div class="band-white">
		<h2>Tool/Template Resources</h2>
		 <!-- (hard skills) -->
			<!-- Show all posts (CPT only) of "tools" + Enhance Category -->
		<section>

			<?php // DISPLAY CUSTOM POST TYPE
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
		<!-- THE FOLLOWING LINK SHOULD BE AN ARCHIVE PAGE FOR ALL TOOLS, A TAG? -->
		<a href="<?php get_page_template(); ?>/chgocoopWP/enhance-tools"><div class="button-section">See All Tools</div></a>
	</div>

	<div class="band-purple">
		<h2>Have a Vacancy? Get Listed!</h2>
		<p>Unit Listing: $20/unit</p>
		<ol>
			<li>Fill out our simple form. The associated fee goes towards maintaining this site.</li>
			<li>We feature your co-op and/or unit on this site, blog posts, and our newsletter.  (See a sample <a href="<?php get_page_template(); ?>/chgocoopWP/profile/vacant-unit-800-logan-square-co-op/">Co-op Profile</a> or a sample <a href="<?php get_page_template(); ?>/chgocoopWP/profile/logan-square-cooperative//">Unit Listing</a>)</li>
			<li>Watch the requests roll in!</li>

		</ol>
		<!-- THE FOLLOWING LINK SHOULD BE A CRAFTED PAGE JUST FOR MEMBERSHIP
		<a href="<?php get_page_template(); ?>/chgocoopWP/membership"><div class="button-section">Become a Member</div></a>-->
		<a href="https://resus.typeform.com/to/LWTR4c"><div class="button-section">List a Unit</div></a>

	</div>

	<div class="band-white">
		<h2>"Put Yourself On The Map"</h2>
		<p>We list basic information about any cooperative on our map for free.</p>
		<p>If you see a mistake, please email us so we can revise it.</p>

		<p>Get included: </p>
		<h3>Co-op Name:</h3>
		<h3>Approx Location:</h3><p>Major Intersection</p>
		<h3>Size:</h3><p>Number of Units</p>
		<h3>SUBMIT</h3>
		<p>Want a more comprehensive listing?</p>
		<a href="https://resus.typeform.com/to/emYHV9"><div class="button-section">Create Co-op Profile: $5/year</div></a>
	</div>
</div> <!-- //end of "allsections"-->

<?php get_footer(); ?>
