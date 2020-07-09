<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php 
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');

    echo $fname . ' ' . $lname;
    echo ' - ';

    ?>

    <?php echo get_the_date() . ' - ' ; ?>


    <?php 
    $categories = get_the_category();

    foreach($categories as $category) : ?>

        <a href="<?= get_category_link($category->term_id);?>">
            <?= $category->name; ?>
        </a>
        

    <?php endforeach; ?>


    <?php the_content(); ?>


    <?php
    $tags = get_the_tags();

    foreach($tags as $tag) : ?>

        <a href="<?= get_tag_link($tag->term_id);?>">
            <?= $tag->name; ?>
        </a>

    <?php endforeach; ?>
    

    <?php //comments_template(); ?>


<?php endwhile; else: endif;?>
