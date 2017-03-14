<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->


<title><?php bloginfo( 'name' ); ?></title>

</head>

<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include ('topsticky-uniquefront.php'); ?>

	<div class="overview">

		<h2>Welcome to our information hub.</h2>
		<h3>Discover free tools we've gathered to help you get started or keep going strong with housing co-ops.</h3>

<!----------------------------- carousel image taglines:
		<h3>Get inspired by stories.</h3>
		<h3>Let your imagination take over and custom-design a co-op of unlimited possibilities. </h3>

		possible carousel images:
		map,
		vision board,
		collage of chicago building stock

------------------------->
	</div>
</header>
</div>
<!-- header tag closes within topsticky for every page except front page-->


	<!----------------------------- possible styling for explore/enhance:
		soft diagonal with explore and enhance as the buttons themselves (instead of "go")
		include other buttons like match tool, list your co-op, etc
	------------------------->
<div class="container">

<div class="row twousers">
	<div class="grid6">
		<div class="explorers">
			<h2>EXPLORE</h2>
			<div class="block">
				<p>Want an affordable home with neighbors you can count on?  You and your friends can create a community of your own. </p>

			</div>
			<a href="<?php get_page_template(); ?>/chgocoopWP/explore"><div class="style-button button-bottom">GO</div></a>
		</div>
	</div>

	<div class="grid6">
		<div class=existing>
			<h2>ENHANCE</h2>

			<div class="block">
				<p>Does your co-op need to regroup or recharge?  See what your group can do to improve with some helpful resources. </p>

			</div>
			<a href="<?php get_page_template(); ?>/chgocoopWP/enhance"><div class="style-button button-bottom">GO</div></a>
		</div>
	</div>
</div>

	<div class="row latest">
		<h2>The Latest: What’s Happening in Chicago?</h2>

		<div class="grid4">
			<div class="featured-org">
				<?php // need to get the all the Post Date from the selected Page Link ACF!! ?>


				<h3>PROPERTY PROFILE</h3>
					<?php // grabbing data about the post with Page Link ACF from https://www.advancedcustomfields.com/resources/page-link/

					// vars
					$org = get_field('featured_org_prop', false, false);

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

				<!-- tried to separate the unit and tool, but didn't work.  and not as easy as selecting from either because Units use post thumbnails and tools use ACF images -->


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


			<!-- almost had this, but the button is not showing any page link.  tried different conditional syntax.  so just hard coding this, and if a vacancy arises, i can change this out.  -->

				<!-- <?php
				// vars
				$unit = get_field('featured_unit', false, false);

				// check
				if( $unit ): ?>

				<div class="thumbnail">
					<a href="<?php echo get_the_permalink($unit); ?>"><?php echo get_the_post_thumbnail($unit); ?></a>
				</div>

				<p>
				<?php echo get_the_excerpt($unit); ?></p>

				<a href="<?php echo get_the_permalink($unit); ?>"><div class="style-button button-bottom">Own It</div></a>
				<?php endif; ?> -->


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

	<div class="row single-col newsletter">
		<h4>Sign up for e-news</br>to get these types of stories</br>and hear about the latest vacancies:</h4>
		<a href="http://eepurl.com/cmiuZv" target="_blank"><div class="style-button">Sign Up for Newsletter</div></a>
	</div>


</div> <!--/ "container" -->

<?php get_footer(); ?>
