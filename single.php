<?php get_header(); ?>

    <div class="post__heading">
            <?php 
                $categories = get_the_category();
                foreach($categories as $category) : ?>
                <a href="<?= get_category_link($category->term_id);?>" class="entry-category"> <?= $category->name; ?></a>
            <?php endforeach; ?>

            <h1 class="post__title entry-title"><?php the_title(); ?></h1>

            <div class="entry-date"><?= get_the_date() ?></div>
    </div>

    <img src="<?php the_post_thumbnail_url();?>" class="post__img" alt="<?php the_title();?>">
    
    <div class="feed">

        <div class="feed__main border-bt1">
            <article class="post">
                <?php get_template_part('includes/section','blogcontent'); ?>
            
                <?php wp_link_pages(); ?>
            </article>
        </div>

        <div class="feed__sidebar">
            <?php get_template_part('includes/blog-sidebar'); ?>
        </div>

    </div>

    

    <?php get_template_part('includes/section', 'related-posts'); ?>


<?php get_footer(); ?>