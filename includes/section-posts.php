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
            <a href="<?php the_permalink();?>"><img class="article__img" src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>"></a>
            <?php endif; ?>
            
            <div class="article__content">
                <a class="article__title heading-secondary" href="<?php the_permalink();?>"><?php the_title();?></a>
        
                <p class="article__description paragraph"><?php the_excerpt();?></p>
            </div>
        </div>
    
    <?php endwhile;?>

<?php endif;?>

<?php //Pagination
    global $wp_query;

    $big = 999999999; // unlikely integer

    echo paginate_links(array(
        
        'base' => str_replace($big, '%#%',  esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query -> max_num_pages

    ));

?>