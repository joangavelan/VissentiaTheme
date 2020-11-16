<?php 

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5
    );

    $_posts = new WP_query($args);

?>

<?php if($_posts->have_posts()) : ?>

    <?php while($_posts->have_posts()) : $_posts->the_post();?> 

        <article class="article">

            <?php if(has_post_thumbnail()) : ?>
                <div class="article__img-wrapper">
                    <a href="<?php the_permalink();?>">
                        <img class="article__img entry-image" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    </a>
                </div>
            <?php endif; ?>
            

            <div class="article__content">
                <div class="article__category entry-category"><?= the_category(); ?></div>
                <h3 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <div class="entry-date"><?=get_the_date();?></div>
                <div class="entry-description"><?php the_excerpt();?></div>
            </div>
    
        </article>
    
    <?php endwhile;?>

<?php endif;?>