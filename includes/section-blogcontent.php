<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    
    <?php the_content(); ?>
    

    <?php //comments_template(); ?>


<?php endwhile; else: endif;?>
