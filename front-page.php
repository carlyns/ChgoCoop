<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->


<title>Cooperative Homes & Communities of Chicago</title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<?php include ('menu.php'); ?>

	<div class="teaser">


		<p>A few co-ops that might interest you:</p>
		<?php wp_nav_menu(); // pulls the first menu by default ?>
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

			<?php
			$args = array( 'cat' => 19, 'posts_per_page' => 1 ); //Which tag you want, how many posts to show
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>


			<h3>ORG PROFILE:</h3>
			<div class="thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<!-- THE POST THUMBNAIL SHRINKS THE RESOLUTION OF THE FEATURED IMAGE??? BUT NOT THE FIRST ONE?? -->

			</div>
			<p class="orgname"><?php the_title(); ?></p>
			<p><?php the_excerpt(); ?></p>
			<a href="<?php the_permalink(); ?>"><div class="button-bottom">Read More</div></a>

		<?php endwhile; ?>
		<?php // RESETTING TO ORIG LOOP
		wp_reset_postdata(); ?>


		</div>
	</div>

	<div class="grid4">
		<div class="featured-unit">

		<?php
		$args = array( 'cat' => 20, 'posts_per_page' => 1 ); //Which tag you want, how many posts to show
		$loop = new WP_Query( $args ); //Define the loop based on those arguments
		//Display the contents
		while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<h3>VACANCY!</h3>
			<div class="thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<!-- THE POST THUMBNAIL SHRINKS THE RESOLUTION OF THE FEATURED IMAGE??? BUT NOT THE FIRST ONE?? -->

			</div>
			<p><?php the_excerpt(); ?></p>
			<a href="<?php the_permalink(); ?>"><div class="button-bottom">Own It</div></a>

		<?php endwhile; ?>
		<?php // RESETTING TO ORIG LOOP
		wp_reset_postdata(); ?>


		</div>
	</div>

	<div class="grid4">
		<div class="featured-coop">

			<?php
			$args = array( 'tag' => 'startup-story', 'posts_per_page' => 1 ); //Which tag you want, how many posts to show
			$loop = new WP_Query( $args ); //Define the loop based on those arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<h3>STARTUP STORIES</h3>
			<div class="thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<!-- THE POST THUMBNAIL SHRINKS THE RESOLUTION OF THE FEATURED IMAGE??? BUT NOT THE FIRST ONE?? -->
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
