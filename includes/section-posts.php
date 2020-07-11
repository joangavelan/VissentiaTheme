<?php 

    $args = array(
        'post_type' => 'post',
    );

    $_posts = new WP_query($args);

?>

<?php if($_posts->have_posts()) : ?>

    <?php while($_posts->have_posts()) : $_posts->the_post();?> 

        <a href="<?php the_permalink();?>"><?php the_title();?></a><br>

        <?php if(has_post_thumbnail()) : ?>
        <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>"></a>
        <?php endif; ?>

        <?php the_excerpt(); ?>
    
    <?php endwhile;?>

<?php endif;?>

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