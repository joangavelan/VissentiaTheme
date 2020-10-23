<section class="feed">    
    <div class="feed__main">
    <h3 class="sub-heading mb-5">Artículos Recientes</h3>
        <?php get_template_part('includes/section','posts'); ?>
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>


    <div class="feed__sidebar">
    <?php /*if(is_active_sidebar('blog-sidebar')) : ?>
        <?php dynamic_sidebar('blog-sidebar');?>
    <?php endif;*/ ?>
    <aside class="sidebar">
    <h3 class="sub-heading mb-5">Recomendados</h3>
    
    </aside>
    </div>

</section>