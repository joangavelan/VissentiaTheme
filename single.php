<?php get_header(); ?>

    <h1><?php the_title(); ?></h1>

    <?php if(has_post_thumbnail()) : ?>

        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">

    <?php endif; ?><br>

    <?php get_template_part('includes/section','blogcontent'); ?>

    <?php wp_link_pages(); ?>

<?php get_footer(); ?>