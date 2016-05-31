<?php get_header(); ?>


  <div class="container-fluid no-fw">   

        <div class="blog-header">
          <h2><a href="/blog/">Blog</a></h2>
          <!-- list categories -->
          <?php $args = array(
              'show_option_all'    => '',
              'orderby'            => 'name',
              'order'              => 'ASC',
              'style'              => 'list',
              'show_count'         => 0,
              'hide_empty'         => 1,
              'use_desc_for_title' => 1,
              'child_of'           => 19,
              'feed'               => '',
              'feed_type'          => '',
              'feed_image'         => '',
              'exclude'            => '',
              'exclude_tree'       => '',
              'include'            => '',
              'hierarchical'       => 1,
              'title_li'           => __( '' ),
              'show_option_none'   => __( '' ),
              'number'             => null,
              'echo'               => 1,
              'depth'              => 0,
              'current_category'   => 0,
              'pad_counts'         => 0,
              'taxonomy'           => 'category',
              'walker'             => null
                );
                wp_list_categories( $args ); 
            ?>        


        </div>
          </div>

  <div class="container-fluid blog-body">
    <div class="row">
      <h1 class="cat-header"><?php single_cat_title( '', true ); ?>&nbsp;Articles</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <?php endif; ?> 

        <div class="col-lg-3 col-sm-6 col-xs-12">
          <article class="blog-post">
            <div class="readmore">Read More</div>
            <a href="<?php the_permalink(); ?>">
              <div class="blog-thumb" style="background-image: url('<?php echo $image[0]; ?>')"></div>
            </a>  
              <div class="post-container">
<!--                 <p><em>
                  <?php echo the_time('F jS, Y');?>
                  By <?php the_author(); ?>
                </em></p>                           -->

                <h1><?php the_title(); ?></h1>
                <p><?php echo excerpt(40); ?></p>
              </div>
          </article>
        </div>
        <div class="clearfix clear-blog"></div>

          <?php endwhile; else: ?>

    <div class="container-fluid not-found-container">
      <div class="row">
        <div class="col-md-12 not-found">

            <div class="page-header">
              <h1>Oh no!</h1>
            </div>

            <p>You found a broken page!</br></br>

            Sorry about that. We've recently updated our website and there are some older links out there that require our attention. We're working on it!</br></br>

            Feel free to navigate using the links at the top of the page. </br></br>

            <em>If you're on a mobile device, find them by clicking on the drop-down button.</em></br></br>

            Still having trouble? Contact us at <a href="mailto:info@gobonzi.com">info@gobonzi.com</a> or call <a href="tel://866.726.4131">866.726.4131</a>.</br></br>

            Thank you!

            <hr>

            <strong>Commonly mis-directed pages:</strong>
            <ul>
              <li><a href="/privacy/">Privacy</a></br></li>
              <li><a href="/stunning-websites-for-your-organization/">Website Gallery</a></li>
              <li><a href="/pricing/">Pricing</a></li>
              <li><a href="/support/">Support</a></li>
            </ul>

        </div>
      </div>
    </div>
          <?php endif; ?>


      </div>
    </div>
    <?php
      if (function_exists(custom_pagination)) {
        custom_pagination($the_query->max_num_pages,"",$paged);
      }
    ?>

    <?php wp_reset_postdata(); ?>

      <?php get_footer(); ?>