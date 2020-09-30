<?php get_header(); ?>

<?php
$page_title = get_field('about_page_title');
$page_image = get_field('about_page_image');
$bio = get_field('bio');
$skills_title = get_field('skills_title');
$skills_list = get_field('skills_list');
$verticals_title = get_field('verticals_title');
$verticals_list = get_field('verticals_list');
$primary_button_text = get_field('primary_button_text');
$primary_button_url = get_field('primary_button_url');
$secondary_button_text = get_field('secondary_button_text');
$secondary_button_url = get_field('secondary_button_url');
$photo_collage = get_field('photo_collage');
?>


    <div class="container">
      <section id="about-page">

        <?php if ($page_title) : ?>
        <h1 class="section-title"><?php echo $page_title ?></h1>
        <?php endif; ?>

        <div class="about-content">
          <div class="left-side">
              <div class="left-side-background">
            
            <?php if ($page_image) : ?>
            <div class="about-page-img">
              <img src="<?php echo $page_image ?>" alt="alice dubin" />
            </div>
            <?php endif; ?>


            <?php
            if ( have_rows('icons', 'option') ) : 
            ?>
                <div class="social-media about-social-media">
                <?php while ( have_rows('icons', 'option') ) : the_row();
                $logo = get_sub_field('logo_image', 'option');
                $link = get_sub_field('link_to_social_media_page', 'option');
                ?>

                <a href="<?php echo $link ?>"><img src="<?php echo $logo ?>" alt=""/></a>
                
                <?php endwhile; ?>
                </div>

            <?php endif; ?>

            <?php if (have_rows('skills_list')) : ?>
            <div class="skills-list">
              <h4><?php echo $skills_title ?></h4>

              <ul>
                <?php while (have_rows('skills_list')) : the_row(); 
                $skill = get_sub_field('skill'); ?>
                <li><?php echo $skill ?></li>
                <?php endwhile; ?>
              </ul>
            </div>
            <?php endif; ?>

            <?php if (have_rows('verticals_list')) : ?>
            <div class="verticals-list">
              <h4><?php echo $verticals_title ?></h4>

              <ul>
                <?php while (have_rows('verticals_list')) : the_row(); 
                $vertical = get_sub_field('vertical'); ?>
                <li><?php echo $vertical ?></li>
                <?php endwhile; ?>
              </ul>
              <?php endif; ?>

            </div><!-- verticals list -->
            </div><!-- left side background -->
            </div>
          <!-- end left side -->

          <div class="right-side">
          <!-- Bio -->
            <?php if (have_rows('bio')) : 
              ?>  
              <?php while (have_rows('bio')) : the_row(); 
               $text = get_sub_field('text_block'); 
               $spacer = get_sub_field('spacer'); ?>

                <p class="bio-text">
                <?php echo $text ?>
                </p>

                <?php if ($spacer) : ?>
                <img class="spacer" src="<?php echo $spacer ?>" alt="">
                <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>


            
            <div class="hero-buttons about-page-buttons">
              <?php if ($primary_button_text && $primary_button_url) :?>
              <a href="<?php echo $primary_button_url ?>" class="btn btn-primary"><?php echo $primary_button_text ?></a>
              <?php endif; ?>

              <?php if ($secondary_button_text && $secondary_button_url) : ?>
              <a href="<?php echo $secondary_button_url ?>" class="btn btn-outline-primary"><?php echo $secondary_button_text ?></a>
              <?php endif; ?>
            </div>
          </div>
          <!-- end right side -->
        </div>
        <!-- about content -->
      </section>
    </div>
    <!-- container -->

    <div class="container">
      <section class="about-page-collage">
        <div class="row no-gutters">
          <div id="image-1" class="custom-margin col-sm-12 col-md collage-img"></div>
          <div id="image-2" class="custom-margin col-sm-12 col-md collage-img"></div>
          <div id="image-3" class="custom-margin col-sm-12 col-md collage-img"></div>
        </div>
        <div class="row no-gutters hide-on-mobile">
          <div id="image-4" class="custom-margin col-sm-12 col-md collage-img"></div>
          <div id="image-5" class="custom-margin col-sm-12 col-md collage-img"></div>
        </div>
        <div class="row no-gutters hide-on-mobile">
          <div id="image-6" class="custom-margin col-sm-12 col-md collage-img"></div>
          <div id="image-7" class="custom-margin col-sm-12 col-md collage-img"></div>
          <div id="image-8" class="custom-margin col-sm-12 col-md collage-img"></div>
        </div>
      </section>
    </div>

    <style>
    #image-1 {
        background-image: url('<?php echo $photo_collage['image_1'] ?>');
    }
    #image-2 {
        background-image: url('<?php echo $photo_collage['image_2'] ?>');
    }
    #image-3 {
        background-image: url('<?php echo $photo_collage['image_3'] ?>');
    }
    #image-4 {
        background-image: url('<?php echo $photo_collage['image_4'] ?>');
    }
    #image-5 {
        background-image: url('<?php echo $photo_collage['image_5'] ?>');
    }
    #image-6 {
        background-image: url('<?php echo $photo_collage['image_6'] ?>');
    }
    #image-7 {
        background-image: url('<?php echo $photo_collage['image_7'] ?>');
    }
    #image-8 {
        background-image: url('<?php echo $photo_collage['image_8'] ?>');
    }
    </style>

<?php get_footer(); ?>