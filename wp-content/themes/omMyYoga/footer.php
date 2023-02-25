<?php wp_footer(); ?>
<style>
  .gym_footer_wrapper 
  {
    padding: 50px 0 30px;
  }
  .gym_copyright_wrapper a:hover {
      color:#000;
  }
    </style>
    <?php 
        include get_template_directory()."/src/SocialMediaConstants.php";
    ?>
    <footer>
        <div class="gym_footer_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb_30">
                        <div class="gym_widgets gym_footer_about">
                            <img class="footer_logo" src="fronts/assets/images/logo/logo01&#32;(2).png" alt="footerlogo" >
                            <p>A Holistic Living School established by Master Shivachittam, who has intense knowledge in yoga, meditation, healing, naturopathy, and spiritual-psycho counselling, gives Anandabodh the edge of a holistic spiritual and well-being school.</p>
                            <div class="gym_address_wrap">
                                <ul>
								    <li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $endereco; ?></li>
									<li><i class="fa fa-phone"></i> <a href="tel:<?php echo $phone; ?>">&nbsp; <?php echo $phone; ?></a></li>
									<li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $email; ?>">&nbsp;<?php echo $email; ?></a></li>
								
								</ul>
								
								<div class="cs_footer_icon">
                              <ul>
                              <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
								    <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
									<li><a href="<?php echo $youtub; ?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                              </ul>
                           </div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-lg-5 col-md-12 col-sm-12 col-12 mb_30">
                        <div class="gym_widgets gym_footer_menu">
                            <h4 class="gym_sub_heading relative">Important Links</h4>
                            <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb_30">
                            <ul>
								    <li><a href="associates">Associates</a></li>
								    <li><a href="team-26-teachers">Team & Teachers</a></li>
									<li><a href="news-events">News & Events</a></li>
									<li><a href="https://www.youtube.com/playlist?list=PLNeLI36NpQdMmD161p_olTyN5gACmO7KK" target="_blank">Media Coverage</a></li>
									<li><a href="media">Print Coverage</a></li>
									<li><a href="gallery">Gallery</a></li>
									<li><a href="career">Career</a></li>
									<li><a href="shop/product-category/books" target="_blank">Ebooks</a></li>
									<li><a href="https://school.anandabodh.com/" target="_blank">Digital School</a></li>
								</ul>
                        </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb_30">
                             <ul class="foot">
									<li><a href="testimonials">Testimonials</a></li>
									<li><a href="case-study">Case Study</a></li>
									<li><a href="clients">Our Clients</a></li>
									<li><a href="personalized-nutrition">Personalized Diet and Nutrition</a></li>
									<li><a href="term-and-condition">Terms & Conditions</a></li>
									<li><a href="privacy-policy">Privacy Policy</a></li>
									<li><a href="return-policy">Refund & Cancellation Policy</a></li>
									<li><a href="sitemap">Sitemap</a></li>
								</ul>
                    </div>
                    </div>
                    </div>
                  </div>  
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb_30">
                        <div class="gym_widgets gym_footer_twitter">
                            <h4 class="gym_sub_heading relative">Follow Us</h4>
                           <script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
					
                <div class="fb-page" data-href="<?php echo $facebook; ?>" data-tabs="timeline" data-width="300" data-height="290" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Anandabodh-A-School-of-Holistic-Living-104278155228604/?ref=br_tf" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Anandabodh-A-School-of-Holistic-Living-104278155228604/?ref=br_tf"></a></blockquote></div>
               		
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="gym_copyright_wrapper">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <center> <span>Copyrights © 2022 Anandabodh, All Rights Reserved. <br/> Developed & Powered  by <a target="_blank" href="https://isolstechnologies.com/" data-toggle="tooltip" title="Call On : 9555411411">Innovative Solution Technologies </a>|</span><a target="_blank" href="https://www.isolsgroup.com" data-toggle="tooltip" title="Call On : 9555411411"> ISOLS Group</a></center>
                        </div>
			
            </div>
        </div>
    </footer>
    
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>    <!-- GO To Top -->
    <span class="fa fa-angle-double-up" id="scroll"></span>
    <!-- Script Start -->
    <script src="<?php bloginfo( 'template_url'); ?>/fronts/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo( 'template_url'); ?>/fronts/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo( 'template_url'); ?>/fronts/assets/js/SmoothScroll.min.js"></script>
    <script src="<?php bloginfo( 'template_url'); ?>/fronts/assets/js/nice-select.min.js"></script>
    <script src="<?php bloginfo( 'template_url'); ?>/fronts/assets/js/swiper.min.js"></script>
    <script src="<?php bloginfo( 'template_url'); ?>/fronts/assets/js/wow.min.js"></script>
    <script src="<?php bloginfo( 'template_url'); ?>/fronts/assets/js/tilt.js"></script>
    <script src="<?php bloginfo( 'template_url'); ?>/fronts/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php bloginfo( 'template_url'); ?>/fronts/assets/js/custom.js"></script>
</body>
</html>