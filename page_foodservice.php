<?php
/**
 * Template Name: Foodservice
 */

get_header();

$background = get_field('background');

?>

<div id="primary">

    <main id="main" class="site_main dark_bg full_width">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <section id="foodservice_main" style="<?=$background ? "background-image: url($background)" : ''?>">
                <header class="entry_header">
                    <?php the_title('<h1 class="entry_title">', '</h1>'); ?>
                </header>
                <div class="entry_content">
                    <?php the_content(); ?>
                </div>
                <div class="trio_image_container">
                    <img src="<?=get_template_directory_uri()?>/assets/img/trio-on-board.png" alt="Trio of crunch rolls on a wooden board.">
                </div>
            </section>

            <?php if(have_rows('products')): ?>

                <section class="foodservice_products">
                    <ul class="foodservice_products_list">
                        <?php while(have_rows('products')): the_row(); ?>
                            <li style="background-image: url(<?=get_sub_field('background')?>)">
                                <div class="foodservice_product_container" id="product-<?=get_sub_field('product')->ID?>">
                                    <div class="foodservice_product_copy_container">
                                        <div class="foodservice_product_copy">
                                            <?=get_sub_field('copy')?>
                                        </div>
                                    </div>
                                    <div class="foodservice_product_image_container">
                                        <img src="<?=get_sub_field('image')['url']?>" alt="<?=get_sub_field('image')['alt']?>" class="foodersvice_product_image">
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </section>

            <?php endif; ?>

            <section class="brick_breaker">&nbsp;</section>
        </article>

    </main>

</div>

<?php
get_footer();
