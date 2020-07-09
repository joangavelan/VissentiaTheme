<?php get_header(); ?>

    <h1><?php the_title(); ?></h1>

    <?php get_template_part('includes/section','blogcontent'); ?>

    <?php wp_link_pages(); ?>

<?php get_footer(); ?>