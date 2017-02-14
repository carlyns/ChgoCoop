<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/directory.css">

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>



<body>

<?php include ('topsticky.php'); ?>


<div class="container">
	<h1>Directory</h1>
	<ul class="directorytabs">
		<li><a href="#cooplist">Cooperatives</a></li> |
		<li><a href="#orglist">Organizations</a></li><!--  |
		COMING SOON: <li><a href="#potentiallist">Potential Properties</a></li> -->
	</ul>

<hr id="cooplist">
	<h2 class="subtlelink">Chicagoland Housing Co-ops (<a href="https://www.google.com/maps/d/u/0/viewer?mid=1XihqVgdsrpQRCvE-2q5KsEsj0iY&ll=41.86774747699223%2C-87.69356691594237&z=12" target="_blank">See Our Map</a>)</h2>
	<p>
		(Last updated manually updated by volunteers Jan 2017)
	</p>
	<p>Don't see your co-op? Have a vacancy? <a href="<?php get_page_template(); ?>/chgocoopWP/enhance#cooplisting">Get Listed!</a></p>



	<?php // query all coop profiles available (cpt)
	$args = array( 'post_type' => 'coopprofile', 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'title' );
	$loop = new WP_Query( $args ); //Define the loop based on those arguments

	while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div class="cooplist-item">
		<h3 class="coopname"><?php the_title(); ?>, <?php the_field('bldgsize'); ?></h3>

		<?php // if statement for 'checkbox' acf === basic listing
			$listing = get_field('listing_type');

			if ( $listing && in_array('basic',$listing) ): ?>
			<!-- turn an address into clickable google map link: http://stackoverflow.com/questions/1300838/how-to-convert-an-address-into-a-google-maps-link-not-map -->
			<p class="subtlelink">(No Profile, <a href="http://maps.google.com/?q=<?php the_field('intersection'); ?>" target="intersection"><?php the_field('address'); ?>google map</a>)</p>


			<?php // if statement for 'checkbox' acf === full profile
		 	elseif ( $listing && in_array('full',$listing) ): ?>
			<a class="profiletag" href="<?php the_permalink(); ?>"><p>Profile available</p></a>


			<?php // showing the vacancy tag
      $vacancy = get_field('vacancies');
      if( $vacancy ): ?>
        <?php foreach( $vacancy as $vacancy): ?>
					<div class="vacancytag">
							<a href="<?php echo get_permalink($vacancy->ID); ?>"><p>unit vacancy: (<?php the_field('bedrooms', $vacancy->ID); ?>)</p></a>
					</div>
        <?php endforeach; // no else, do nothing ?>
      <?php endif;      ?>


		<?php endif; ?>

	</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
		<p>
			Add a <a href="#top">Back to Top</a> icon on all pages
		</p>

<hr id="orglist">
	<h2>Regional Housing Cooperative-Related Organizations</h2>
		<ul>
			<?php // query all coop profiles available (cpt)
			$args = array( 'post_type' => 'organization', 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'title' );
			$loop = new WP_Query( $args ); //Define the loop based on those arguments

			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>

			</li>


		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		</ul>
		<p>
			Add a <a href="#top">Back to Top</a> icon on all pages
		</p>


	<!-- HOPING TO ADD THIS SECTION SOON ----
	<hr id="potentiallist">

	<h2>Potential Properties for Formation Groups??</h2>
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
		---------------------------->

<!-- DON'T SHOW THE MAP HERE BECAUSE IT'S ALWAYS IN THE FOOTER
 <iframe src="https://www.google.com/maps/d/embed?mid=1XihqVgdsrpQRCvE-2q5KsEsj0iY" width="800" height="1000"></iframe> -->

</div>


<?php get_footer(); ?>
