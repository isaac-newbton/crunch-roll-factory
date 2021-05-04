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

    <main id="main" class="site_main dark_bg">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <header class="entry_header">
                <?php the_title('<h1 class="entry_title">', '</h1>'); ?>
            </header>
            <div class="entry_content">
                <?php the_content(); ?>
                <?php if($query->have_posts()): ?>

                    <nav class="product_links_nav">
                        <ul>

                            <?php while($query->have_posts()): $query->the_post(); ?>

                                <li>
                                    <a href="#<?=get_post_field('post_name')?>"><?=get_field('button_title')?></a>
                                </li>

                            <?php endwhile; ?>

                        </ul>
                    </nav>

                <?php $query = new WP_Query($args); endif; ?>

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

                            ?>

                                <li class="product">
                                    <div class="background">
                                        <img class="default" src="<?=$background?>" alt="">
                                        <img class="large" src="<?=$backgroundDesktop?>" alt="">
                                    </div>
                                    <div class="primary_content_container">
                                        <div class="content_text">
                                            <h2><?php the_title(); ?></h2>
                                            <?php the_content(); ?>
                                        </div>
                                        <div class="package_images">
                                            <ul class="slides">
                                                <li class="active">
                                                    <img src="<?=$pkgFront?>" alt="Front packaging">
                                                </li>
                                                <li class="">
                                                    <img src="<?=$pkgBack?>" alt="Back packaging">
                                                </li>
                                            </ul>
                                            <ul class="slides_nav">
                                                <li>
                                                    <button type="button">Front</button>
                                                </li>
                                                <li>
                                                    <button type="button">Back</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </section>
            </div>
        </article>

    </main>

</div>

<?php
get_footer();
