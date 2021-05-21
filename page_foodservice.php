<?php
/**
 * Template Name: Foodservice
 */

get_header();

$background = get_field('background');

$args = [
    'post_type'=>'product',
    'posts_per_page'=>-1,
    'orderby'=>'menu_order',
    'order'=>'ASC'
];
$query = new WP_Query($args);

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
            </section>
            
            <?php if($query->have_posts()): ?>

                <section id="foodservice_list_products">
                    <ul class="products">
                        <?php while($query->have_posts()): $query->the_post(); ?>
                            <li class="foodservice_product">
                                <div class="thumbnail_container">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                                <div class="title_container">
                                    <?php the_title(); ?>
                                </div>
                                <div class="button_container">
                                    <a href="/products/#<?=get_post_field('post_name')?>" class="button" style="background-color: <?=get_field('opener_button_color')?>">More&nbsp;Info</a>
                                </div>
                            </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                </section>

            <?php endif; ?>
        </article>

    </main>

</div>

<?php
get_footer();
