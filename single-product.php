<?php

get_header();

$background = get_field('background');
$backgroundDesktop = get_field('background_large');
$pkgFront = get_field('package_front');
$pkgBack = get_field('package_back');
$ingredients = get_field('ingredients');
$heatingInstructions = get_field('heating_instructions');
$heatingInstructionsAirFryer = get_field('heating_instructions_air_fryer');
$heatingInstructionsOven = get_field('heating_instructions_oven');
$heatingInstructionsDeepFryer = get_field('heating_instructions_deep_fryer');
$btnColor = get_field('opener_button_color');
$openerColor = get_field('opener_background_color');
$bottomImage = get_field('bottom_image');
$leftImage = get_field('left_image');
$rightImage = get_field('right_image');

$args = [
    'post_type'=>'product',
    'posts_per_page'=>-1,
    'orderby'=>'menu_order',
    'order'=>'ASC'
];
$query = new WP_Query($args);

?>

<div id="primary">

    <main id="main" class="site_main dark_bg single_product">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <header class="entry_header">
                <h1 class="entry_title"><?=get_field('button_title')?></h1>
            </header>
            <div class="entry_content">
                <section class="product_info standard_width_content side_padding">
                    <div class="package_images">
                        <ul class="slides">
                            <li id="<?=get_post_field('post_name')?>_pkg_front" class="active">
                                <img src="<?=$pkgFront?>" alt="Front packaging">
                            </li>
                            <li id="<?=get_post_field('post_name')?>_pkg_back">
                                <img src="<?=$pkgBack?>" alt="Back packaging">
                            </li>
                        </ul>
                        <ul class="slides_nav">
                            <li>
                                <button type="button" class="package_image_button active" data-target="<?=get_post_field('post_name')?>_pkg_front">Front</button>
                            </li>
                            <li>
                                <button type="button" class="package_image_button" data-target="<?=get_post_field('post_name')?>_pkg_back">Back</button>
                            </li>
                        </ul>
                    </div>
                    <div class="description">
                        <?php the_content(); ?>
                        <div class="ingredients">
                            <?=$ingredients?>
                        </div>
                    </div>
                </section>
                <section class="heating_instructions side_padding" style="background-color: <?=$btnColor?>">
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
                </section>
                <?php if($query->have_posts()): $this_id = get_the_ID(); $posts = 3; ?>
                    <section class="more_products standard_width_content side_padding">
                        <h2>More Products</h2>
                        <ul>
                            <?php while($query->have_posts() && ($posts > 0)): $query->the_post(); if(get_the_ID()!=$this_id): ?>
                                <li>
                                    <div class="thumbnail_container">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                    <div class="title_container">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="button_container">
                                        <a href="<?php the_permalink(); ?>" class="button" style="background-color: <?=get_field('opener_button_color')?>">More&nbsp;Info</a>
                                    </div>
                                </li>
                            <?php $posts--; endif; endwhile; wp_reset_postdata(); ?>
                        </ul>
                    </section>
                <?php endif; ?>
            </div>
        </article>

    </main>

</div>

<?php
get_footer();
