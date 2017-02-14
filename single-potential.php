<?php get_header(); ?>

	<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>

<body>

<?php include ('topsticky.php'); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>
	<?php endwhile; endif; ?>

	<hr>

	<p>If you can imagine this property as a great housing co-op for your group, here are a few tips: </p>

	<ol>
		<li>Tell your group about the property and get them excited.  Review your preferences and finances (we recommend a free tool like Fireplace to help).</li>
		<li>Contact the listing agent or your realtor and setup a viewing with your group.</li>
		<li>Draft up the necessary documents, open a holding account, and start to the nonprofit incorporation process.  The lender will look for these three pieces to be in motion.</li>
		<li>Meet with a lender.  If your group is not solidified but you have an idea of how many people you want to participate, you can fill out a loan inquiry here (on our site).  It will walk you through the numbers required for the financial worksheet requested by the lender.  And it will crunch some numbers for you.  i.e. 2 people have $10K to put down upfront and are considering a property listed for $450K.  Are there loan products available for them and if so, how can they start the application process?  Then the lender will vet individuals and the group. </li>
	</ol>

	<p>Completing a Fireplace profile, you'll have the option to get connected with a Chicago-based lender experienced with housing cooperatives.  There can be some conditionals: if you have property in mind/not.  If yes, direct to form.  If not, submit a general inquiry to CCLF for an informational meeting.</p>
	<p>Note to self: need to create a form page.  Here you can indicate the property being considered whereas the Fireplace profile is not property-specific. </p>

	<hr>
  <div class="tags">
		<h5> <!-- wrapping with a <p> tag for some reason gave a line break-->
      You can check out all Potential Properties by visiting the<span class="category"><a href="<?php get_page_template(); ?>/chgocoopWP/potential">potential</a>
      </span>archive page.
		</h5>
	</div>

</div>


<?php get_footer(); ?>
