<?php get_header(); ?>


<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>
</head>

<body>
	<?php include ('topsticky.php'); ?>

	<?php include ('menu.php'); ?>

<div class="container">
	<!-- if trying to display posts that are CPT, the ARCHIVE PAGE  NEEDS TO BE TOGGLED EITHER MANUALLY (if custom post types were manually created) OR VIA THE CPT UI SETTINGS: "HAS ARCHIVE".-->
	<!-- but apparently CPT 'tools' needs some more tweaking.-->

	<?php if ( have_posts() ) : ?>
		<p>
			Your results for the tag/category <span class="keyword"><?php single_tag_title(); ?></span>:
				<!-- add the Tag Description? -->
		</p>

	<?php while ( have_posts() ) : the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p>
			<?php the_tags()  ?>
		</p>
		<p>Category:
			<?php single_cat_title(); // not exactly displaying overall category if it's a post. 
			?>
	</p>

	<?php endwhile; else : ?>

		<p><?php _e( "Unfortunately, no posts matched your criteria.  But don't give up just yet!" ); //_e aka echo
		?></p>

	<?php endif; ?>
	<!-- ADD PAGINATION JUST IN CASE??  HOW MANY RESULTS DOES IT DISPLAY? -->

</div>

<?php get_footer(); ?>
