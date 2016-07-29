<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->


<!-- GOOGLE ANALYTICS TRACKING.  TRACKING NUMBER STARTS WITH UA.

GOOGLE ANALYTICS TRACKING: PHP ALTERNATIVE!  via https://analytics.google.com/analytics/web/?authuser=1#management/Settings/a72902531w110694745p115471852/%3Fm.page%3DTrackingCode%26_r.ghFlowId%3D6324039/


HOWEVER, WORDPRESS HAS ITS OWN ANALYTICS FOR TRACKING POSTS.  SHOULD BE JUST AS GOOD AS GOOGLE ANALYTICS?  SEE WHAT HAPPENS IF I INCLUDE THIS SCRIPT ON INDEX AT LEAST?  WP BUSINESS PLAN CAN ADD MORE GOOGLE ANALYTICS FEATURES.
-->

<title>Cooperative Homes & Communities of Chicago</title>

</head>



<body>
<header>
		<div class="topsticky home">
			<div class="heading">
				<h1><a href="<?php echo esc_url( home_url( '/' ) );	    ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="tagline">Promoting and facilitating housing cooperatives for the middle class.</p>
				<?php echo get_bloginfo( 'description', 'display' ); ?>
			</div>
		</div>
		<div class="icon-menu3">		</div>
</header>

	<nav>
		<ul class="menu">
			<div class="icon-rocket">	</div>
			<li><span class="icon-home">		</span><a href="index.html">Home</a></li>
			<li><a href="explore.html">For Explorers</a></li>
				<li class="sub"><a href="explore.html">Info for Beginners</a></li>
				<li class="sub"><a href="explore.html">Tools/Diagrams</a></li>
				<li class="sub"><a href="explore.html">Find Vacancies</a></li>
				<li class="sub"><a href="explore.html">Form your own co-op</a></li>
			<li><a href="enhance.html">For Current Co-op Members</a></li>
				<li class="sub"><a href="enhance.html">Fundamentals</a></li>
				<li class="sub"><a href="enhance.html">Collaboration tools</a></li>
				<li class="sub"><a href="enhance.html">finance tools</a></li>
				<li class="sub"><a href="enhance.html">legal tools</a></li>
				<li class="sub"><a href="enhance.html">list a unit</a></li>
				<li class="sub"><a href="enhance.html">membership</a></li>
			<li><a href="#">Map of Chicago Co-ops</a></li>
			<li><a href="comingsoon.html">Co-op Profiles</a></li>
			<li><a href="comingsoon.html">Upcoming Events</a></li>
			<li><a href="about.html">Our Team</a></li>
			<li><a href="comingsoon.html">Blog</a></li>
			<li><a href="comingsoon.html">Mailing List</a></li>
			<li><a href="comingsoon.html">Archived News</a></li>
		</ul>
	</nav>

	<div class="teaser">


		<p>A few co-ops that might interest you:</p>
		<!--<p>Housing for the middle class is hard to come by these days.  Not to mention we've replaced real-life community with digital connections.  Cooperatives may not be what you think.</p>-->
			<div class="type">
				<img src="imgs/walkup.jpg" alt="private apartments">
				<p>private apartments</p>
			</div>
			<div class="type">
				<img src="imgs/home.png" alt="single family home">
				<p>single family detached</p>
			</div>
			<div class="type">
				<img src="imgs/hirise.jpg" alt="high rise">
				<p>high-rise</p>
			</div>
			<div class="type">
				<img src="imgs/communal.png" alt="shared home">
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
			<a href="explore.html"><div class="button-bottom">Go</div></a>
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
			<a href="enhance.html"><div class="button-bottom">Go</div></a>
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

<footer>

	<div class="grid6right">
		<div class="map">
			<iframe width='100%' frameBorder='0' src='https://a.tiles.mapbox.com/v4/carlyniuna.pi535411/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiY2FybHluaXVuYSIsImEiOiJvQTVpUXY0In0.xJqOXcNQ80n3JFmY7mZCPw'></iframe>
		</div>

		<div class="button"><a href="#">See Larger Map</a></div>
	</div>


	<div class="grid6right">
		<h3><a href="about.html">Our Team</a></h3>

		<div class="eventlist">
			<h3>Upcoming Events</h3>
			<div class="eventinfo">
				<div class="datebox">27</br>feb</div>
				<div class="eventtitle">Open House</div>
			</div>
			<div class="eventinfo">
				<div class="datebox">14</br>mar</div>
				<div class="eventtitle">Meetup for those Exploring Housing Cooperatives</div>
			</div>
			<div class="eventinfo">
				<div class="datebox">02</br>apr</div>
				<div class="eventtitle">CCLF-hosted info session @StoneSoup</div>
			</div>
			<div class="eventinfo">
				<div class="datebox">20</br>may</div>
				<div class="eventtitle">On The Table dinner and discussion</div>
			</div>
		</div>

		<div class="contactinfo">
			<p><a href="mailto:cso@RESUSstudio.com">Email us</a></p>
			<p><a href="https://www.facebook.com/Exploring-Housing-Cooperatives-420807511344699/">Find us on Facebook</a></p>
		</div>
	</div>

	<div class="credits">
		<p>Copyright &copy;	2016</p>
		<p>Site Design by <a href="http://sitesforsocialgood.com">Sites for Social Good</a></p>
	</div>

</footer>

<script src="js/jquery.min.js"></script>
<script src="js/coop.js"></script>

</body>
</html>
