</div> <!--#content-->

<footer id="site_footer" class="noprint">

    <div id="footer_content_wrapper">

        <div id="footer_logo_container">
            <?php if($footerLogoUrl = get_option('aca_footer_logo')): ?>
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?=esc_attr($footerLogoUrl)?>" alt="<?php bloginfo('name'); ?>">
                </a>
            <?php endif; ?>
        </div>

        <div id="footer_links_container">
        
            <?php wp_nav_menu([
                'theme_location'=>'footer-nav',
                'menu_id'=>'site_footer_nav',
                'container_id'=>'site_footer_nav_container'
            ]); ?>

            <div id="footer_social_container">
                <?php if($fbUrl = get_option('aca_facebook_profile_url')): ?>
                    <a href="<?=esc_attr($fbUrl)?>" title="Facebook">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                <?php endif; ?>
                <?php if($inUrl = get_option('aca_instagram_profile_url')): ?>
                    <a href="<?=esc_attr($inUrl)?>" title="Instagram">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                <?php endif; ?>
                <?php if($twUrl = get_option('aca_twitter_profile_url')): ?>
                    <a href="<?=esc_attr($twUrl)?>" title="Twitter">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                <?php endif; ?>
                <?php if($liUrl = get_option('aca_linkedin_profile_url')): ?>
                    <a href="<?=esc_attr($liUrl)?>" title="Linkedin">
                        <i class="fab fa-linkedin"></i>
                    </a>
                <?php endif; ?>
            </div>
        
        </div>

        <div id="footer_text_container">
        
            <div id="footer_copyright_container">
                &copy;&nbsp;<?=date('Y')?><?php if($copyrightText = get_option('aca_copyright_text')) {echo " $copyrightText";} ?>
            </div>

            <div id="footer_reserved_container">
                All Rights Reserved
            </div>
        
        </div>

    </div>

</footer> <!--#site_footer-->

</div> <!--#page-->
<?php wp_footer(); ?>
</body></html>