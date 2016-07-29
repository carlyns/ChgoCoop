<!-- REMEMBER: I HAVE TO REGISTER MY MENU FOR IT TO SHOW UP IN THE WP DASHBOARD? -->

<nav>
  <p>
    register the menu!
  </p>

  <?php wp_nav_menu( array( 'menu' => 'primary' ) ); ?>

  <ul class="menu">
    <div class="icon-rocket">	</div>
    <li><span class="icon-home">		</span><a href="index.html">Home</a></li>
    <li><a href="explore.html">For Explorers</a></li>
      <li class="sub"><a href="explore.html">Info for Beginners</a></li>
      <li class="sub"><a href="explore.html">Tools/Diagrams</a></li>
      <li class="sub"><a href="explore.html">Find Vacancies</a></li>
      <li class="sub"><a href="explore.html">Form your own co-op</a></li>
    <li><a href="enhance.html">For Current Co-op Members</a></li>
      <li class="sub"><a href="enhance.html">Fundamentals</a></li>
      <li class="sub"><a href="enhance.html">Collaboration tools</a></li>
      <li class="sub"><a href="enhance.html">finance tools</a></li>
      <li class="sub"><a href="enhance.html">legal tools</a></li>
      <li class="sub"><a href="enhance.html">list a unit</a></li>
      <li class="sub"><a href="enhance.html">membership</a></li>
    <li><a href="#">Map of Chicago Co-ops</a></li>
    <li><a href="comingsoon.html">Co-op Profiles</a></li>
    <li><a href="comingsoon.html">Upcoming Events</a></li>
    <li><a href="about.html">Our Team</a></li>
    <li><a href="comingsoon.html">Blog</a></li>
    <li><a href="comingsoon.html">Mailing List</a></li>
    <li><a href="comingsoon.html">Archived News</a></li>
  </ul>
</nav>
