<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/curated.css">

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>


<body>

<?php include ('topsticky.php'); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="topbanner">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="topbanner showonscrolldown">
		<h1><?php the_title(); ?></h1>
	</div>
	<?php endwhile; endif; ?>


<div class="container">

	<!-- a hard coded page?  maybe later dynamic -->
	<h2 class="funfact"><?php the_content(); ?></h2>

	<div class="row-stepicons">
			<div class="step1">
				<div class="stepicon">
					<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_idea_195285.png" alt="understand" />
				</div>
				<div class="icontitle">
					<h2>1. UNDERSTAND</h2>
				</div>
			</div>

			<div class="step2">
				<div class="stepicon">
					<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_compatibility_612057.png" alt="right fit" />
				</div>
				<div class="icontitle">
					<h2>2. THE RIGHT FIT?</h2>
				</div>
			</div>


			<div class="step3">
				<div class="stepicon">
					<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_speech-bubble_645327.png" alt="tell others" />
				</div>
				<div class="icontitle">
					<h2>3. TELL OTHERS</h2>
				</div>
			</div>


			<div class="step4">
				<div class="stepicon">
					<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_christmas-star_494794.png" alt="complex" />
				</div>
				<div class="icontitle">
					<h2>4. IT'S COMPLEX</h2>
				</div>
			</div>


			<div class="step5">
				<div class="stepicon">
					<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_fist-pounding_127836.png" alt="decision" />
				</div>
				<div class="icontitle">
					<h2>5. DECIDE</h2>
				</div>
			</div>


	</div>

	<div class="desktop-stepframe"> <!-- might not need this div -->

		<div class="step">
			<div class="mobileicon">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_idea_195285.png" alt="understand" />
			</div>

			<div class="steptitle">
				<h2>1. UNDERSTAND</h2>
			</div>

			<div class="stepcontent desktopcontent1">

				<?php the_field('understand'); ?>

			</div>
		</div>

		<div class="step">
			<div class="mobileicon">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_compatibility_612057.png" alt="right fit" />
			</div>

			<div class="steptitle">
				<h2>2. THE RIGHT FIT?</h2>
			</div>

			<div class="stepcontent desktopcontent2">

				<?php the_field('right_fit'); ?>

			</div>
		</div>

		<div class="step">
			<div class="mobileicon">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_speech-bubble_645327.png" alt="tell others" />
			</div>

			<div class="steptitle">
				<h2>3. TELL OTHERS</h2>
			</div>
			<div class="stepcontent desktopcontent3">

				<?php the_field('tell_others'); ?>

			</div>
		</div>

		<div class="step">
			<div class="mobileicon">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_christmas-star_494794.png" alt="complex" />
			</div>

			<div class="steptitle">
				<h2>4. IT'S COMPLEX</h2>
			</div>
			<div class="stepcontent desktopcontent4">

				<?php the_field('its_complex'); ?>

			</div>
		</div>


		<div class="step">
			<div class="mobileicon">
				<img src="<?php bloginfo( 'template_url' ); ?>/imgs/stepicons/noun_fist-pounding_127836.png" alt="decision" />
			</div>

			<div class="steptitle">
				<h2>5. DECIDE</h2>
			</div>

			<div class="stepcontent desktopcontent5">

				<?php the_field('decide'); ?>

				<div class="formation-button">
					<h4><a href="<?php get_page_template(); ?>/chgocoopWP/explore/formation">GO TO FORMATION GUIDE</a></h4>
				</div>

			</div>
		</div>
	</div> <!-- end of "desktop-stepframe" -->

	<div class="allexploreposts">
		<h2>Tools & Posts relevant to beginners</h2>

			<?php // ALL 'BEGINNERS' TOOLS
			$args = array( 'post_type' => 'tool', 'tag' => 'beginners', 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'title' ); //Which tag you want, how many posts to show
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

</div> <!-- end of "container" -->


<?php get_footer(); ?>
