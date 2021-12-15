<?php
/**
 * Template Name: About
 */

get_header();

$our_product_content = get_field('our_product_content');
$our_product_thumbnail = get_field('our_product_thumbnail');
$our_product_video = get_field('our_product_video');
$our_past_content = get_field('our_past_content');
$our_past_mobile_image = get_field('our_past_mobile_image');
$our_past_left_image = get_field('our_past_left_image');
$our_past_right_image = get_field('our_past_right_image');
$our_present_content = get_field('our_present_content');
$our_present_image = get_field('our_present_image');
$our_mission_content = get_field('our_mission_content');

?>

<div id="primary">

    <main id="main" class="site_main dark_bg about">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <header class="entry_header">
                <?php the_title('<h1 class="entry_title">', '</h1>'); ?>
            </header>
            <div class="entry_content">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/rolls-left.png" alt="" class="abs_image top">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/rolls-right.png" alt="" class="abs_image bot">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/crf-k.png" alt="" class="abs_image logo">
                
                <section class="our_product">
                    <div class="our_product_content_container about_content_container">
                        <div class="our_product_content">
                            <?=$our_product_content?>
                        </div>
                    </div>
                    <div class="our_product_video_container">
                        <video src="<?=$our_product_video?>" class="our_product_video" muted autoplay loop poster="<?=$our_product_thumbnail['url']?>"></video>
                    </div>
                </section>

                <section class="our_past">
                    <div class="our_past_left_image_container">
                        <img src="<?=$our_past_left_image['url']?>" alt="<?=$our_past_left_image['alt']?>">
                    </div>
                    <div class="our_past_content_container about_content_container">
                        <div class="our_past_content">
                            <?=$our_past_content?>
                        </div>
                    </div>
                    <div class="our_past_right_image_container">
                        <img src="<?=$our_past_right_image['url']?>" alt="<?=$our_past_right_image['alt']?>">
                    </div>
                    <div class="our_past_mobile_image_container">
                        <img src="<?=$our_past_mobile_image['url']?>" alt="<?=$our_past_mobile_image['alt']?>">
                    </div>
                </section>

                <section class="our_present">
                    <div class="our_present_big_image_container">
                        <img src="<?=$our_present_image['url']?>" alt="<?=$our_present_image['alt']?>" class="our_present_big_image">
                    </div>
                    <div class="our_present_content_container about_content_container">
                        <div class="our_present_content">
                            <?=$our_present_content?>
                        </div>
                    </div>
                    <img src="<?=$our_present_image['url']?>" alt="<?=$our_present_image['alt']?>" class="our_present_image">
                </section>

                <section class="our_mission">
                    <div class="our_mission_content_container about_content_container">
                        <div class="our_mission_content">
                            <?=$our_mission_content?>
                        </div>
                    </div>
                </section>

            </div>
        </article>

    </main>

</div>

<?php
get_footer();
