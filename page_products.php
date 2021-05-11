<?php
/**
 * Template Name: Products
 */

get_header();

$args = [
    'post_type'=>'product',
    'posts_per_page'=>-1,
    'orderby'=>'menu_order',
    'order'=>'ASC'
];
$query = new WP_Query($args);

?>

<div id="primary">

    <main id="main" class="site_main dark_bg products">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <header class="entry_header">
                <?php the_title('<h1 class="entry_title">', '</h1>'); ?>
                <?php the_content(); ?>
                <?php if($query->have_posts()): ?>

                    <nav class="product_links_nav">
                        <ul>

                            <?php while($query->have_posts()): $query->the_post(); ?>

                                <li>
                                    <a href="#<?=get_post_field('post_name')?>" class="button" style="background-color: <?=get_field('opener_button_color')?>"><?=get_field('button_title')?></a>
                                </li>

                            <?php endwhile; ?>

                        </ul>
                    </nav>

                <?php $query = new WP_Query($args); endif; ?>
            </header>
            <div class="entry_content">
                <section class="products_container">
                    
                    <?php if($query->have_posts()): ?>

                        <ul class="products">

                            <?php 
                            
                            while($query->have_posts()):
                                $query->the_post();
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

                            ?>

                                <li class="product" id="<?=get_post_field('post_name')?>" style="background-color: <?=$btnColor?>; background-image: url(<?=$background?>);">
                                    <div class="primary_content_container">
                                        <div class="content_text">
                                            <h2><?php the_title(); ?></h2>
                                            <div class="content"><?php the_content(); ?></div>
                                        </div>
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
                                        <div class="openers_container">
                                            <ul class="openers">
                                                <li>
                                                    <button type="button" class="opener" data-target="<?=get_post_field('post_name')?>_ingredients" style="color: <?=$btnColor?>;">Ingredients</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="opener" data-target="<?=get_post_field('post_name')?>_heating_instructions" style="color: <?=$btnColor?>;">Heating Instructions</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="background_images_container">
                                        <?php if($leftImage): ?>
                                            <img src="<?=$leftImage?>" alt="" class="left">
                                        <?php endif; ?>
                                        <?php if($rightImage): ?>
                                            <img src="<?=$rightImage?>" alt="" class="right">
                                        <?php endif; ?>
                                        <?php if($bottomImage): ?>
                                            <img src="<?=$bottomImage?>" alt="" class="bottom">
                                        <?php endif; ?>
                                    </div>
                                    <div id="<?=get_post_field('post_name')?>_ingredients" class="opener_target ingredients" style="background-color: <?=$openerColor?>;">
                                        <?=$ingredients?>
                                        <button type="button" class="opener_close_button">Close</button>
                                    </div>
                                    <div id="<?=get_post_field('post_name')?>_heating_instructions" class="opener_target heating_instructions" style="background-color: <?=$openerColor?>;">
                                        <header>
                                            <img src="<?=get_template_directory_uri()?>/assets/img/heating-instructions.png" alt="Heating Instructions">
                                            <?=$heatingInstructions?>
                                        </header>
                                        <ul class="heating_instructions_sections">
                                            <li>
                                                <img src="<?=get_template_directory_uri()?>/assets/img/inst-icon-air-fryer.png" alt="Air Fryer">
                                                <?=$heatingInstructionsAirFryer?>
                                            </li>
                                            <li>
                                                <img src="<?=get_template_directory_uri()?>/assets/img/inst-icon-oven.png" alt="Oven">
                                                <?=$heatingInstructionsOven?>
                                            </li>
                                            <li>
                                                <img src="<?=get_template_directory_uri()?>/assets/img/inst-icon-deep-fryer.png" alt="Deep Fryer">
                                                <?=$heatingInstructionsDeepFryer?>
                                            </li>
                                        </ul>
                                        <button type="button" class="opener_close_button">Close</button>
                                    </div>
                                </li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </section>
                <div class="products_end"></div>
            </div>
        </article>

    </main>

</div>

<?php
get_footer();
