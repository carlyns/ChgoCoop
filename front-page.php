<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->


<title>Cooperative Homes & Communities of Chicago</title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<?php include ('menu.php'); ?>

	<div class="teaser">
		<p>A few co-ops that might interest you:</p>
		<!--<p>Housing for the middle class is hard to come by these days.  Not to mention we've replaced real-life community with digital connections.  Cooperatives may not be what you think.</p>-->
			<div class="type">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/walkup.jpg" alt="private apartments">
				<p>private apartments</p>
			</div>
			<div class="type">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/home.png" alt="single family home">
				<p>single family detached</p>
			</div>
			<div class="type">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/hirise.jpg" alt="high rise">
				<p>high-rise</p>
			</div>
			<div class="type">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/communal.png" alt="shared home">
				<p>shared common spaces</p>
			</div>

	</div>

<div class="twousers">
	<div class="grid6">
		<div class="explorers">
			<h2>EXPLORE</h2>
			<div class="block">
				<p>Want an affordable home with neighbors you can count on?  You and your friends can create a community of your own. </p>

				<ul>
					<li>info for beginners</li>
					<li>tools</li>
					<li>template docs</li>
					<li>find vacancies</li>
				</ul>
			</div>
			<a href="<?php get_page_template(); ?>/chgocoopWP/explore"><div class="button-bottom">Go</div></a>
		</div>
	</div>

	<div class="grid6">
		<div class=existing>
			<h2>ENHANCE</h2>
			<div class="block">
				<p>Does your co-op need to regroup / recharge / reorganize?</p>
				<ul>
					<li>fundamentals</li>
					<li>collaboration tools</li>
					<li>legal tools</li>
					<li>list a unit</li>
					<li>membership</li>
				</ul>
			</div>
			<a href="<?php get_page_template(); ?>/chgocoopWP/enhance"><div class="button-bottom">Go</div></a>
		</div>
	</div>
</div>

<div class="container">
	<h2>The Latest: What’s Happening in Chicago?</h2>

	<div class="grid4">
		<div class="featured-org">
			<?php // need to get the all the Post Date from the selected Page Link ACF!!


			 ?>


			<h3>ORGANIZATION PROFILE</h3>

			<?php // grabbing data about the post with Page Link ACF from https://www.advancedcustomfields.com/resources/page-link/

			// vars
			$org = get_field('featured_org', false, false);

			// check
			if( $org ): ?>

			<div class="thumbnail">
				<a href="<?php echo get_the_permalink($org); ?>"><?php echo get_the_post_thumbnail($org); ?></a>

			</div>
			<h4 class="orgname"><?php echo get_the_title($org); ?></h4>
			<p><?php echo get_the_excerpt($org); ?></p>
			<a href="<?php echo get_the_permalink($org); ?>"><div class="button-bottom">Read More</div></a>

			<?php endif; ?>


		</div>
	</div>

	<div class="grid4">
		<div class="featured-unit">
			<!-- tried to separate the unit and tool, but didn't work.  and not as easy as selecting from either because Units use post thumbnails and tools use ACF images -->
			<?php
			// vars
			$vacancy = get_field('featured_unit', false, false);

			// check
			if( $vacancy ): ?>
				<h3>UNIT VACANCY</h3>

				<div class="thumbnail">
					<a href="<?php echo get_the_permalink($vacancy); ?>"><?php echo get_the_post_thumbnail($vacancy); ?></a>
				</div>
				<p><?php echo get_the_excerpt($vacancy); ?></p>
				<a href="<?php echo get_the_permalink($vacancy); ?>"><div class="button-bottom">Own It</div></a>


			<?php else : // THIS ELSE STATEMENT ISN'T WORKING, SO JUST HARD-CODE IT WHEN NECESSARY? ?>
				<h3>FEATURED TOOL:</h3>
				<div class="thumbnail">
					<a href="#">
							<img src="image.jpg" alt="housing match tool">
					</a>
				</div>
				<p>Match tool for you .... </p>
				<a href="#"><div class="button-bottom">Learn More</div></a>
			<?php endif; // PUTTING THIS AFTER THE MATCH TOOL MAKES IN INVISIBLE, SO JUST HARD CODE WHEN NECESSARY ?>

		</div>
	</div>

	<div class="grid4">
		<div class="featured-coop">
			<!-- Just ONE post labelled "sticky" breaks the other post queries with a sticky note.  But if NO posts are "sticky" then the latest one shows and all of the work. -->

			<?php // THIS CAN STAY A STICKY POST AND DON'T NEED AN ACF
			$args = array( 'tag' => 'startup-story', 'posts_per_page' => 1, 'post__in'  => get_option( 'sticky_posts' ), 'ignore_sticky_posts' => 1 ); //Which tag you want, how many posts to show, last two arguments are to show first sticky post, if none show last post published. https://codex.wordpress.org/Sticky_Posts
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<h3>STARTUP STORIES</h3>
			<div class="thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
			<p class="quote"><?php the_excerpt(); ?></p>
			<a href="<?php the_permalink(); ?>"><div class="button-bottom">Read More</div></a>



		<?php endwhile; ?>
		<?php // RESETTING TO ORIG LOOP
		wp_reset_postdata(); ?>


		</div>
	</div>

	<div class="newsletter">
		<p>Like those stories?
		</br><a href="#">See the archive</a> OR Get them regularly:</p>
		<a href="#"><div class="button">Sign Up for Newsletter</div></a>
	</div>


</div> <!--/ "container" -->

<?php get_footer(); ?>
