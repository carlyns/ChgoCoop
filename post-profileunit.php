<?php get_header(); ?>

<?php /* PostType Page Template: Profile: Unit */ ?>

<!-- THIS STYLESHEET MIGHT CHANGE BETWEEN PAGES.-->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/profiles.css">



<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>

</head>



<body>

<?php include ('topsticky.php'); ?>

<?php include ('menu.php'); ?>


<div class="container">


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>

    <!-- make these images dynamic ACF -->
        <img src="<?php bloginfo('template_directory'); ?>/imgs/sample/livrm1.jpg" alt="living room" />
        <img src="<?php bloginfo('template_directory'); ?>/imgs/sample/livrm2.jpg" alt="living room" />
        <img src="<?php bloginfo('template_directory'); ?>/imgs/sample/bathrm.jpg" alt="bathroom" />

    <h2>Type: <span class="mainfact"><?php the_field('bedrooms'); ?>, <?php the_field('bathrooms'); ?></span></h2>
    <h2>Size: <span class="mainfact"><?php the_field('square_feet'); ?></span></h2>

    <h2>Monthly Fee/Assessment: <span class="mainfact"><?php the_field('monthly_fee'); ?></span></h2>

    <hr>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-star-full">	</div>
      </div>
      <p><span class="infofield">Buy-in / Sales Price: </span><?php the_field('sales_price'); ?></p>
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
      <p class="infoblock"><span class="infofield">How to apply for this unit: </span>We prefer <?php the_field('apply_option'); ?> at Email or Phone</p> <!-- add if statement to display email or phone -->
    </div>



	<?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag! ?>

</div>


<?php get_footer(); ?>
