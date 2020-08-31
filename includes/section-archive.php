<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

<?php endwhile; else: endif;?>

<?= '<br>' ?>


<?php //Pagination ?>
<?php 
    global $wp_query;

    $big = 999999999; // unlikely integer

    echo paginate_links(array(
        
        'base' => str_replace($big, '%#%',  esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query -> max_num_pages

    ));

?>
