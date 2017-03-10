<div class="home"> <!-- wrapped header for different treatment of front page hero image-->

<header id="top">

	<div class="topsticky">
		<div class="heading">
			<h1><a href="<?php echo esc_url( home_url( '/' ) );	    ?>"><?php bloginfo( 'name' ); ?><span class="beta">  BETA</span></a></h1>

			<p class="style-tagline"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
		</div>

		<?php include ('menu.php'); ?>


		<div class="icon-menu">		</div>
	</div>


<!-- header element ends in different place on front page-->
