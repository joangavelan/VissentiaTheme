<?php get_header(); ?>

    <div class="post__heading">
            <?php 
                $categories = get_the_category();
                foreach($categories as $category) : ?>
                <a href="<?=get_category_link($category->term_id);?>" class="entry-category"> <?=$category->name;?></a>
            <?php endforeach; ?>
            <h1 class="post__title entry-title"><?php the_title(); ?></h1>
            <div class="entry-date"><?=get_the_date();?></div>
    </div>

    <img src="<?php the_post_thumbnail_url();?>" class="post__img" alt="<?php the_title();?>">
    
    <div class="feed">
        <div class="feed__main">
            <article class="post border-bt1">
                <?php get_template_part('includes/section','blogcontent'); ?>
            </article>

            <?php get_template_part('includes/section', 'related-posts'); ?>
        </div>

        <div class="feed__sidebar">
            <?php get_template_part('includes/blog-sidebar'); ?>
        </div>
    </div>

    <div class="slim-h ad">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- slim horizontal ad banner -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:730px;height:90px"
            data-ad-client="ca-pub-7997794586711401"
            data-ad-slot="3889841649"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

<?php get_footer(); ?>