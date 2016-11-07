<?php get_header(); ?>

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
        <div class="infoblock"><p>Main intersection: </span><a href="http://maps.google.com/?q=<?php the_field('intersection'); ?>" target="_blank"><span class="infofield"><?php the_field('intersection'); ?></a>
        <!-- add if statement to display address or not -->
        <?php
          $address = get_field('address');

          if( $address ): ?>
          <!-- turn an address into clickable google map link: http://stackoverflow.com/questions/1300838/how-to-convert-an-address-into-a-google-maps-link-not-map -->
            <p>
              <a href="http://maps.google.com/?q=<?php the_field('address'); ?>" target="_blank"><?php the_field('address'); ?></a>
            </p>

          <?php else: // do nothing ?>

          <?php endif;      ?>


    </p></div>
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
    <h2>Available Units?</h2>
    <div class="infoicon">
      <div class="icon-key">	</div>
    </div>

    <div class="infoblock">
      <?php
      /* -------- DIDN'T USE THIS OPTION 1
      *  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
      *  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
      *  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset  --------------*/  ?>

      <?php
      /*  USED THIS OPTION
      *  Loop through post objects (assuming this is a multi-select field) ( don't setup postdata )
      *  Using this method, the $post object is never changed so all functions need a seccond parameter of the post ID in question.
      */ ?>

      <?php
      $vacancy = get_field('vacancies');

      if( $vacancy ): ?>
        <ul class="availunits">
        <?php foreach( $vacancy as $vacancy): ?>
            <li>
                <a href="<?php echo get_permalink($vacancy->ID); ?>"><h3><?php echo get_the_title($vacancy->ID); ?> (<?php the_field('bedrooms', $vacancy->ID); ?>)</h3></a>

                <!--  this is tricky because it's a ACF field that links to a post.  getting the ACF from that post is easy (above), but getting the regular featured image to appear is not working ...   <?php the_post_thumbnail(); ?> -->

            </li>
        <?php endforeach; ?>
        </ul>


      <!-- BASIC ACF IF/ELSE STATMENTS https://support.advancedcustomfields.com/forums/topic/if-true-do-this-false-do-that/ -->
      <?php else: ?>
        <p>
          Sorry, there are no vacancies at this co-op.
        </p>

      <?php endif;      ?>
    </div>

	<?php endwhile; endif; ?>


  <hr>
  <div class="tags">
		<h5> <!-- wrapping with a <p> tag for some reason gave a line break-->
			You can check out all Cooperative Profiles by visiting the<span class="category"><a href="<?php get_page_template(); ?>/chgocoopWP/coopprofile">co-op profile</a>
      </span>archive page.
		</h5>
	</div>


</div>


<?php get_footer(); ?>
