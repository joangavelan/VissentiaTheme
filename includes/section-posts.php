<?php 

    $args = array(
        'post_type' => 'post',
    );

    $_posts = new WP_query($args);

?>

<?php if($_posts->have_posts()) : ?>

    <?php while($_posts->have_posts()) : $_posts->the_post();?> 

        <div class="article">
            <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink();?>">
                    <img class="article__img" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                </a>
            <?php endif; ?>
            
            <div class="article__content">
                <a class="article__title heading-secondary" href="<?php the_permalink();?>"><?php the_title();?></a>
        
                <?php the_excerpt();?>

                <a href="<?php the_permalink();?>" class="read-more">Leer más<span>&#8594;</span></a>
            </div>

        </div>

        
    
    <?php endwhile;?>

<?php endif;?>


