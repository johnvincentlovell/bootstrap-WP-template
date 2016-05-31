<?php
/*
  Template Name: About Us - New Page
*/

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<?php endif; ?>

      <div class="jumbotron landing-page aboutus-page" style="background-image: url('<?php echo $image[0]; ?>')">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-6">
              <h2 class="page-title"><?php the_title(); ?></h2>
              <h1 class="page-subtitle"><?php the_field('sub_headline'); ?></h1>
              <?php the_field('title_text'); ?>
            </div>                
          </div>
        </div>
      </div> <!-- end jumbotron -->

  <div class="container-fluid page-content about-content">   
    <div class="row about-top-row">
      <div class="col-lg-12">
              <!-- displays uploaded about us image -->
              <?php 
              $image = get_field('about_us_intro_photo');
              if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>

        <div class="about-intro-text">
          <?php the_field('about_us_intro'); ?>
        </div>
      </div>
    </div>
    <div class="row about-btm-row">
      <div class="col-sm-12 col-md-8">

        <?php the_content(); ?>

        <?php endwhile; else: ?>
          
            <h2>Oh no!</h2>

          <p>No content is appearing for this page!</p>

        <?php endif; ?> 
    </div>

      <?php get_sidebar(); ?>
    


    </div> <!-- end row from page -->
    </div>

       

<div class="container">

<?php get_footer(); ?>