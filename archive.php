<?php get_header(); ?>

    <h1><?=single_cat_title();?></h1>
    <p><?php the_archive_description();?></p>
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
    </div>

<?php get_footer(); ?>