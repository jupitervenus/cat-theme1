<!-- Header Template -->
<?php get_header(); ?>

<nav class="navbar_container">
  <div class="navbar">

  <?php $args = array(
    'theme_location' => 'primary'
          );
          wp_nav_menu( $args );
           ?>
</div>
</nav>


<main>

  <section>
      <br></br>
      <br></br>
      <div class="about_wrapper">

        <img class="cat_pic" alt"Picture of Catherine" src="<?php echo get_template_directory_uri();?>/assets/portfolio/cat_pic.jpg">

        <div class="cat_facts">
          <!-- <h2 class="facts_header">Fun Facts About Me:</h2>

            <div class="questions">
              <p>My Favorite Action Movie: Heat</p>

              <p>A Desination I've Always Wanted To Go To: The Carpathian Mountains</p>

              <p>Favorite Ice Cream Flavor: Pistachio</p>

              <p>Favorite Animal: Black Panther</p>

              <p>Favorite Book Series: The Chronicles of Prydain </p>

              <p>Favorite Quote: “Life moves on, whether we act as cowards or heroes. Life has no other discipline to impose, if we would but realize it, than to accept life unquestioningly. Everything we shut our eyes to, everything we run away from, everything we deny, denigrate or despise, serves to defeat us in the end. What seems nasty, painful, evil, can become a source of beauty, joy, and strength, if faced with an open mind. Every moment is a golden one for him who has the vision to recognize it as such.”  H. Miller</p>
            </div> -->
            <?php

            while(have_posts()){
              the_post();
              the_content();
          }



              ?>
          </div>
      </div>


</section>

</main>
<!-- Footer -->
<?php get_footer();  ?>
