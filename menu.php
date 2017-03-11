<nav class="menu-big">
    <!--  menu issue.  with original styling, the menu on the archive pages wouldn't show the right menu (it was sorted alphabetically).

    to find a fix, i had to find the following piece of code online:
    this simple combo worked standalone, from this thread (https://wordpress.org/support/topic/wp-nav-menu-dissapears-in-category-pages-1/) by nickkeenan but had to add nav_menu_item to array per boyvanamstel -->

<!-- but putting this piece of code in the menu affected too many pages in different ways.  sometimes the single post templates wouldn't display the menu.  sometimes the single CPT wouldn't display the content.  sometimes the typical tag/cateogry archive pages would display menus instead.  it was probably messing with the query youre never supposed to mess with -->

<!-- realized i could revise the array to only target posts.  and this target works for the news archive page (index.php)  only difference is i deleted 'nav_menu_item' from the array.

that way i don't have to touch the menu snippet.    -->


    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
</nav>

<nav class="menu-mobile">
  <?php     wp_nav_menu(array('theme_location'=>'mobile')); ?>
</nav>

<a href="#top"><div class="backtotop icon-circle-up">
  </div></a>
