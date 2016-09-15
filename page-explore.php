<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bandedsections.css">


<!-- GOOGLE ANALYTICS TRACKING.  TRACKING NUMBER STARTS WITH UA.

GOOGLE ANALYTICS TRACKING: PHP ALTERNATIVE!  via https://analytics.google.com/analytics/web/?authuser=1#management/Settings/a72902531w110694745p115471852/%3Fm.page%3DTrackingCode%26_r.ghFlowId%3D6324039/


HOWEVER, WORDPRESS HAS ITS OWN ANALYTICS FOR TRACKING POSTS.  SHOULD BE JUST AS GOOD AS GOOGLE ANALYTICS?  SEE WHAT HAPPENS IF I INCLUDE THIS SCRIPT ON INDEX AT LEAST?  WP BUSINESS PLAN CAN ADD MORE GOOGLE ANALYTICS FEATURES.
-->

<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<?php include ('menu.php'); ?>

<div class="allsections">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>
	<?php endwhile; endif; ?>  <!-- THIS CONTENT PROBABLY WONT SHOW -->

	<div class="band-white">
		<h2>The Very Beginning</h2>
		<div class="tools">
			<a href="<?php get_page_template(); ?>/chgocoopWP/tool">
				<div class="infotool">
					<div class="icon"></div>
					<h3>Title of the Tool</h3>
				</div>
			</a>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
		</div>
		<!-- THE FOLLOWING LINK SHOULD BE A CRAFTED PAGE JUST FOR BEGINNING EXPLORERS -->
		<a href="<?php get_page_template(); ?>/chgocoopWP/beginners"><div class="button-section">Get Started</div></a>
	</div>

	<div class="band-green">
		<h2>Anecdotes / Stories</h2>
		<div class="tools">
			<a href="tool.html"><div class="infotool">
					<div class="icon"></div>
					<h3>Title of the Tool</h3>
				</div></a>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
		</div>
		<!-- THE FOLLOWING LINK SHOULD BE AN ARCHIVE PAGE FOR ALL STORY POSTS, A TAG? -->
		<a href="#"><div class="button-section">Read archive page</div></a>
	</div>

	<div class="band-white">
		<h2>Find an Existing Co-op Vacancy</h2>
		<p>
			>> STYLE THIS INTO 3 ACTION BUTTONS
		</p>
		<p>If you prefer to drop into an already existing cooperative in/near Chicago, there are a few options:</p>
		<ol>
			<li>Check out the map for vacancies. We also profile vacancies <a href="#">on our blog</a>, so subscribe to it!</li>
			<li>Visit Craigslist and use the search term “co-op” or “cooperative” (We also capture these via ifttt in our blog)</li>
			<li>Create a Fireplace profile and discover your closest co-op match. This new tool will connect you!</li>
		</ol>
	</div>

	<div class="band-green">
		<h2>Form Your Own Co-op! (DIY)</h2>
		<div class="tools">
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
		</div>
		<!-- THE FOLLOWING LINK SHOULD BE A CRAFTED PAGE DETAILING THE PROCESS OF FORMING COOPS -->
		<a href="<?php get_page_template(); ?>/chgocoopWP/formation"><div class="button-section">Read More</div></a>
	</div>

</div> <!-- //end of "allsections"-->


<?php get_footer(); ?>
