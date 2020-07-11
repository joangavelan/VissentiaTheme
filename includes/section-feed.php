<section class="feed">

    <div class="feed__articles">
        <?php get_template_part('includes/section','posts'); ?>
    </div>


    <div class="feed__sidebar">
    <?php if(is_active_sidebar('blog-sidebar')) : ?>
        <?php dynamic_sidebar('blog-sidebar');?>
    <?php endif; ?>
    </div>

</section>