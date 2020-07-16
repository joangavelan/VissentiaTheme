<?php get_header(); ?>

    <h1><?=single_cat_title();?></h1>
    <div class="mg-bg"></div>

    <section class="feed">

    <div class="feed__main">
        <?php get_template_part('includes/section','archive'); ?>
    </div>


    <div class="feed__sidebar">
        <aside class="sidebar">
            <div class="sidebar__ad"></div>
            <div class="mg-bg"></div>
            <div class="sidebar__banner"></div>
        </aside>

        <?php /*if(is_active_sidebar('blog-sidebar')) : ?>
        <?php dynamic_sidebar('blog-sidebar');?>
        <?php endif;*/ ?>
    </div>


<?php get_footer(); ?>