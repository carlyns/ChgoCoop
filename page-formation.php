<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/curated.css">

<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<?php include ('menu.php'); ?>


<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>

	<?php endwhile; endif; ?>


	<h2 class="funfact"><?php the_content(); ?></h2>

	<div class="row-stepicons">
			<div class="step1">
				<div class="stepicon">
					<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_idea_195285.png" alt="understand" />
				</div>
				<div class="icontitle">
					<h2>1. RECRUIT</h2>
				</div>
			</div>

			<div class="step2">
				<div class="stepicon">
					<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_compatibility_612057.png" alt="right fit" />
				</div>
				<div class="icontitle">
					<h2>2. STRUCTURE</h2>
				</div>
			</div>


			<div class="step3">
				<div class="stepicon">
					<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_speech-bubble_645327.png" alt="tell others" />
				</div>
				<div class="icontitle">
					<h2>3. TASKS</h2>
				</div>
			</div>


			<div class="step4">
				<div class="stepicon">
					<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_christmas-star_494794.png" alt="complex" />
				</div>
				<div class="icontitle">
					<h2>4. BUILDING</h2>
				</div>
			</div>


			<div class="step5">
				<div class="stepicon">
					<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_fist-pounding_127836.png" alt="decision" />
				</div>
				<div class="icontitle">
					<h2>5. CELEBRATE</h2>
				</div>
			</div>


	</div>

	<!-- ORIGINAL STEPS
	<h2>1. Discuss group results, start meeting and visiting co-ops, vision boards</h2>
	<h2>2. Create a handbook (vision, fiancial structure)</h2>
	<h2>3a. Look for property</h2>
	<h2>3b. Keep recruiting potential members</h2>
	<h2>4. Draft necessary documents to be ready for property acquisition (incorporation docs, financial statements with lender, ) and outline decision-making process.
	<h2>4a. Begin talks with professional team (legal, construction, lender, realty)</h2>
	<h2>5. Supplement property search with real estate agent. </h2>
	<h2>6a. Potential property: solidify core group members with augmented commitment level (% savings, corp account, individual meetings with lender).</h2>
	<h2>6b. Potential property: refine budgets with property and specific members in mind.</h2>
	<h2>7a. Potential property: meet with lender for Letter of Interest, begin loan process, begin incorporation process
	<h2>7b. Build relationships in the community.  </h2>
	<h2>8. Finalize professional team, all incorporation documents, incorporate, apply for loan and hopefully get approved.</h2>
	<h2>9. Acquire property!</h2>
	<h2>10. Begin design / construction process with style plans. </h2>
	<h2>11. Finalize property/occupancy agreements with lawyer. </h2>
	<h2>12. Move in, celebrate, and share the knowledge! </h2>
-->
	<div class="desktop-stepframe"> <!-- might not need this div -->

		<div class="step">
			<div class="mobileicon">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_idea_195285.png" alt="understand" />
			</div>

			<div class="steptitle"> <!-- these only show on mobile. desktop has steptitle in tab. -->
				<h2>1. RECRUIT</h2>
			</div>

			<div class="stepcontent desktopcontent1">
				<h3>Get a minimum of 3 people. </h3>

				<h4 class="next"><a href="#">Next Step</a></h4>

			</div>
		</div>

		<div class="step">
			<div class="mobileicon">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_compatibility_612057.png" alt="right fit" />
			</div>

			<div class="steptitle"> <!-- these only show on mobile. desktop has steptitle in tab. -->
				<h2>2. STRUCTURE</h2>
			</div>

			<div class="stepcontent desktopcontent2">
				<h3>
					Keep Recruiting.  Binder > Handbook.
				</h3>


				<h4 class="previous"><a href="#">Previous Step</a></h4>
				<h4 class="next"><a href="#">Next Step</a></h4>

			</div>
		</div>

		<div class="step">
			<div class="mobileicon">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_speech-bubble_645327.png" alt="tell others" />
			</div>

			<div class="steptitle">
				<h2>3. TASKS</h2> <!-- these only show on mobile. desktop has steptitle in tab. -->
			</div>
			<div class="stepcontent desktopcontent3">
				<h3>Search for properties.</h3>

				<h4 class="previous"><a href="#">Previous Step</a></h4>
				<h4 class="next"><a href="#">Next Step</a></h4>


			</div>
		</div>

		<div class="step">
			<div class="mobileicon">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_christmas-star_494794.png" alt="complex" />
			</div>

			<div class="steptitle">
				<h2>4. BUILDING</h2> <!-- these only show on mobile. desktop has steptitle in tab. -->
			</div>
			<div class="stepcontent desktopcontent4">
				<h3>Finalize documents.</h3>


				<h4 class="previous"><a href="#">Previous Step</a></h4>
				<h4 class="next"><a href="#">Next Step</a></h4>

			</div>
		</div>

		<div class="step">
			<div class="mobileicon">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_fist-pounding_127836.png" alt="decision" />
			</div>

			<div class="steptitle">
				<h2>5. CELEBRATE</h2> <!-- these only show on mobile. desktop has steptitle in tab. -->
			</div>

			<div class="stepcontent desktopcontent5">
				<h3>Live.  Share with others. </h3>


				<h4 class="previous"><a href="#">Previous Step</a></h4>

			</div>
		</div>
	</div> <!-- end of "desktop-stepframe" -->

	<div class="groupdiagram">
		<h3 class="funfact">Here's a helpful diagram:</h3>
		<img src="<?php bloginfo( 'template_url' ); ?>/imgs/grouptobldg.jpg" alt="form an initial group">
	</div>

	<div class="allexploreposts">
		<h2>See All Tools & Posts tagged with "formation"</h2>

		<?php // ALL 'FORMATION' TOOLS
		$args = array( 'post_type' => 'tool', 'tag' => 'formation', 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'title' ); //Which tag you want, how many posts to show
		$loop = new WP_Query( $args ); //Define the loop based on those arguments
		//Display the contents
		while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<a href="<?php the_permalink(); ?>">
			<h4><?php the_title(); ?></h4>
		</a>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>


		<?php // ALL FROM EXPLORE CATEGORY
		$args = array( 'cat' => 10, 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'title' ); //Which tag you want, how many posts to show
		$loop = new WP_Query( $args ); //Define the loop based on those arguments
		//Display the contents
		while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<a href="<?php the_permalink(); ?>">
			<h4><?php the_title(); ?></h4>
		</a>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>


</div>


<?php get_footer(); ?>
