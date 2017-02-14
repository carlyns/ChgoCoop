<!-- Just ONE post labelled "sticky" breaks the other post queries with a sticky note.  But if NO posts are "sticky" then the latest one shows and all of the work. -->

<?php // THIS CAN STAY A STICKY POST AND DON'T NEED AN ACF
$args = array( 'tag' => 'startup-story', 'posts_per_page' => 1, 'post__in'  => get_option( 'sticky_posts' ), 'ignore_sticky_posts' => 1 ); //Which tag you want, how many posts to show, last two arguments are to show first sticky post, if none show last post published. https://codex.wordpress.org/Sticky_Posts
$loop = new WP_Query( $args ); //Define the loop based on those arguments
//Display the contents
while ( $loop->have_posts() ) : $loop->the_post(); ?>




<?php endwhile; ?>
<?php // RESETTING TO ORIG LOOP
wp_reset_postdata(); ?>
