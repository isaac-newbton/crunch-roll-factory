<?php

get_header();

$sliders = get_field('sliders');

$args = [
    'post_type'=>'product',
    'posts_per_page'=>-1,
    'orderby'=>'menu_order',
    'order'=>'ASC'
];
$query = new WP_Query($args);
?>

<main id="site_content" role="main" class="site_main dark_bg full_width">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
        
        <?php if($sliders && have_rows('sliders')): ?>

            <section id="home_slider">
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while(have_rows('sliders')): the_row(); ?>
                                <li class="splide__slide"<?=($vid = get_sub_field('video')) ? ' data-splide-html-video="' . $vid . '"' : ''?> >
                                    <?php if($img = get_sub_field('image')): ?>
                                        <img src="<?=$img?>" alt="">
                                    <?php endif; ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </section>

        <?php endif; ?>

        <?php if($query->have_posts()): ?>

            <section id="home_products">
                <div>
                    <header class="side_padding">
                        <img src="<?=get_field('products_banner')?>" alt="">
                        <?=get_field('products_text')?>
                    </header>
                    <ul class="products">

                        <?php while($query->have_posts()): $query->the_post(); ?>

                            <li class="homepage_product">
                                <div class="thumbnail_container">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                                <div class="title_container">
                                    <?=str_replace(' Crunch Rolls', '<br/>Crunch Rolls', get_the_title())?>
                                </div>
                                <div class="button_container">
                                    <a href="/products/#<?=get_post_field('post_name')?>" class="button" style="background-color: <?=get_field('opener_button_color')?>">More&nbsp;Info</a>
                                </div>
                            </li>

                        <?php endwhile; wp_reset_postdata(); ?>

                    </ul>
                    <div class="heating_instructions_container">
                        <button type="button" class="opener" data-target="heating_instructions">Heating Instructions</button>
                        <div id="heating_instructions" class="opener_target heating_instructions">
                            <header>
                                <img src="<?=get_template_directory_uri()?>/assets/img/heating-instructions.png" alt="Heating Instructions">
                                <?=get_field('heating_instructions')?>
                            </header>
                            <ul class="heating_instructions_sections">
                                <li>
                                    <img src="<?=get_template_directory_uri()?>/assets/img/inst-icon-air-fryer.png" alt="Air Fryer">
                                    <?=get_field('heating_instructions_air_fryer')?>
                                </li>
                                <li>
                                    <img src="<?=get_template_directory_uri()?>/assets/img/inst-icon-oven.png" alt="Oven">
                                    <?=get_field('heating_instructions_oven')?>
                                </li>
                                <li>
                                    <img src="<?=get_template_directory_uri()?>/assets/img/inst-icon-deep-fryer.png" alt="Deep Fryer">
                                    <?=get_field('heating_instructions_deep_fryer')?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        <?php endif; ?>

        <!-- <section id="home_social" style="background-image: url(<?=get_field('social_feed_background')?>);">
            <div class="standard_width_content side_padding">
                <ul class="social_feed thirds">
                    <li>
                        <div></div>
                    </li>
                    <li>
                        <div></div>
                    </li>
                    <li>
                        <div></div>
                    </li>
                </ul>
                <ul class="social_feed fourths">
                    <li>
                        <div></div>
                    </li>
                    <li>
                        <div></div>
                    </li>
                    <li>
                        <div></div>
                    </li>
                    <li>
                        <div></div>
                    </li>
                </ul>
            </div>
        </section> -->

    </article>

</main>

<?php
get_footer();