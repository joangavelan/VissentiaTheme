<?php

    $related = get_posts( 
        array( 
            'category__in' => wp_get_post_categories($post->ID), 
            'numberposts' => 4, 
            'post__not_in' => array($post->ID) 
            ) 
    );

?>

<div class="related m5">
<h3>Continúa Leyendo</h3>

    <?php if($related);?>

        <?php foreach($related as $post) : setup_postdata($post);?>
        
            <article class="article">

                <?php if(has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink();?>">
                        <img class="article__img entry-image" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    </a>
                <?php endif; ?>
                
                <div class="article__content">
                    <h3 class="entry-title mt-05"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <div class="entry-description"><?php the_excerpt();?></div>
                    <a href="<?php the_permalink();?>" class="read-more">Leer más<i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
                
            </article>
    
        <?php endforeach; wp_reset_postdata(); ?>

</div>