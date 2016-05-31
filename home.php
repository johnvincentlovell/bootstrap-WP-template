<?php get_header(); ?>

  <div class="container-fluid no-fw">   

        <div class="blog-header">
          <h2>Blog</h2>
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

        <?php

          $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

          $args = array(
            'post_type'     => 'post',
            'category_name' => 'news, education, success-stories',
            'paged' => $paged,
            'page' => $paged
          );

          $the_query = new WP_Query( $args );
        ?>

            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
                  <p><em>
                   <!--  <?php echo the_time('F jS, Y');?>
                    By <?php the_author(); ?> in  -->
                    <?php $category = get_the_category(); echo $category[0]->cat_name; ?>
                  </em></p>                          

                  <h1><?php the_title(); ?></h1>
                  <p><?php echo excerpt(40); ?></p>
                </div>
            </article>
          </div>
          <div class="clearfix clear-blog"></div>

        <?php endwhile; else: ?>
    
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?> 
      </div> <!-- /row -->
    </div> <!--  /container blog-body -->


    <!-- pagination here -->
    <?php
      if (function_exists(custom_pagination)) {
        custom_pagination($the_query->max_num_pages,"",$paged);
      }
    ?>

    <?php wp_reset_postdata(); ?>



<?php get_footer(); ?>