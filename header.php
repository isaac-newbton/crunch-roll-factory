<!DOCTYPE html>
<html <?php language_attributes('html'); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,600;0,900;1,400;1,600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

    <?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

    <div id="page" class="site">

        <button type="button" id="site_nav_button" class="active" aria-label="Open Navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div id="site_top_wrapper" class="noprint">

            <div id="site_top">

                <div id="nav_logo_container">
                    <?php the_custom_logo(); ?>
                </div>

                <nav id="site_nav_wrapper">

                    <div id="site_primary_nav_wrapper">

                        <?php wp_nav_menu([
                            'theme_location'=>'main-nav',
                            'menu_id'=>'site_main_nav',
                            'container_id'=>'site_main_nav_container'
                        ]); ?>

                        <?php if(get_search_query()): ?>
                            <div id="site_search_container">
                                <form action="/" class="search" role="search">
                                    <label for="site_search_input" id="site_search_input_label" class="sr_only">Search</label>
                                    <input type="text" name="s" id="site_search_input" placeholder="search..." value="<?php the_search_query(); ?>" aria-labelledby="search_input_label">
                                    <button type="submit" aria-label="Submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        <?php endif; ?>

                        <div id="site_social_container">
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

                </nav>

            </div>

        </div>

        <div id="content" class="site_content">