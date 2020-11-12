<?php get_header(); ?>

    <div class="archive-heading mb-7">
        <h1 class="entry-title mb-15"><?=single_cat_title();?></h1>
        <?php the_archive_description();?>
    </div>

    <section class="feed">

    <div class="feed__main">
        <?php get_template_part('includes/section','archive'); ?>
    </div>


    <div class="feed__sidebar">
        <?php get_template_part('includes/blog-sidebar'); ?>
    </div>

<?php get_footer(); ?>