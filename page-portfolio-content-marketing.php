<?php get_header(); ?>

<?php 
$title = get_field('content_marketing_title');
$sub_heading = get_field('content_marketing_sub_heading');
?>

<div class="container">
      <section class="journalism-portfolio content-marketing-portfolio">
        <div class="journalism-portfolio-header">
          <div class="pink-header-background"></div>
          <?php if ($title) : ?>
          <h1 class="section-title"><?php echo $title ?></h1>
          <?php endif; ?>

          <?php if ($sub_heading) : ?>
          <p>
            <?php echo $sub_heading ?>
          </p>
          <?php endif; ?>
        </div>
        <!-- portfolio header-->


        <?php if ( have_rows('content_marketing_articles') ) : ?>
              <div class="category-group">
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('content_marketing_articles') ) : the_row(); 
                  $logo = get_sub_field('client_logo');
                  $image = get_sub_field('article_image');
                  $title = get_sub_field('article_title');
                  $link = get_sub_field('article_link');
                  $pdf = get_sub_field('pdf');
                  ?>
                    <div class=" col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                        <?php if ($link) { ?>
                        <a class="card-link d-flex align-items-stretch" href="<?php echo $link ?>" target="_blank">
                        <?php } else { ?>
                        <a class="card-link d-flex align-items-stretch" href="<?php echo $pdf ?>" target="_blank"> 
                        <?php } ?>
                        
                      <div class="card">
                        <div class="card-img-top"><img
                          src="<?php echo $logo ?>"
                          alt=""
                        /></div>
                        <div class="card-img" style="background-image: url('<?php echo $image ?>')"></div>
                        <div class="card-body">
                          <h3 class="card-title">
                            <?php echo $title ?>
                          </h3>
                        </div>
                        <!-- Card Body -->
                      </div>
                      <!-- Card -->
                      </a>
                    </div>
                    <!-- Column -->
                  <?php endwhile; ?>

                  </div>
                  <!-- Row -->
                </div>
                <!-- Category Grid -->
              </div>
              <!-- Category Group -->
              <?php endif; ?>
              <!-- End Content Marketing -->

<?php get_footer(); ?>