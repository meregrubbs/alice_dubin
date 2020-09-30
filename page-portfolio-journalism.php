<?php get_header(); ?>

<?php 
$title = get_field('journalism_title');
$sub_heading = get_field('journalism_sub_heading');
?>

<div class="container">
      <section class="journalism-portfolio">
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
        <!-- journalism portfolio header-->

        <!-- journalism nav -->
        <div class="journalism-nav">
          <div class="dark-pink-nav-background"></div>
          <div
            class="nav nav-pills mb-5"
            id="v-pills-tab"
            role="tablist"
            aria-orientation="vertical"
          >
            <a
              class="nav-link active"
              id="v-pills-all-tab"
              data-toggle="pill"
              href="#v-pills-all"
              role="tab"
              aria-controls="v-pills-all"
              aria-selected="true"
              >All Articles</a
            >
            <a
              class="nav-link"
              id="v-pills-travel-tab"
              data-toggle="pill"
              href="#v-pills-travel"
              role="tab"
              aria-controls="v-pills-travel"
              aria-selected="false"
              >Travel</a
            >
            <a
              class="nav-link"
              id="v-pills-rpf-tab"
              data-toggle="pill"
              href="#v-pills-rpf"
              role="tab"
              aria-controls="v-pills-rpf"
              aria-selected="false"
              >Relationships & Parenting</a
            >
            <a
              class="nav-link"
              id="v-pills-commerce-tab"
              data-toggle="pill"
              href="#v-pills-commerce"
              role="tab"
              aria-controls="v-pills-commerce"
              aria-selected="false"
              >Commerce</a
            >
            <a
              class="nav-link"
              id="v-pills-lifestyle-tab"
              data-toggle="pill"
              href="#v-pills-lifestyle"
              role="tab"
              aria-controls="v-pills-lifestyle"
              aria-selected="false"
              >Lifestyle</a
            >
            <a
              class="nav-link"
              id="v-pills-entertainment-tab"
              data-toggle="pill"
              href="#v-pills-entertainment"
              role="tab"
              aria-controls="v-pills-entertainment"
              aria-selected="false"
              >Entertainment</a
            >
            <a
              class="nav-link"
              id="v-pills-events-tab"
              data-toggle="pill"
              href="#v-pills-events"
              role="tab"
              aria-controls="v-pills-events"
              aria-selected="false"
              >Events</a
            >
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div
              class="tab-pane fade show active"
              id="v-pills-all"
              role="tabpanel"
              aria-labelledby="v-pills-all-tab"
            >
              
            
            
            <!-- All Articles -->
              <!-- Begin All: travel -->

              <?php if ( have_rows('travel') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Travel
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('travel') ) : the_row(); 
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
              <!-- End All: travel -->



              <!-- Begin All: relationships -->
              <?php if ( have_rows('relationships_and_parenting') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Relationships & Parenting
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('relationships_and_parenting') ) : the_row(); 
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
              <!-- End All: relationships -->



              <!-- Begin All: commerce -->
              <?php if ( have_rows('commerce') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Commerce
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('commerce') ) : the_row(); 
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
              <!-- End All: commerce -->



              <!-- Begin All: lifestyle -->
              <?php if ( have_rows('lifestyle') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Lifestyle
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('lifestyle') ) : the_row(); 
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
              <!-- End All: lifestyle -->




              <!-- Begin All: entertainment -->
              <?php if ( have_rows('entertainment') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Entertainment
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('entertainment') ) : the_row(); 
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
              <!-- End All: entertainment -->




              <!-- Begin All: events -->
              <?php if ( have_rows('events') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Events
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('events') ) : the_row(); 
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
              <!-- End All: events -->


              
            </div>
            <!-- End All Articles -->
            
            
            
            <div
              class="tab-pane fade"
              id="v-pills-travel"
              role="tabpanel"
              aria-labelledby="v-pills-travel-tab"
            >
              <!-- Begin Travel -->
              <?php if ( have_rows('travel') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Travel
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('travel') ) : the_row(); 
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
              <!-- End travel -->
            </div>





            <div
              class="tab-pane fade"
              id="v-pills-rpf"
              role="tabpanel"
              aria-labelledby="v-pills-rpf-tab"
            >
              <!-- Relationships, Parenting & Family -->
              <?php if ( have_rows('relationships_and_parenting') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Relationships & Parenting
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('relationships_and_parenting') ) : the_row(); 
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
              <!-- End Relationships -->
            </div>




            <div
              class="tab-pane fade"
              id="v-pills-commerce"
              role="tabpanel"
              aria-labelledby="v-pills-commerce-tab"
            >
              <!-- Commerce -->
              <?php if ( have_rows('commerce') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Commerce
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('commerce') ) : the_row(); 
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
                        >
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
              <!-- End Commerce -->
            </div>





            <div
              class="tab-pane fade"
              id="v-pills-lifestyle"
              role="tabpanel"
              aria-labelledby="v-pills-lifestyle-tab"
            >
              <!-- Lifestyle -->
              <?php if ( have_rows('lifestyle') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Lifestyle
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('lifestyle') ) : the_row(); 
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
              <!-- End Lifestyle -->
            </div>





            <div
              class="tab-pane fade"
              id="v-pills-entertainment"
              role="tabpanel"
              aria-labelledby="v-pills-entertainment-tab"
            >
              <!-- Entertainment -->
              <?php if ( have_rows('entertainment') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Entertainment
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('entertainment') ) : the_row(); 
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
              <!-- End Entertainment -->
            </div>





            <div
              class="tab-pane fade"
              id="v-pills-events"
              role="tabpanel"
              aria-labelledby="v-pills-events-tab"
            >
              <!-- Events & Meetings -->
              <?php if ( have_rows('events') ) : ?>
              <div class="category-group">
                <div class="category-border">
                  <h2 class="category-title">
                    Events
                  </h2>
                </div>
                <div class="category-grid">
                  <div class="row">

                  <?php while ( have_rows('events') ) : the_row(); 
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
              <!-- End Events -->
            </div>





          </div>
        </div>
        <!-- journalism nav -->
      </section>
    </div>
    <!-- container-->

<?php get_footer(); ?>