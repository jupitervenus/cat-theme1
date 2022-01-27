
    <!-- Header Template -->
    <?php get_header(); ?>



      <nav class="navbar_container">
        <div class="navbar">
        <!-- <div>
         <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="./aboutme.html">About Me</a></li>
            <li><a href="./portfolio.html">Portfolio</a></li>
            <li><a href="./contact.html">Contact</a></li>
        <ul>
        </div> -->
        <?php $args = array(
          'theme_location' => 'primary'
                );
                wp_nav_menu( $args );
                 ?>
      </div>
      </nav>

    <div class="logo_container">
    <img src="<?php echo get_template_directory_uri();?>/assets/portfolio/text.png" alt="Logo"
    id="logo"/>

    <section>

    <h1 id="tagline">Graphic Designer + Web Developer</h1>
    </section>
    <img src="<?php echo get_template_directory_uri();?>/assets/portfolio/triangle.png" alt="Triangle"
    id="triangle"/>

    </div>
<!-- Footer -->
<?php get_footer();  ?>
