<?php

get_header();
?>

<div id="primary">

    <main id="main" class="site_main">

        <header class="page_header">

            <h1 class="page_title"><?php esc_html_e('Not found'); ?></h1>

        </header>

        <div class="page_content">

            <p class="has-text-align-center">It looks like nothing was found at this location.<br/>Try searching for a different keyword.</p>

            <?php get_search_form(); ?>

        </div>

    </main>

</div>

<?php
get_footer();