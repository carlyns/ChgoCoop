<?php get_header(); ?>


<title><?php wp_title(); ?> | Cooperative Homes & Communities of Chicago</title>
</head>

<body>
	<?php include ('topsticky.php'); ?>

	<?php include ('menu.php'); ?>

<div class="container archive">
	<!-- if trying to display posts that are CPT, the ARCHIVE PAGE  NEEDS TO BE TOGGLED EITHER MANUALLY (if custom post types were manually created) OR VIA THE CPT UI SETTINGS: "HAS ARCHIVE".-->
	<!-- but apparently CPT 'tools' needs some more tweaking.-->

	<?php if ( have_posts() ) : ?>
		<p>
			You were looking for the tag/category <span class="keyword"><?php single_tag_title(); ?></span>.  Here are some posts/pages that match:
				<!-- add the Tag Description? -->
		</p>

	<?php while ( have_posts() ) : the_post(); ?>

		<h3>
			<ul>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				<!-- IF I WANT TO SHOW THE PUBLISHED DATE (but the CPT don't have any!)
				<span class="date">
					(Published: <?php the_date(); ?>)
				</span>----------->
				</li>
			</ul>
		</h3>


	<?php endwhile; else : ?>

		<p>
				You were looking for the tag/category <span class="keyword"><?php single_tag_title(); ?></span>.
			<?php _e( "Unfortunately, no posts matched your criteria.  But don't give up just yet!" ); //_e aka echo
		?></p>

	<?php endif; ?>
	<!-- ADD PAGINATION JUST IN CASE??  HOW MANY RESULTS DOES IT DISPLAY? -->

	<div class="search">
		<p>Or try searching for something else.  </p>
		<?php get_search_form(); ?></div>
	</div>

<?php get_footer(); ?>
