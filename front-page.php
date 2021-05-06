<?php

get_header();

?>

<main id="site_content" role="main" class="site_main dark_bg">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
        
        <header class="entry_header">
            <?php the_title('<h1 class="entry_title">', '</h1>'); ?>
        </header>
        <div class="entry_content standard_width_content">
            <?php the_content(); ?>
        </div>

    </article>

</main>

<?php
get_footer();