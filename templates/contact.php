<?php
/* Template Name: Contact */

global $post;

get_header(); ?>

<!-- MAIN -->
<main>
    <?php

    get_part('hero', 'simple', $post);
    get_part('form', 'contact');

    ?>
</main>
<!-- MAIN -->

<?php get_footer();
