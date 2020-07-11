<?php get_header(); ?>

    <h1><?php the_title();?></h1>

    <?php if(has_post_thumbnail()) : ?>

        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">

    <?php endif; ?>

    <?php get_template_part('includes/section','content'); ?>


<?php get_footer(); ?>