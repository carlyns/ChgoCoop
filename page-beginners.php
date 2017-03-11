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
				<h3>Get Over the Stereotypes.</h3>
				<p>
					Co-ops are not communes.  And they are not expensive east-coast high-rises.  A cooperative is a financial model with shareholders.  It can be custom-designed however the members want - single family homes, private apartments, townhomes, communes, and more.  As shareholders in that corporation, members have a right to occupy space in the property.
				</p>


				<h3>Customize to your heart's content.</h3>
				<p>Given the customization potential of co-ops, <a href="<?php bloginfo( 'template_url' ); ?>/imgs/tools/coop-perks.png" target="_blank">the possibilities are endless. </a>  Some ideas include: </p>
				<ul>
					<li>as much privacy as you want</li>
					<li>architect-designed units</li>
					<li>yard space</li>
					<li>pet-sitters</li>
					<li>car-sharing</li>
					<li>a guest suite</li>
					<li>co-working space</li>
					<li>senior social space</li>
					<li>retail space</li>
					<li>real, live community</li>
				</ul>
				<div class="steps-tool">
					<!-- decided against including the image in the page bc it looks better.  replaced with link above -->
				</div>

				<h3>It's simply structure.</h3>
				<p>
				A housing co-op is a corporation that exists primarily to provide housing and related services to its members, and its ownership and governance structure reflect this purpose.  -- Northcountry Cooperative Foundation's "Guide for Successful Community Development"
				</p>

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
					Relating to one of the following could mean you're <a href="<?php bloginfo( 'template_url' ); ?>/imgs/tools/coop-types.png" target="_blank">ideal for a co-op</a>:
				</h3>
					<li>Frustrated with renting.</li>
					<li>Frustrated with owning.</li>
					<li>Hate your neighbors.</li>
					<li>Can't get a traditional mortgage</li>
					<li>Desire to own property but can't afford it yet.</li>
					<li>Want a support network</li>
					<li>Want to keep your neighborhood affordable ... or keep your rent affordable in a currently gentrifying neighborhood.</li>
					<li>Rather not take part in the housing industry / real-estate market as it operates today.</li>
					<li>Progressive developer who wants to make reliable investments in distressed neighborhoods.</li>
					<li>Want to make your empty lot or vacant property into productive again and have it benefit the neighborhood.</li>

				<div class="steps-tool">
					<!-- decided against including the image in the page bc it looks better.  replaced with link above -->
				</div>
				<h3>Use a Compatibility Tool for your Group</h3>
				<p>
					We highly recommend a compatibility tool called <a href="http://fireplace.resusstudio.com" target="_blank">Fireplace</a>.  (Full Disclosure: it's a another project of ours.)  It weighs your own living preferences, values, and finances with others and creates a report to better move forward with your group.
				</p>


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
				<p>We like to start the conversation with something like, "What's your current housing situation?  Are you happy with it?"</p>
				<p>If you're on social media, you can share this site with your friends. </p>
					<ul>
						<li>On Facebook, <a href="http://www.facebook.com/sharer.php?u=http://chicagocoop.net" target="_blank">like us</a> and share some of the stories we post.</li>
						<li>Share <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://chicagocoop.net" target="_blank">on LinkedIn</a></li>
						<li>Or we've created <a href="http://twitter.com/share?text=New%20website%20created%20to%20help%20you%20find%20an%20affordable,%20enjoyable%20housing%20situation%20-%20with%20friends.&url=http://chicagocoop.net" target="_blank">this blurb for Twitter</a> you can use.</li>
					</ul>
				<p>Email our site (www.ChicagoCoop.net) to your friends and see how they respond.</p>
				<p>You don't need to have a meetup.  Just bring it up in your next conversation - the next time you have lunch or next time you're in the car with a friend.</p>

				<h3>At this point, keep it casual and fun.</h3>
				<p>Explaining co-ops to newbies can be difficult, but just keep it casual and focus on decent housing.  We also recommend tapping into your primary network, or your 1st-degree connections.  You can reach out to 2nd-degree connections only if you feel comfortable enough to get a cup of coffee with them.  As a rule of thumb, you should have a good sense of 1) who is willing to put in time and effort to plan, and 2) who is just passively interested (including yourself).  </p>
				<p>Be warned: this process can take a while.  But afterwards, you can confidently say now that you've exhausted your primary network.  </p>


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
				<p>Whenever you involve more than one person, things can get complex.  Understanding your own finances and preferences is hard enough.  Layering those of others on top of yours gets messy.  </p>

				<div class="steps-tool">
					<!-- decided against including the image in the page bc it looks better.  replaced with link above -->
				</div>

				<p>This <a href="<?php bloginfo( 'template_url' ); ?>/imgs/tools/coop-tool context.png" target="_blank">complexity</a> can be daunting ... but the customization that emerges from that complexity is also what's so exciting about co-ops.
				</p>

				<p>Accepting the challenge of exploring co-ops can lead to long-term housing satisfaction. </p>

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
					Clarifying whether you want to shop around for an existing co-op vacancy or form one on your own is a huge milestone.
				</p>

				<h3>1. Shop Around</h3>
				<p>
					If you have limited time or energy, connecting with an existing co-op might be a better choice for you.  The pool of existing co-ops is not huge, but it's getting better.  And we're trying to change that with this website.
				</p>
				<p>
					For now, we recommend checking out our co-op directory to explore the profiles of existing co-ops in Chicago, subscribe to our <a href="http://eepurl.com/cmiuZv" target="_blank">Good Housing newsletter</a> to get notified of unit vacancies, and do a basic search on Craigslist or FIC for cooperatives in your area.
				</p>
				<p>
					Also, a future goal of the Fireplace Compatibility Tool (which is currently matches people with people) is to match people with existing co-ops.  So <a href="http://fireplace.resusstudio.com" target="_blank">start your profile</a> to get notified when this feature is added!
				</p>


				<h3>2. Form a Co-op</h3>
				<p>
					We have a guide for forming co-ops!  <a href="<?php get_page_template(); ?>/chgocoopWP/explore/formation">Visit it now!</a>
				</p>


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
