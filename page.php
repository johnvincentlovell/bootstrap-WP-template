<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="container-fluid page-content no-fw">   
    <div class="row">
      <div class="col-sm-12">

              <h2 class="page-title"><?php the_title(); ?></h2>

              <?php the_content(); ?>

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

<?php get_footer(); ?>