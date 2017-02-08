<nav>
  <ul class="menu">
    <div class="icon-rocket">	</div>
    <li><span class="icon-home"></span><a href="index.html"></a></li>
    <!-- (added spaces for spacing after home icon, prob not great) -->
    <?php // this simple combo worked standalone, from this thread (https://wordpress.org/support/topic/wp-nav-menu-dissapears-in-category-pages-1/) by nickkeenan but had to add nav_menu_item to array per boyvanamstel
    global $query_string;
    parse_str($query_string, $args);
    $args['post_type'] = array('nav_menu_item','post'); // can delete articles from the array and it'll still work.  this is leftover from the copied code cuz somone had a CPT of 'articles'
    query_posts( $args );

    wp_nav_menu(array('theme_location'=>'primary')); ?>
  </ul>
</nav>
