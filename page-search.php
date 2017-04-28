<?php get_header(); ?>

<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

</head>



<body>

<?php include ('topsticky.php'); ?>


<div class="container">

	<div class="search">
		<h2></h2>
		<h1><?php get_search_form(); ?></h1>
	</div>


</div>


<?php get_footer(); ?>
