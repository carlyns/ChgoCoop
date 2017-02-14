<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->


<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>



<body>

<?php include ('topsticky.php'); ?>


<div class="container">
	<h2>Sorry!  Looks like you've reached a page that doesn't exist.</h2>

	<div class="search">
		<h2>Don't worry.  Try searching.</h2>
		<?php get_search_form(); ?></div>
	</div>


</div>


<?php get_footer(); ?>
