<?php get_header(); ?>

<div class="container portfolio-page">

<?php 
$title = get_field('portfolio_page_title');
$sub_header = get_field('portfolio_sub_header');

if ($title) : ?>
<h1 class="section-title"><?php echo $title ?></h1>
<?php endif; ?>

<?php if ($sub_header) : ?>
<p class="mb-5"><?php echo $sub_header ?></p>
<?php endif; ?>



<?php 
$journalism_photo = get_field('journalism_photo', 'option');
$journalism_title = get_field('journalism_title', 'option');
$journalism_link = get_field('link_to_journalism_page', 'option');
$content_marketing_photo = get_field('content_marketing_photo', 'option');
$content_marketing_title = get_field('content_marketing_title', 'option');
$content_marketing_link = get_field('link_to_content_marketing_page', 'option');

if ( $journalism_photo && $journalism_title && $content_marketing_photo && $content_marketing_title ) :
?>
      <section class="portfolio-tiles">
        <a style="background-image: url('<?php echo $journalism_photo ?>');" class="portfolio-tile" href="<?php echo $journalism_link ?>"><span><?php echo $journalism_title ?></span></a>
        <a style="background-image: url('<?php echo $content_marketing_photo ?>');" class="portfolio-tile" href="<?php echo $content_marketing_link ?>"
          ><span><?php echo $content_marketing_title ?></span>
        </a>
      </section>

<?php endif; ?>
</div>
    <!-- container -->

<?php get_footer(); ?>