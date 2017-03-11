<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bandedsections.css">

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>



<body>

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

		<a href="<?php get_page_template(); ?>/chgocoopWP/tag/collaboration"><div class="button-section">See All articles</div></a>
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
		<a href="<?php get_page_template(); ?>/chgocoopWP/tool"><div class="button-section">See All Tools</div></a>
	</div>

	<div class="band" id="cooplisting">
		<h2>Put Your Co-op On The Map</h2>
		<p>We list basic information like name, approximate location and size on our map for free.</p>
		<p>If you see a mistake, please <a href="mailto: cso@RESUSstudio.com">email us</a> so we can revise it.</p>

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

		<h3>Want a more comprehensive listing?</h3>
		<p>This includes contact, website, and photos.  Please complete <a href="https://resus.typeform.com/to/emYHV9" target="_blank">this form</a>.  The following fees help maintain this website:</p>
		<ul>
			<li>1-10 members: $5/year</li>
			<li>11-50 members: $10/year</li>
			<li>51+ members: $50/year</li>
		</ul>

		<a href="https://resus.typeform.com/to/emYHV9" target="_blank"><div class="button-section">Create Co-op Profile</div></a>
	</div>

	<div class="band">

		<h2>Have a Vacancy at your Co-op? Get Listed!</h2>
		<p>Unit Listing: $20/unit</p>
		<ol>
			<li>Fill out our simple form. The fee goes towards maintaining this site.</li>
			<li>We feature your co-op and/or unit on this site, blog posts, and our <a href="http://eepurl.com/cmiuZv" target="_blank">"Good Housing" newsletter</a>.
			<li>Watch the requests roll in!</li>

		</ol>
		<!-- THE FOLLOWING LINK SHOULD BE A CRAFTED PAGE JUST FOR MEMBERSHIP
		<a href="<?php get_page_template(); ?>/chgocoopWP/membership"><div class="button-section">Become a Member</div></a>-->
		<a href="https://resus.typeform.com/to/LWTR4c"><div class="button-section">List a Unit</div></a>
	</div>


</div> <!-- //end of "allsections"-->

<?php get_footer(); ?>
