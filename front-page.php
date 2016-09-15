<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->


<!-- GOOGLE ANALYTICS TRACKING.  TRACKING NUMBER STARTS WITH UA.

GOOGLE ANALYTICS TRACKING: PHP ALTERNATIVE!  via https://analytics.google.com/analytics/web/?authuser=1#management/Settings/a72902531w110694745p115471852/%3Fm.page%3DTrackingCode%26_r.ghFlowId%3D6324039/


HOWEVER, WORDPRESS HAS ITS OWN ANALYTICS FOR TRACKING POSTS.  SHOULD BE JUST AS GOOD AS GOOGLE ANALYTICS?  SEE WHAT HAPPENS IF I INCLUDE THIS SCRIPT ON INDEX AT LEAST?  WP BUSINESS PLAN CAN ADD MORE GOOGLE ANALYTICS FEATURES.
-->

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
			<h3>ORG PROFILE:</h3>
			<p class="orgname">New Community Vision</p>
			<p>Taking co-housing city-wide. An organization led by Terry Edlin</p>
			<div class="thumbnail">
				<img src="imgs/ncv.png" alt="vacant unit">
			</div>
			<a href="profile-org.html"><div class="button-bottom">Read More</div></a>
		</div>
	</div>

	<div class="grid4">
		<div class="featured-unit">
			<h3>VACANCY!</h3>
			<div class="thumbnail">
				<a href="profile-unit.html"><img src="imgs/livrm.png" alt="vacant unit"></a>
			</div>
			<p>Take a virtual tour of the HUB in Little Village
				$800/monthly fee, 2bedroom, 900 SF</p>
				<a href="profile-unit.html"><div class="button-bottom">Own It</div></a>
		</div>
	</div>

	<div class="grid4">
		<div class="featured-coop">
			<h3>STARTUP STORIES</h3>
			<p class="quote">“We did it for $100K per person!”</p>
			<p>Learn how Valerie made her dream place happen with four friends.</p>
			<div class="thumbnail">
				<img src="imgs/valvision.png" alt="vacant unit">
			</div>
			<a href="single.html"><div class="button-bottom">Read More</div></a>
		</div>
	</div>

	<div class="newsletter">
		<p>Like those stories?
		</br><a href="#">See the archive</a> OR Get them regularly:</p>
		<a href="#"><div class="button">Sign Up for Newsletter</div></a>
	</div>


</div> <!--/ "container" -->

<?php get_footer(); ?>
