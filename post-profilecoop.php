<?php get_header(); ?>

<?php /* PostType Page Template: Profile: Co-op */ ?>

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

<!-- make these images dynamic ACF -->
    <img src="<?php bloginfo('template_directory'); ?>/imgs/sample/exterior.jpg" alt="exterior" />
    <img src="<?php bloginfo('template_directory'); ?>/imgs/sample/backyd.jpg" alt="exterior" />

    <h2>Living type: <span class="mainfact"><?php the_field('living_type'); ?></span></h2>
    <h2>Size: <span class="mainfact"><?php the_field('bldgsize'); ?></span></h2>

    <h2>Neighborhood: <span class="mainfact"><?php the_field('neighborhood'); ?></span></h2>

    <hr>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-location">	</div>
      </div>
        <p class="infoblock"><span class="infofield">Main intersection: </span><?php the_field('intersection'); ?> (at <?php the_field('address'); ?>)</p> <!-- add if statement to display address or not -->
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-home2">	</div>
      </div>
        <p class="infoblock"><span class="infofield">Building type: </span><?php the_field('bldgtype'); ?></p>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-laptop">	</div>
      </div>
      <p class="infoblock"><span class="infofield">Website: </span><?php the_field('website'); ?></p>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-fire">	</div>
      </div>
      <p class="infoblock"><span class="infofield">Shared common spaces: </span><?php the_field('shared_spaces'); ?></p>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-power-cord">	</div>
      </div>
      <p class="infoblock"><span class="infofield">Shared utilities: </span><?php the_field('shared_utilities'); ?></p>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-quotes-left">	</div>
      </div>
      <p class="infoblock"><span class="infofield">Our Motto: </span><?php the_field('motto'); ?></p>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-hammer2">	</div>
      </div>
      <p class="infoblock"><span class="infofield">Governance: </span><?php the_field('governance'); ?></p>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-pie-chart">	</div>
      </div>
      <p class="infoblock"><span class="infofield">Equity Structure: </span><?php the_field('equity_structure'); ?></p>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-clipboard">	</div>
      </div>
      <p class="infoblock"><span class="infofield">Established: </span><?php the_field('established'); ?></p>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-star-full">	</div>
      </div>
      <p class="infoblock"><span class="infofield">What makes us unique: </span><?php the_field('unique_coop'); ?></p>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-envelop">	</div>
      </div>
      <p class="infoblock"><span class="infofield">How to learn more: </span>We prefer to be contacted <?php the_field('contact_pref'); ?> at <?php the_field('email'); ?> or at <?php the_field('phone'); ?></p> <!-- add if statement to display email or phone -->
    </div>

    <hr class="profileblock">
    <h2>Available Units??</h2>
    <div class="infoicon">
      <div class="icon-key">	</div>
    </div>

    <?php the_content(); ?>


	<?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag! ?>




</div>


<?php get_footer(); ?>
