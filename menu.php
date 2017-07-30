<nav class="menu-big">
    <!--  menu displayed differently on different pages, so i referenced this thread:  (https://wordpress.org/support/topic/wp-nav-menu-dissapears-in-category-pages-1/) by nickkeenan but had to add nav_menu_item to array per boyvanamstel -->

    <!-- then revised the array to only target posts.  works for the news archive page (index.php)  only difference is i deleted 'nav_menu_item' from the array. -->

    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
</nav>

<nav class="menu-mobile">
  <?php     wp_nav_menu(array('theme_location'=>'mobile')); ?>
</nav>

<a href="#top"><div class="backtotop icon-circle-up">
  </div></a>
