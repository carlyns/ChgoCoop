<?php get_header(); ?>

<!-- a unique stylesheet for certain pages.-->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/profiles.css">

  <title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>


<body>

<?php include ('topsticky.php'); ?>

<div class="container">


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
	  <div class="gallery-plugin"><?php the_content(); // for the photo gallery ?></div>

    <h2>Type: <span class="mainfact"><?php the_field('bedrooms'); ?>, <?php the_field('bathrooms'); ?></span></h2>
    <h2>Size: <span class="mainfact"><?php the_field('square_feet'); ?> sq. ft.</span></h2>

    <h2>Monthly Fee/Assessment: <span class="mainfact"><?php the_field('monthly_fee'); ?></span></h2>

    <hr>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-pie-chart">	</div>
      </div>
      <p class="infoblock"><span class="infofield">Buy-in / Sales Price: </span><?php the_field('sales_price'); ?></p>
    </div>


    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-star-full">	</div>
      </div>
      <p class="infoblock"><span class="infofield">What makes this unit unique: </span><?php the_field('unique_unit'); ?></p>
    </div>


    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-envelop">	</div>
      </div>

      <p class="infoblock"><span class="infofield">How to apply for this unit: </span>
      </br>

      We prefer <?php the_field('apply_option'); ?>
      <a href="mailto:<?php the_field('email_unit'); ?>"><?php the_field('email_unit'); ?></a>

      <?php endif; ?> -->

    </div>


    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-star-full">	</div>
      </div>

      <p class="infoblock"><span class="infofield">Learn more about this cooperative: </span><a href="<?php the_field('coop_name'); ?>">Check out its profile.</a></p>

    </div>

	<?php endwhile; endif;  ?>

  <hr>
  <div class="tags">
		<h5>
      You can find more Profiles and Vacancies in the<span class="category"><a href="<?php echo get_permalink(11); ?>">Directory</a></span>
		</h5>
	</div>

</div>


<?php get_footer(); ?>
