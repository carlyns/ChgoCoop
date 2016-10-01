<?php get_header(); ?>
<?php /* WP Post Template: Profile: Co-op */ ?>

<!-- PUT THIS BEFORE PATH FOR RELATIVE FOLDER PATHS!
<?php bloginfo('template_directory'); ?>
-->

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
    <div class="gallery-plugin"><?php the_content(); // for the photo gallery ?></div>

    <h2>Living type: <span class="mainfact"><?php the_field('living_type'); ?></span></h2>
    <h2>Size: <span class="mainfact"><?php the_field('bldgsize'); ?></span></h2>

    <h2>Neighborhood: <span class="mainfact"><?php the_field('neighborhood'); ?></span></h2>

    <hr>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-location">	</div>
      </div>
        <div class="infoblock"><p><span class="infofield">Main intersection: </span><?php the_field('intersection'); ?> (at <?php the_field('address'); ?>)</p></div> <!-- add if statement to display address or not -->
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-home2">	</div>
      </div>
        <div class="infoblock"><p><span class="infofield">Building type: </span><?php the_field('bldgtype'); ?></p></div>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-laptop">	</div>
      </div>
      <div class="infoblock"><p><span class="infofield">Website: </span><?php the_field('website'); ?></p></div>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-fire">	</div>
      </div>
      <div class="infoblock"><p><span class="infofield">Shared common spaces: </span><?php the_field('shared_spaces'); ?></p></div>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-power-cord">	</div>
      </div>
      <div class="infoblock"><p><span class="infofield">Shared utilities: </span><?php the_field('shared_utilities'); ?></p></div>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-quotes-left">	</div>
      </div>
      <div class="infoblock"><p><span class="infofield">Our Motto: </span><?php the_field('motto'); ?></p></div>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-hammer2">	</div>
      </div>
      <div class="infoblock"><p><span class="infofield">Governance: </span><?php the_field('governance'); ?></p></div>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-pie-chart">	</div>
      </div>
      <div class="infoblock"><p><span class="infofield">Equity Structure: </span><?php the_field('equity_structure'); ?></p></div>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-clipboard">	</div>
      </div>
      <div class="infoblock"><p><span class="infofield">Established: </span><?php the_field('established'); ?></p></div>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-star-full">	</div>
      </div>
      <div class="infoblock"><p><span class="infofield">What makes us unique: </span>
      <?php the_field('unique_coop'); ?></p></div>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-envelop">	</div>
      </div>
      <div class="infoblock"><p><span class="infofield">How to learn more: </span>
        </br>We prefer to be contacted <?php the_field('contact_pref'); // if statement pulled from https://www.advancedcustomfields.com/resources/hiding-empty-fields/ ?>
        </br>
        <?php if( get_field('email')): // if there's an email ?>
        at <?php the_field('email'); // then print it ?></p>
        <?php endif; ?>

        <?php if( get_field('phone')): // if there's a phone number ?>
          at <?php the_field('phone'); // then print it ?></p>
        <?php endif; ?>
      </div>
    </div>

    <hr class="profileblock">
    <h2>Available Units??</h2>
    <div class="infoicon">
      <div class="icon-key">	</div>
    </div>
    <!-- IF STATEMENT: SORRY, NO VANCANCIES. -->
    <!-- SHOW POST THAT MEETS CONDITION OF   -->
<p>
  Build so this will retrieve a thumbnail from the link
</p>
    <h3>2-bdrm, $800/mo</h3>
    <!-- make this image black and white, color on hover.  standard size thumbnail. -->
    <!-- linked to unit profile, if it exists. -->

    <img src="<?php bloginfo('template_directory'); ?>/imgs/sample/livrm1.jpg" alt="sample unit" />

    <a href="<?php the_field('vacancies'); ?>">Title of the Post</a>


      <p>Currently it's a Category, so I can create an archive page of all Cooperative Profiles and all listing pretty easily.</p>
      <p>Link to their IC profile page (more detailed profile): http://www.ic.org/directory/logan-square-coYay!  The Post Template works - where you can select the template for the post as a drop down option to the right.  Now I can customize this look and all the ACF.
       and all the ACF.</p>



	<?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag! ?>


</div>


<?php get_footer(); ?>
