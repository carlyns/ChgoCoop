<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>



<body>
<?php include_once("analyticstracking.php") ?>
<?php include ('topsticky.php'); ?>


<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>
	<?php endwhile; endif; ?>

	<div>
		<form action="https://formspree.io/cso@RESUSstudio.com" method="POST">
			<input class="taller-field" type="text" name="first" id="first" placeholder="First Name">
			<input class="taller-field" type="text" name="email" id="email" placeholder="Email Address">
			<h4>Would you be interested in learning about financing from Chicago-based co-op lender CCLF?</h4>
				<label for="lenderyes">
						<input type="radio" name="lender" value="yes" id="lenderyes">
						Yes
				</label>
				<label for="lenderno">
						<input type="radio" name="lender" value="no" id="lenderno">
						No
				</label>
			<br>
			<input type="submit" name="submit" value="Send the Guide"> <!-- target="_blank" doens't work on the submit button -->
		</form>
	</div>

</div>


<?php get_footer(); ?>
