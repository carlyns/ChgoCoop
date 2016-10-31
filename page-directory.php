<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/directory.css">



<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<?php include ('menu.php'); ?>


<div class="container">
	<h1>Directory</h1>
	<ul class="directorytabs">
		<li><a href="#cooplist">Cooperatives</a></li> |
		<li><a href="#orglist">Organizations</a></li> |
		<li><a href="#potentiallist">Potential Properties</a></li>
	</ul>

<hr id="cooplist">
	<h2>List of Chicagoland Housing Co-ops</h2>
	<p>
		(Manually updated by volunteers.  Last updated Jan 2017)
	</p>
	<p>
		These are all such beautiful buildings as I'm going through Google Maps, is it work creating a thumbnail gallery of them??  Where do you put them though?? 
	</p>
		<div class="cooplist-item">
			<div class="coopname"><h3>Francisco Co-op</h3></div>
			<div class="profiletag"><p>Profile available</p></div>
			<div class="vacancytag"><p>2-bdrm</p></div>
			<div class="vacancytag"><p>1 unit</p></div>
		</div>
		<div class="cooplist-item">
			<div class="coopname"><h3>Genesys Cooperative</h3></div>
			<div class="profiletag"><p>Profile available</p></div>
			<div class="vacancytag"><p>2-bdrm</p></div>
			<div class="vacancytag"><p>1 unit</p></div>
		</div>
		<div class="cooplist-item">
			<div class="coopname"><h3>Genesys Cooperative</h3></div>
			<div class="profiletag"><p>Profile available</p></div>
			<div class="vacancytag"><p>vacancy!</p></div>
		</div>
		<div class="cooplist-item">
			<div class="coopname"><h3>Genesys Cooperative</h3><p>(No profile, <a href="https://www.google.com/maps/d/u/0/viewer?mid=1XihqVgdsrpQRCvE-2q5KsEsj0iY" target="_blank">see map</a>)</p></div>
		</div>
		<div class="cooplist-item">
			<div class="coopname"><h3>Francisco Co-op</h3></div>
			<div class="profiletag"><p>Profile available</p></div>
			<div class="vacancytag"><p>1 unit</p></div>
		</div>
		<div class="cooplist-item">
			<div class="coopname"><h3>Genesys Cooperative</h3><p>(No profile, <a href="https://www.google.com/maps/d/u/0/viewer?mid=1XihqVgdsrpQRCvE-2q5KsEsj0iY" target="_blank">see map</a>)</p></div>
		</div>
		<p>
			Add a <a href="#top">Back to Top</a> icon on all pages
		</p>

<hr id="orglist">
	<h2>List of Regional Housing Cooperative-Related Organizations</h2>
		<ul>
			<li>Chicago Community Loan Fund</li>
			<li>North American Students for Coop Org?</li>
			<li>New Community Vision</li>
			<li>Shared Capital</li>
			<li>Chicago Community Loan Fund</li>
			<li>North American Students for Coop Org?</li>
			<li>New Community Vision</li>
			<li>Shared Capital</li>
			<li>Chicago Community Loan Fund</li>
			<li>North American Students for Coop Org?</li>
			<li>New Community Vision</li>
			<li>Shared Capital</li>
		</ul>
		<p>
			Add a <a href="#top">Back to Top</a> icon on all pages
		</p>

		<hr id="potentiallist">
	<h2>List of Potential Properties for Formation Groups??</h2>
		<ul>
			<li>Genesys Cooperative</li>
			<li>HUB Cooperative</li>
			<li>Logan Square Co-op</li>
			<li>Noble Square Co-op</li>
			<li>Sol House</li>
			<li>Stone Soup - Hoyne House</li>
			<li>Stone Soup - ICA</li>
		</ul>
		<p>
			Add a <a href="#top">Back to Top</a> icon on all pages
		</p>

<!-- DON'T SHOW THE MAP HERE BECAUSE IT'S ALWAYS IN THE FOOTER
 <iframe src="https://www.google.com/maps/d/embed?mid=1XihqVgdsrpQRCvE-2q5KsEsj0iY" width="800" height="1000"></iframe> -->

</div>


<?php get_footer(); ?>
