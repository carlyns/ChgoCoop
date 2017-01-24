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
				<p>Once you've told a few friends, it's likely that a handful have expressed interest in the idea of co-ops. The goal is to get at least three people who have an interest in the planning stages.  (Not everyone has this natural enthusiasm, and that's ok.)</p>
				<p>Start visiting some co-ops together and talking about your likes, dislikes, and concerns.  Ask questions of the members of the co-ops you visit. Visit co-ops that are similar and dissimilar to the type of co-op you're looking to form.  You can learn from all types.  </p>
				<p>Make sure you have all come to a general agreement about exploring the idea together.  Your vision, neighborhood, finances, etc don't have to match up perfectly just yet.  Comparing Fireplace profiles with each other or doing a group compatibility evaluation is a great start, but not requried.  Just be sure to have an initial conversation together.  </p>

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
				<h3>Document your decisions.</h3>
					<p>Your group will make many decisions - both casual and official along the way.  They may include things like:</p>
						<li>whether to be a pet-friendly building</li>
						<li>whether to share utilities</li>
						<li>location criteria</li>
						<li>building condition</li>
						<li>whether to have a shared kitchen</li>
						<li>the amount of socializing to tolerate</li>
						<li>... and so on.</li>
					<p>Do your best to track them and log them.  you document now, the less you have to document later.  </p>
					<p>Documenting all of your decisions also prevents the same topics from being brought up over and over, taking time away from your discussion.  It gives your gatherings more structure, especially when there is such a wide range of topics that may come up.  </p>

				<h3>Create a handbook.</h3>
					<p>Documentation becomes an important step before creating an official handbook.  This is a way to give your group some boundaries and sense of commitment.  </p>
					<p>The handbook gets everyone on the same page.  It's especially useful when there are new people interested.  It helps get them caught up and sets expectations.  By reading the handbook they can get a sense of whether it's the right fit for them and perhaps learn about co-ops for the first time. </p>
					<p>Signing off on written documentation, like a handbook, allows your group to move forward in a deliberate manner with more involved and personal action items.  This kind of commitment is required before looking at properties can be seriously entertained.  </p>

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
				<p>The following tasks can happen simultaneously. The goal is to line up the necessary requirements for when the perfect property does come along, your group is ready to pounce on it. Given the handbook is accepted, each person in the group should be ready to take on these steps collectively. </p>

				<h3>Discuss personal finances with loan officer or mortgage broker</h3>
				<p>This often involves a simple worksheet detailing assets, income, debts, etc.  </p>

				<h3>Draft up necessary paperwork.</h3>
				<p>This includes legal documentation for incorporation like bylaws and an operating budge, a property agreement, and an occupancy agreeemnt.  </p>

				<h3>Search for properties.</h3>
				<p>Get people in your group (especially the ones who love real estate) to start scouting some properties and reporting back to the group.  </p>

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
				<p>This will include the official application with the lender. </p>
				<p>Finalizing the property agreement, occupancy agreements will mean major decisions need to be confirmed.  A purchase agreement will need to be drafted with the particular property in mind. </p>
				<p>Incorporation does not have to be complete, but the process needs to be underway for the lender to allow the loan application process to proceed.  </p>
				<p>Although your group may still be in the process of applying for a loan, the lender can grant your group a Letter of Interest.  Realtors may require this before showing your property to make sure your group is seriousl</p>

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
				<h3>Enjoy it.</h3>
				<p>Wow, you've come a long way.  Housing cooperatives are still rare in Chicago - especailly ones that truly practice the cooperative principles.  Throw an epic party.</p>
				<h3>Involve the Community</h3>
				<p>This should've been in your plan since the beginning, but be sure that your immediate community can be involved in this great achievement and that word spreads to other families and enclaves.  Reach out to local chambers of commerce, businesses, public schools, parks, libraries, community centers, family and friends and proudly let them know what you've accomplished. </p>
				<h3>Share the knowledge.</h3>
				<p>Be sure to share your lessons learned with other groups interested in forming.  Our website can help with that.  </p>

			</div>
		</div>
	</div> <!-- end of "desktop-stepframe" -->

	<div class="groupdiagram">
		<h3 class="funfact">Remember, your group can faction off into other smaller groups:</h3>
		<img src="<?php bloginfo( 'template_url' ); ?>/imgs/grouptobldg.jpg" alt="form an initial group">
	</div>

	<div class="allexploreposts">
		<h2>Tools & Posts relevant to forming a co-op</h2>

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
