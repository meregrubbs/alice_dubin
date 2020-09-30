<div class="container">
      <footer class="website-footer">
      <?php
      if ( have_rows('icons', 'option') ) : 
      ?>
        <div class="social-media">
        <?php while ( have_rows('icons', 'option') ) : the_row();
        $logo = get_sub_field('logo_image', 'option');
        $link = get_sub_field('link_to_social_media_page', 'option');
        ?>

          <a href="<?php echo $link ?>"><img src="<?php echo $logo ?>" alt=""/></a>
        
        <?php endwhile; ?>
        </div>

      <?php endif; ?>
        <nav>
        <?php 
          wp_nav_menu(
              array(
                  'theme_location' => 'bottom-menu'
              )
              );?>
        </nav>
      </footer>
    </div>
    <!-- container -->

    <?php wp_footer();?>
  </body>
</html>