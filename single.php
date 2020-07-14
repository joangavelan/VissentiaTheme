<?php get_header(); ?>

    <div class="mg-bg"></div>
    <section class="feed">
        <div class="feed__main">
            <article class="post">
                <h1 class="post__title"><?php the_title(); ?></h1>

                <a href="#" class="category-meta">Superalimentos</a>
                
                <?php if(has_post_thumbnail()) : ?>
            
                    <img src="<?php the_post_thumbnail_url('blog-large');?>" class="post__img" alt="<?php the_title();?>">
            
                <?php endif; ?><br>
            
                <?php get_template_part('includes/section','blogcontent'); ?>
            
                <?php wp_link_pages(); ?>
            </article>
        </div>

        <div class="feed__sidebar">
            <div class="mg-sm"></div>
            <aside class="sidebar">
                <div class="sidebar__ad"></div>
                <div class="mg-bg"></div>
                <div class="sidebar__banner"></div>
            </aside>
        </div>
    </section>

<?php get_footer(); ?>