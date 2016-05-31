    </div> <!-- /container -->

<div class="footwrap">

    <div class="container-fluid">
      <div class="row top-foot">
        <div class="col-xs-12">
          <span class="copyright">
          <a href="" target="_blank"><img class="footlogo" src="<?php bloginfo( 'template_directory' ); ?>/img/bonzilogo-white.png"></a>
          
            <p>&copy; <?php bloginfo('name'); ?> 2001 -  <?php echo date('Y'); ?></p>
            <p>All Rights Reserved</p>
          </span>
          <span class="social">
            <a href="https://www.facebook.com/gobonzi" class="facebookBtn smGlobalBtn" href="social-media-profile-url" title="Bonzi Facebook" target="_blank"></a>
            <a href="https://twitter.com/gobonzi" class="twitterBtn smGlobalBtn" title="Bonzi Twitter" target="_blank"></a>
            <a href="https://www.youtube.com/user/bonzisportssoftware" class="youtubeBtn smGlobalBtn" title="Bonzi YouTube" target="_blank"></a>
            <a href="https://www.linkedin.com/company/bonzi-sports-software" class="linkedinBtn smGlobalBtn" title="Bonzi LinkedIn" target="_blank"></a>
          </span>
        </div>
      </div>
      <div class="row footcontact">
        <div class="col-sm-12 col-md-6">
          <h3>GET IN TOUCH</h3>
          <p>
            <i class="fa fa-map-marker fa-lg"></i><span>Bonzi</span></br>
            8100 SW Nyberg Rd Suite 450, Tualatin, OR 97062</br>
            <i class="fa fa-phone fa-lg"></i><span><a href="tel://800.216.3321">800.216.3321</a></span>Product Info</br>
            <span><a href="tel://866.726.4131">866.726.4131</a></span>Support</br>
            <i class="fa fa-envelope-o fa-lg"></i><a href="mailto:info@gobonzi.com">info@gobonzi.com</a></br>
            <a href="mailto:support@gobonzi.com">support@gobonzi.com</a></br>
            <span><a href="/careers/">Careers</a></span></p>
        </div>
        
        <div class="col-sm-12 col-md-6 foot-split">
          <h3>GET IN THE GAME</h3>
          <p>We make it easy for you with our Board Presentation Kit. Get in touch and we'll get you everything you need to be a Bonzi expert!</p>

          <button class="btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#RequestInfo">Request Product Info</button>
          <!-- Modal -->
          <div id="RequestInfo" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php echo do_shortcode('[wufoo username="bonzicentral" formhash="mmyem3h1n1iclt" autoresize="false" height="600" header="show" ssl="false"]'); ?>
                </div>
              </div>
            </div>
          </div> <!-- end modal -->
<!--           <a class="btn btn-info btn-lg" href="">Request Product Info</a> -->
       </div>
     </div>
  </div>
</div> <!-- /footwrap -->

    <?php wp_footer(); ?>
  </body>
</html>
