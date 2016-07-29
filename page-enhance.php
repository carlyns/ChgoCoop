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

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>
	<?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag! ?>

<div class="allsections">
	<div class="band-white">
		<h2>Fundamentals</h2>
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
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
		</div>
		<!-- THE FOLLOWING LINK SHOULD BE A CRAFTED PAGE JUST FOR REVIEWING FUNDAMENTALS -->
		<a href="<?php get_page_template(); ?>/chgocoopWP/enhance"><div class="button-section">Read more</div></a>
	</div>

	<div class="band-purple">
		<h2>Collaboration Tools</h2>
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
		<!-- THE FOLLOWING LINK SHOULD BE AN ARCHIVE PAGE FOR ALL TOOLS, A TAG? -->
		<a href="#"><div class="button-section">See All Advice</div></a>
	</div>

	<div class="band-white">
		<h2>Financial/Legal Tools</h2>
		<div class="tools">
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
			<div class="infotool">
				<div class="icon"></div>
				<h3>Title of the Tool</h3>
			</div>
		</div>
		<!-- THE FOLLOWING LINK SHOULD BE AN ARCHIVE PAGE FOR ALL TOOLS, A TAG? -->
		<a href="#"><div class="button-section">See All Tools</div></a>
	</div>

	<div class="band-purple">
		<h2>Create a Profile Page for your Cooperative & List a Unit</h2>
<p>If your cooperative has a current vacancy, you can spread the word by listing it with us on this site!</p>
<ol>
	<li>Become a member for $10.60/year, $5.45/listing</li>
	<p>Service fee for Stripe is 2.9% + $0.30 each transaction.  So just make it $5.50 and $11 even. </p>
	<li>Create a beautiful profile that will be featured on our site and in blog posts, </li>
	<li>Watch the requests roll in!</li>
</ol>
<!-- THE FOLLOWING LINK SHOULD BE A CRAFTED PAGE JUST FOR MEMBERSHIP -->
<a href="<?php get_page_template(); ?>/chgocoopWP/membership"><div class="button-section">Become a Member</div></a>

	</div>

	<div class="band-white">
		<h2>Update the Map</h2>
		<p>We list basic information about any cooperative on our map for free.</p>
		<p>This includes: Name, Address, and Size.</p>
		<p>(To add more, including contact info, you need to create profile page with us - see above!)</p>
		<p>If you see a mistake, please email us so we can revise it.</p>
		<a href="<?php get_page_template(); ?>/chgocoopWP/map"><div class="button-section">Notify us</div></a>
	</div>
</div> <!-- //end of "allsections"-->

<?php get_footer(); ?>
