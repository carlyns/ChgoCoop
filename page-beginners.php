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
				<h3>Get Over the Stereotypes.</h3>
				<p>
					Co-ops are not communes.  It's a financial model with shareholders.  It can be designed however the members want - that single family homes, private apartments, townhomes, communes, and more.
				</p>
				<p>
					Here are some co-op buildings in Chicago:
				</p>

				<h3>It's a practical, flexible option - just not very well known.</h3>
				<div class="steps-tool">
					<a href="<?php bloginfo( 'template_url' ); ?>/imgs/tools/coop-perks.png" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/tools/coop-perks.png" alt="perks" /></a>
				</div>

				<h3>Definitions</h3>
					<p>

					</p>

				<h3>Now that you have a solid sense of what a housing co-op can be, go to the next step to see if it's a good fit for you!</h3>


				<h4 class="next"><a href="#">Next Step</a></h4>

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
				<h3>
					Who is ideal for a housing co-op?
				</h3>
				<p>
					Frustrated with renting. Frustrated with owning.
				</p>
				<p>Can't get a traditional mortgage</p>
				<p>
					Desire to own property but can't afford it yet.
				</p>
				<p>
					Hate your neighbors (in a condo or apartment)
				</p>
				<p>
					Want a support network
				</p>
				<p>
					Want to keep your neighborhood affordable ... or keep your rent affordable in a currently gentrifying neighborhood.
				</p>
				<p>
					Rather not take part in the housing industry / real-estate market as it operates today.
				</p>
				<p>
					Innovative developer who want to make reliable investments in distressed neighborhoods.
				</p>
				<p>
					Want to make your empty lot or vacant property into productive again and have it benefit the neighborhood.
				</p>

				<div class="steps-tool">
					<a href="<?php bloginfo( 'template_url' ); ?>/imgs/tools/coop-types.png" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/tools/coop-types.png" alt="investment" /></a>
				</div>
				<h3>Use a Match Tool to see if your Group is compatible</h3>
				<p>
					Fireplace is a project of the RESUS collective that ...
				</p>
				<div class="steps-tool">
					<a href="<?php bloginfo( 'template_url' ); ?>/imgs/tools/match tool-2steps.png" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/tools/match tool-2steps.png" alt="investment" /></a>
				</div>



				<h4 class="previous"><a href="#">Previous Step</a></h4>
				<h4 class="next"><a href="#">Next Step</a></h4>

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
				<h3>Gauge others' interest.</h3>
				<p>Mention this idea to others and gauge their interest.  You never know, a friend might be thinking about this too.  A colleague might have formed one. A family member could use another housing alterative.</p>
				<p>We're also on Facbook.</p>
				<p>Tell people on Twitter.</p>
				<p>Email your friends.</p>
				<p>You don't need to have a meetup.  Just bring it up in your next conversation, next time you have brunch, next time you're in the car with a friend.</p>

				<h4 class="previous"><a href="#">Previous Step</a></h4>
				<h4 class="next"><a href="#">Next Step</a></h4>


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
				<h3>It could get complicated, and that's ok.</h3>
				<p>Mentioning the idea could be an ongoing process.  We recommend tapping into your primary network, but maybe not to the point where you're reaching out to 2nd-degree connections.  As a rule of thumb, you should have a good sense of 1) who is willing to put in time and effort to plan, and 2) who is just passively interested (including yourself).  This is extremely important information and will determine whether forming a co-op is even feasible.  There needs to be a champion or two.  </p>

				<div class="steps-tool">
					<a href="<?php bloginfo( 'template_url' ); ?>/imgs/tools/coop-tool context.png" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/tools/coop-tool context.png" alt="investment" /></a>
				</div>


				<h3>At this point, keep it casual and fun.</h3>
				<p>At this point you can confidently say you've exhausted your primary network.  Be warned: this process can take a while.  Explaining co-ops to brand newbies can be difficult, but just keep it casual and focus on decent housing.  The complexity of co-ops lies in considering the finances, goals and interests of more than one person ... but this is complexity is also what's so exciting about co-ops.
				</p>

				<h4 class="previous"><a href="#">Previous Step</a></h4>
				<h4 class="next"><a href="#">Next Step</a></h4>

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
				<h3>Are you a shopper?  Or a creator?  </h3>
				<p>
					Form one or shop around.  Clarifying this is a huge milestone. With this closure, you can either start scouring our boards for people or co-ops, or host a kickoff meeting!
				</p>

				<p>
					Create a Diagram?!?
				</p>

				<h3>1. Shop Around</h3>
				<p>
					Nice!  Just keep in mind, the pool of existing co-ops is not huge, but we're trying to change that with this website and these tools.
				</p>
				<p>
					For now, we recommend checking out our co-op directory to explore the profiles of existing co-ops, subscribe to our <a href="#">Good Housing newsletter</a> to get notified of unit vacancies, and do a basic search on Craigslist or FIC for cooperatives.
				</p>
				<p>
					Also, a future goal of the Fireplace match tool (which is currently matches people with people) is to match people with co-ops.  So create a profile and get notified when this feature is added!
				</p>


				<h3>2. Form a Co-op</h3>
				<p>
					We have a guide for forming co-ops!  Visit it now!
				</p>




				<h4 class="previous"><a href="#">Previous Step</a></h4>
				<h4 class="next"><a href="<?php get_page_template(); ?>/chgocoopWP/explore/formation">FORMATION GUIDE</a></h4>

			</div>
		</div>
	</div> <!-- end of "desktop-stepframe" -->

	<div class="allexploreposts">
		<h2>See All Tools & Posts tagged with "beginners"</h2>

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
