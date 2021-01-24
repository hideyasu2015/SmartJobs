<!-- FOOTER -->
    <footer id="footer">
        <div class="container">
		<hr>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <h5 class="line3 center standart-h4title">
                        <span><i class="fas fa-bars"></i> <?php echo _text('HEADING_NAVIGATION'); ?></span>
                    </h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#top"><?php echo _text('MENU_HOME'); ?></a></li>
                        <li><a href="<?php echo get_site_url(array(), 'search'); ?>"><?php echo _text('MENU_SEARCH'); ?></a></li>
                        <li><a href="<?php echo get_site_url(array(), 'browse'); ?>"><?php echo _text('MENU_CATEGORIES'); ?></a></li>
                        <li><a href="<?php echo get_site_url(array(), 'browse'); ?>"><?php echo _text('MENU_LOCATIONS'); ?></a></li>
                        <li><a href="#about" data-toggle="modal" data-target="#about"><?php echo _text('MENU_ABOUT_US'); ?></a></li>
                        <li><a href="#privacy" data-toggle="modal" data-target="#privacy" ><?php echo _text('MENU_PRIVACY'); ?></a></li>
                        <li><a href="#termsofuse" data-toggle="modal" data-target="#termsofuse" ><?php echo _text('MENU_TERM_OF_USE'); ?></a></li>
                    </ul>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <h5 class="line3 center standart-h4title">
                        <span><i class="fas fa-handshake"></i> <?php echo _text('HEADING_JOBSITES_ADDED'); ?></span>
                    </h5>
                    <ul class="list-unstyled footer-links">
                        <?php
                        foreach ($feedlist as $feed){
                            echo '<li><a href="#'.$feed['title'].'" data-toggle="jump2feed">'.$feed['title'].'</a></li>';
                        }
                        ?>
                    </ul>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <h5 class="line3 center standart-h4title">
                        <span><i class="fas fa-share"></i> <?php echo _text('HEADING_STAY_IN_TOUCH'); ?></span>
                    </h5>
                    <p><?php echo empty($q) ? _text('TEXT_SOCIAL', ' ') : _text('TEXT_SOCIAL', $q); ?></p>


					<!-- Go to www.addthis.com/dashboard to customize your tools -->
					<div class="addthis_inline_share_toolbox"></div>

                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <h5 class="line3 center standart-h4title">
                        <span><i class="fas fa-building"></i> <?php echo _text('HEADING_OUR_OFFICE'); ?></span>
                    </h5>
                    <address>
                        <strong><?php echo $sitename; ?> </strong><br> <i class="fas fa-map-marker-alt"></i>
                        <?php echo $contact_address_street; ?>
                        <br>
                        <?php echo $contact_address_city; ?>
                        <br> <i class="fa fa-phone-sign"></i>
                        <?php echo $contact_tel; ?>
    
                    </address>
                </div>
    
            </div>
        </div>
    
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <p> <i class="far fa-copyright"></i> 2014 -2020 <?php echo _text('POWERED_BY'); ?> <a class="newsearch" href="<?php echo $siteurl;?>"><?php echo $contact_company_name;?></a> - <i class="fas fa-code"></i> Developed by <a href="https://www.mediageni.com/software" target="_blank" rel="nofollow">MediaGeni Software</a></p>
                </div>
            </div>
        </div>
    </footer>
<!-- / FOOTER -->