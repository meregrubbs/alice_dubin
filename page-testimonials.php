<?php get_header(); ?>

<?php 
  if ( have_rows('testimonial', 'option') ) : 
  $title = get_field('testimonials_section_title', 'option');?>
      <section class="testimonials-page">
        <div class="container">
        <?php if ( $title ) : ?>
          <h1 class="section-title"><?php echo $title ?></h1>
        <?php endif; ?>
          <div class="testimonials">

          <?php $layout_count = 3 ?>

          <?php while ( have_rows('testimonial', 'option') ) : the_row();
          $image = get_sub_field('testimonial_image', 'option');
          $quote = get_sub_field('testimonial_quote', 'option');
          $author = get_sub_field('testimonial_author', 'option');
          $linkedin = get_sub_field('linkedin_url', 'option');
          ?>

            <?php if ($layout_count < 3) { ?>

            <?php if ($layout_count == 1) : ?>
            <div class="vertical-container">
            <?php endif; ?>

            <div class="testimonial vertical-testimonial">
              <?php if ($image) : ?>
              <div class="testimonial-img-container">
                <div class="testimonial-img">
                <?php if ($linkedin) { ?>
                  <a href="<?php echo $linkedin ?>">
                  <img src="<?php echo $image ?>" alt="alice dubin testimonial from <?php echo $author ?>">
                  </a>
                <?php } else { ?>

                  <img src="<?php echo $image ?>" alt="alice dubin testimonial from <?php echo $author ?>">

                <?php } ?>
                </div>
              </div>
                <?php endif; ?>


              <blockquote class="blockquote">
                <p>"<?php echo $quote ?>"</p>
                <footer class="blockquote-footer">
                <?php echo $author ?>
                </footer>
              </blockquote>
            </div>
            <!-- testimonial -->

            <?php if ($layout_count == 2) : ?>
            </div> <!-- vertical container -->
            <?php endif; ?>

            <?php $layout_count = $layout_count + 1; ?>

            <?php } else { 
                $layout_count = 1; ?>

              
              <div class="testimonial pink-margins">
              <div class="pink-testimonial"></div> <!-- pink testimonial -->
              <?php if ($image) : ?>
              <div class="testimonial-img-container">
                <div class="testimonial-img">
                <?php if ($linkedin) { ?>
                  <a href="<?php echo $linkedin ?>">
                  <img src="<?php echo $image ?>" alt="alice dubin testimonial from <?php echo $author ?>">
                  </a>
                <?php } else { ?>

                  <img src="<?php echo $image ?>" alt="alice dubin testimonial from <?php echo $author ?>">

                <?php } ?>
                </div>
              </div>
                <?php endif; ?>
              <blockquote class="blockquote">
                <p>"<?php echo $quote ?>"</p>
                <footer class="blockquote-footer">
                <?php echo $author ?>
                </footer>
              </blockquote>
            </div>
            <!-- testimonial -->
            

            <? } ?>

          <?php endwhile; ?>  
  
          </div>
          <!-- testimonials -->

        </div>
        <!-- container -->
      </section>
  <?php endif; ?>

<?php get_footer(); ?>