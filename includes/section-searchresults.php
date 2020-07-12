<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if(has_post_thumbnail()) : ?>

        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">

    <?php endif; ?>

    <h3><?php the_title();?></h3>

    <?php the_excerpt(); ?>

    <a href="<?php the_permalink();?>">Leer más</a>

<?php endwhile; else: ?>

    No hay resultados de la búsqueda "<?php the_search_query();?>"
    
<?php endif;?>

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