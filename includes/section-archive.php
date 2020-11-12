<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="article">

            <?php if(has_post_thumbnail()) : ?>
                <div class="article__img-wrapper">
                    <a href="<?php the_permalink();?>">
                        <img class="article__img entry-image" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    </a>
                </div>
            <?php endif; ?>
            

            <div class="article__content">
                <h3 class="entry-title mt-05"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <div class="entry-date"><?= get_the_date() ;?></div>
                <div class="entry-description"><?php the_excerpt();?></div>
            </div>

    
    </article>

<?php endwhile; else: endif;?>


<?php 
    global $wp_query;

    $big = 999999999; // unlikely integer

    echo paginate_links(array(
        
        'base' => str_replace($big, '%#%',  esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query -> max_num_pages,
        'prev_text' => '« Anterior',
        'next_text' => 'Siguiente »'
    ));

?>
