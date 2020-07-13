<section class="feed">

    <div class="feed__main">
        <?php get_template_part('includes/section','posts'); ?>
    </div>


    <div class="feed__sidebar">
    <?php /*if(is_active_sidebar('blog-sidebar')) : ?>
        <?php dynamic_sidebar('blog-sidebar');?>
    <?php endif;*/ ?>

    <aside class="sidebar">
        <div class="sidebar__ad"></div>
        <div class="mg-bg"></div>
        <div class="sidebar__banner"></div>
    </aside>
    </div>

</section>