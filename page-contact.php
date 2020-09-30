<?php get_header(); ?>

<!-- CONTACT SECTION -->
<?php 
$contact_heading = get_field('contact_main_heading', 'option');
$contact_sub_heading = get_field('contact_sub_heading', 'option');
$form = get_field('form', 'option');
?>

    <section class="contact contact-page">
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