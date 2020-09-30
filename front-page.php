<?php get_header(); ?>





<!-- HERO SECTION -->

<?php $hero = get_field('hero');
if( $hero ) : 
$primaryButtonText = $hero['primary_button_text'];
$secondaryButtonText = $hero['secondary_button_text'];
?>

    <div id="hero-img" style="background-image: url('<?php echo $hero['hero_image'] ?>');"></div>
    <div id="hero">
      <div class="container">
        <section class="hero-content">
          <h1>
          <?php echo $hero['main_heading'] ?>
          </h1>
          <h2>
          <?php echo $hero['sub_heading'] ?>
          </h2>
          <div class="hero-buttons">
          <?php if( $primaryButtonText ) : ?>
            <a href="<?php echo $hero['primary_button_url'] ?>" class="btn btn-primary"><?php echo $hero['primary_button_text'] ?></a>
          <?php endif; 
          if( $secondaryButtonText ) : ?>
            <a href="<?php echo $hero['secondary_button_url'] ?>" class="btn btn-outline-primary"><?php echo $hero['secondary_button_text'] ?></a>
          <?php endif; ?>
          </div>
        </section>
      </div>
      <!-- container -->
    </div>
    <!-- hero -->
<?php endif; ?>    



<!-- PORTFOLIO TILES -->

<?php 
$journalism_photo = get_field('journalism_photo', 'option');
$journalism_title = get_field('journalism_title', 'option');
$journalism_link = get_field('link_to_journalism_page', 'option');
$content_marketing_photo = get_field('content_marketing_photo', 'option');
$content_marketing_title = get_field('content_marketing_title', 'option');
$content_marketing_link = get_field('link_to_content_marketing_page', 'option');

if ( $journalism_photo && $journalism_title && $content_marketing_photo && $content_marketing_title ) :
?>
<div class="container">
      <section class="portfolio-tiles">
        <a style="background-image: url('<?php echo $journalism_photo ?>');" class="portfolio-tile" href="<?php echo $journalism_link ?>"><span><?php echo $journalism_title ?></span></a>
        <a style="background-image: url('<?php echo $content_marketing_photo ?>');" class="portfolio-tile" href="<?php echo $content_marketing_link ?>"
          ><span><?php echo $content_marketing_title ?></span>
        </a>
      </section>
    </div>
    <!-- container -->
<?php endif; ?>




<!-- HOME BIO BLURB -->

<?php $short_bio = get_field('short_bio');
if ( $short_bio ) : ?>

    <section class="home-bio">
      <div class="container">
        <div class="home-bio-content">
          <img
            class="home-bio-photo"
            src="<?php echo $short_bio['bio_photo'] ?>"
            alt="alice dubin bio photo"
          />

          <div class="home-bio-details">
            <p>
            <?php echo $short_bio['bio_blurb'] ?>
            </p>
            <?php if ( $short_bio['link_to_bio_url'] && $short_bio['link_to_bio_text'] ) : ?>
            <a href="<?php echo $short_bio['link_to_bio_url'] ?>" class="btn btn-outline-dark"><?php echo $short_bio['link_to_bio_text'] ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <!-- container -->
    </section>
<?php endif; ?>




<!-- CLIENT LOGOS -->
<?php
if ( have_rows('client_logos') ) : ?>
    <div class="container">
      <section class="logos">

      <?php $logos_title = get_field('client_logos_title');
      if ($logos_title) : ?>
      <h1 class="section-title"><?php echo $logos_title ?></h1>
      <?php endif; ?>

      <div class="client-logos">
      <?php while (have_rows('client_logos') ) : the_row(); 
      $logo = get_sub_field('logo');
      $company = get_sub_field('company_name'); ?>

        <img src="<?php echo $logo ?>" alt="<?php echo $company ?>">

      <?php endwhile; ?>
      </div><!-- client logos -->
      </section>
    </div>
    <!-- container -->
<?php else : ?>
  <style>
    .home-bio {
      margin-bottom: 0;
    }
  </style>
<?php endif; ?>




<!-- TESTIMONIALS -->
<?php 
  if ( have_rows('testimonial', 'option') ) : 
  $title = get_field('testimonials_section_title', 'option');?>
      <section class="home-testimonials">
        <div class="container">
        <?php if ( $title ) : ?>
          <h1 class="section-title"><?php echo $title ?></h1>
        <?php endif; ?>
          <div class="testimonials">

          <?php while ( have_rows('testimonial', 'option') ) : the_row();
          $image = get_sub_field('testimonial_image', 'option');
          $quote = get_sub_field('testimonial_quote', 'option');
          $author = get_sub_field('testimonial_author', 'option');
          $featured = get_sub_field('featured_on_front_page', 'option');
          $linkedin = get_sub_field('linkedin_url', 'option');
          ?>
            <?php if ( $featured ) : ?>

            <div class="testimonial">
              <div class="testimonial-img-container">
                <div class="testimonial-img">
                <?php if ($linkedin) { ?>
                  <a href="<?php echo $linkedin ?>"><img src="<?php echo $image ?>" alt="alice dubin testimonial from <?php echo $author ?>"></a>
                <?php } else { ?>
                  <img src="<?php echo $image ?>" alt="alice dubin testimonial from <?php echo $author ?>">
                <?php } ?>
                </div>
              </div>
              <blockquote class="blockquote">
                <p>"<?php echo $quote ?>"</p>
                <footer class="blockquote-footer">
                <?php echo $author ?>
                </footer>
              </blockquote>
            </div>
            <!-- testimonial -->

            <?php endif; ?>

          <?php endwhile; ?>  
  
          </div>
          <!-- testimonials -->

          <?php $testimonials_link_text = get_field('testimonials_page_link_text', 'option');
          $testimonials_url = get_field('testimonials_page_url', 'option');
          
          if ( $testimonials_link_text && $testimonials_url ) : ?>

          <a href="<?php echo $testimonials_url ?>" class="btn btn-outline-dark more-testimonials"
            ><?php echo $testimonials_link_text ?></a
          >

          <?php endif; ?>

        </div>
        <!-- container -->
      </section>
  <?php endif; ?>




<!-- CONTACT SECTION -->
<?php 
$contact_heading = get_field('contact_main_heading', 'option');
$contact_sub_heading = get_field('contact_sub_heading', 'option');
$form = get_field('form', 'option');
?>

    <section class="contact">
      <div class="container">
        <div class="contact-content">
          <h1 class="section-title"><?php echo $contact_heading ?></h1>
          <p>
          <?php echo $contact_sub_heading ?>
          </p>
          <?php echo $form ?>

          <!-- <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Name:</label>
              <input type="text" class="form-control" id="name" />
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email:</label>
              <input type="email" class="form-control" id="email" />
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message:</label>
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="6"
              ></textarea>
            </div>
            <button class="btn btn-outline-light">Send</button>
          </form> -->
        </div>
      </div>
      <!-- container -->
    </section>

    <?php get_footer(); ?>

    
