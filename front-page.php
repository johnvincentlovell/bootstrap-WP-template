<?php get_header(); ?>

  <section id="topintro">
      
      <div class="jefftext">
          <h3>Jeff Enquist 
            <br>Client since 2004</h3>
      </div>

      <?php echo do_shortcode('[image-carousel id="1520"]'); ?>
  <!-- Managed with the CPT Bootstrap Carousel Wordpress plugin -->


      <div class="container-fluid slogan">
        <div class="row">
          <div class="col-md-12">
            <h2>LOVE THE GAME</h2>
            <h1>RUN A GREAT PROGRAM</h1>
            <h3>Bonzi is online sports management and registration made easy</h3>
          </div>
        </div>
        <div class="row video">
        <!-- Bonzi Video -->
          <div class="col-md-12">
            <a href="https://www.youtube.com/embed/0Um3hgr1tVU?rel=0&autoplay=1&iframe=true&width=100%&height=100%" class="btn btn-info btn-lg" role="button" rel="wp-video-lightbox">
            <h3>Watch our video</h3> <i class="fa fa-play-circle fa-lg"></i></a>
          </div>
        </div>
      </div>

      <div class="down-arrow">
       <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
      </div>

  </section>

<section id="features">

  <div class="container-fluid">
    <div class="row">
        <div id="mission" class="col-sm-12 text-center mission">
          <span><a href="#features" rel="m_PageScroll2id"><i class="glyphicon glyphicon-menu-down learnmore animated infinite flash"></i></a></span>
          <div data-sr='ease-in' class="who">
            <?php if ( dynamic_sidebar( 'mission-statement' ) ); ?>
          </div>
        </div>
      </div>
  </div>

            <?php $odd_or_even = 'odd'; ?>
            <?php query_posts('category_name=homepage'.'&orderby=date&order=desc');?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php global $post; ?>
        <?php
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
        ?>

      <div class="jumbotron <?php echo $odd_or_even; ?>" style="background: url(<?php echo $src[0]; ?> );">
        <?php $odd_or_even = ('odd'==$odd_or_even) ? 'even' : 'odd'; ?>
        <div class="container">
          <div class="row">

            <div class="col-xs-12 frontpage-row" >

              <?php the_field('privacy_front_icons'); ?>
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>

            </div>
    

          </div>
        </div>
      </div> <!-- end jumbotron -->
        <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
</section>

<!-- End Features Section -->

<section id="partners">
  <div class="container-fluid text-center">
  <?php if ( dynamic_sidebar( 'partners' ) ); ?>

  </div>
</section>

<!-- End Partners Section -->




  <section id="products">


    <div class="container-fluid">

      <div class="row">

        <div class="col-sm-12 products-intro ">
          <h2>NOW Y0U KNOW BONZI. WHO ARE YOU?</h2>
          <h1>Explore Bonzi products for your organization or team</h1>
        </div>


        <div class="col-xs-6 col-sm-6 col-lg-2 products ">
          <a href="/products/bonzi-team/">
          <h2>TEAMS</h2>  
          <div data-sr='scale up 60%' class="team product-thumb" style="background-image:url(<?php bloginfo('template_directory');?>/img/product-photos/product-team.jpg); "></div> 
          </a>
        </div>

        <div class="col-xs-6 col-sm-6 col-lg-2 products">
          <a href="/products/bonzi-club/">
          <h2>CLUBS</h2>
          <div data-sr='scale up 60%' class="club product-thumb" style="background-image:url(<?php bloginfo('template_directory');?>/img/product-photos/product-club.jpg);"></div>
          </a>
        </div>

        <div class="col-xs-6 col-sm-6 col-lg-2 products">
          <a href="/products/bonzi-league/">
          <h2>LEAGUES</h2>
          <div data-sr='scale up 60%' class="league product-thumb" style="background-image:url(<?php bloginfo('template_directory');?>/img/product-photos/product-league.jpg);"></div> 
          </a>
        </div>

        <div class="col-xs-6 col-sm-6 col-lg-2 products">
          <a href="/products/bonzi-tournaments/">
          <h2>TOURNAMENTS</h2>
          <div data-sr='scale up 60%' class="tournament product-thumb" style="background-image:url(<?php bloginfo('template_directory');?>/img/product-photos/product-tournament.jpg);"></div> 
          </a>
        </div>

        <div class="col-xs-6 col-sm-6 col-lg-2 products">
          <a href="/products/gameofficials/">
          <h2>REFEREES</h2>
          <div data-sr='scale up 60%' class="referee product-thumb" style="background-image:url(<?php bloginfo('template_directory');?>/img/product-photos/product-referee.jpg);"></div>
          </a>
        </div>

        <div class="col-xs-6 col-sm-6 col-lg-2 products">
          <a href="/products/bonzi-association/">
          <h2>ASSOCIATIONS</h2>
          <div data-sr='scale up 60%' class="association product-thumb" style="background-image:url(<?php bloginfo('template_directory');?>/img/product-photos/product-association.jpg);"></div> 
          </a>
        </div>

      </div> <!-- end row -->
    </div> <!-- end container -->


    <div class="jumbotron connected">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-5 vcenter">
            <img data-sr='wait 0.6s roll 360deg' src="<?php bloginfo('template_directory');?>/img/Bonzi-Connected.png">
          </div><!-- this comment between the two row vcenter divs fixes a bootstrap makrup spacing issue. leave as it and do not create extra space in the markup
      --><div class="col-xs-12 col-md-7 vcenter">
          <?php if ( dynamic_sidebar( 'connected-text' ) ); ?>
          </div>
        </div>
      </div>
    </div>
   </section>  <!-- end Products -->

<!-- End Products Section -->


<section id="webdesign"> 
  <div class="container-fluid webintro">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-sm-offset-2">
        <h2>Stunning Web Design</h2>
        <h3>Imagine a website that is unique, tailored to your organization, and easy to use. Bonzi designs sites that fit your needs and set you up for success. Check out just a small sample of sites we've designed for leagues and clubs across the country.</h3>
      </div>
      <div class="col-xs-12 col-sm-2 vertical-align">
        <a class="btn btn-lg btn-primary" href="/stunning-websites-for-your-organization/" role="button">Web design galleries</a> 
      </div>
    </div>
  </div>
  <img class="webdesign-screens" src="<?php bloginfo('template_directory');?>/img/webdesign/webdesign-screens.jpg" />

</section>

<!-- End Web Design Section -->

<section id="support">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-6 support-text">
        <h3>WE'VE GOT YOUR BACK</h3>
        <p>At Bonzi, we've built a culture that puts customers first. Whether you have a question about how we can help your league, or a technical support need, the Bonzi all-stars are ready and waiting!</p>

          <p class="text-center"><button class="btn btn-info btn-lg contact-support text-center" type="button" data-toggle="modal" data-target="#ContactSupport">Contact Support</button></p>
          <!-- Modal -->
          <div id="ContactSupport" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body"><button class="close" type="button" data-dismiss="modal">×</button>
                  <?php echo do_shortcode('[wufoo username="bonzicentral" formhash="sh1m6y312vhnf8" height="600" autoresize="false" header="show" ssl="false"]'); ?>
                </div>
              </div>
            </div>
          </div> <!-- end modal -->

      </div>
      <div class="col-xs-12 col-md-6 janine">
        <p><small>Janine Leeper<br>Customer Success Manager</small></p>
        <img src="<?php bloginfo('template_directory');?>/img/janine.png">
      </div>
    </div>
  </div>
</section>

<!-- End Support Section -->

<section id="aboutus" class="aboutus">
  <div class="container-fluid">
  <?php if ( dynamic_sidebar( 'aboutus-text' ) ); ?>

  </div>
</section>

<!-- End About Us Section -->



    <div class="container">

<?php get_footer(); ?>