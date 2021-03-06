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

    <h2>Living type: <span class="mainfact"><?php the_field('living_type'); ?></span></h2>
    <h2>Size: <span class="mainfact"><?php the_field('bldgsize'); ?></span></h2>

    <h2>Neighborhood: <span class="mainfact"><?php the_field('neighborhood'); ?></span></h2>

    <hr>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-location">	</div>
      </div>
        <div class="infoblock"><p>Main intersection: </span><a href="http://maps.google.com/?q=<?php the_field('intersection'); ?>" target="_blank"><span class="infofield"><?php the_field('intersection'); ?></a>

        <!-- if statement to display address or not -->
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
      <div class="infoblock"><p><span class="infofield">Website: </span>

        <?php if( get_field('website') ): ?>

          <a href="<?php the_field('website'); ?>" target="_blank">Visit this co-op's site.</a>

        <?php else: ?>

          None

        <?php endif; ?>


      </p></div>
    </div>

    <div class="profileblock">
      <div class="infoicon">
        <div class="icon-feather">	</div>
      </div>
      <div class="infoblock">
        <p>
          <span class="infofield">Spirituality: </span>
          <?php // if spiritual is Yes, then:
            if( get_field('spiritual') ): ?>
            <?php the_field('spiritual_description');  ?>

          <?php // if spiritual is No, then:
            else : ?>
            We are not a spiritual community.
          <?php endif; ?>
        </p></div>
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
        </br>We prefer to be contacted <?php the_field('contact_pref');  ?>
        </br>

        <?php if( get_field('contact_pref') == 'via email' ):  ?>
        at <?php the_field('email'); // then print email ?></p>

      <?php elseif( get_field('contact_pref') == 'via phone' ):  ?>
        at <?php the_field('phone'); // then print phone number ?></p>

      <?php elseif( get_field('contact_pref') == 'through ChicagoCoop.net' ):  ?>
        <?php  ?>

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
      $vacancy = get_field('vacancies');

      if( $vacancy ): ?>
        <ul class="availunits">
        <?php foreach( $vacancy as $vacancy): ?>
            <li>
                <a href="<?php echo get_permalink($vacancy->ID); ?>"><h3><?php echo get_the_title($vacancy->ID); ?> (<?php the_field('bedrooms', $vacancy->ID); ?>)</h3></a>
            </li>
        <?php endforeach; ?>
        </ul>

      <?php else: ?>
        <p>
          Sorry, there are no vacancies at this co-op.
        </p>

      <?php endif;      ?>
    </div>

	<?php endwhile; endif; ?>

  <hr>
  <div class="tags">
		<h5> 
			You can find more Profiles and Vacancies in the<span class="category"><a href="<?php echo get_permalink(11); ?>">Directory</a></span>
		</h5>
	</div>


</div>


<?php get_footer(); ?>
