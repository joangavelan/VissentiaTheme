<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h3><?php the_title();?></h3>

    <?php the_excerpt(); ?>

    <a href="<?php the_permalink();?>">Read More</a>

<?php endwhile; else: endif;?>

<?= '<br>' ?>

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
