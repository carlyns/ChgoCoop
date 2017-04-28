<?php get_header(); ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/directory.css">

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>



<body>
<?php include_once("analyticstracking.php") ?>
<?php include ('topsticky.php'); ?>


<div class="container">
	<h1>Directory</h1>
	<ul class="directorytabs">
		<li><a href="#cooplist">Cooperatives</a></li> |
		<li><a href="#orglist">Organizations</a></li> |
		<li><a href="<?php get_page_template(); ?>/chgocoopWP/potential/">Potential Properties</a></li> |
		<li><a href="<?php get_page_template(); ?>/chgocoopWP/professionals/">Professional Services</a></li>
	</ul>

<hr id="cooplist">
	<?php the_field('coop_list_preface'); ?>


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


</div>


<?php get_footer(); ?>
