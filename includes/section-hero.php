<section class="hero">

    <?php

        $featured_post = get_post(195);
        
        $featured_posts = get_posts(
            array(
                'include' => '550, 147, 109, 151',
                'post_type' => 'post',
                'orderby' => 'post__in'
            )
        )    ;

    ?>

    <div class="hero__col-1 hero__cols">
        <article class="entry">
            <div class="entry-image">
                <a href="<?=get_the_permalink($featured_post);?>"><img id="featured-hero-img" src="<?=get_the_post_thumbnail_url($featured_post);?>" alt="<?php the_title();?>"></a>
            </div>
            <div>
                <a class="entry-category" href="<?=get_category_link(11)?>"><?='Plantas Medicinales'?></a>
                <h3 class="entry-title">
                    <a href="<?=get_the_permalink($featured_post)?>"><?=get_the_title($featured_post)?></a>
                </h3>
            </div>
            <div class="entry-date"><?=get_the_date('', $featured_post);?></div>
            <div class="entry-description">
                <p>Las plantas medicinales, también conocidas como hierbas medicinales, son conocidas en todo el mundo y utilizadas en todas las culturas como fuente de medicina esencial. Las primeras evidencias de hierbas se descubrieron hace aproximadamente 5000 años, en la civilización sumeria. Desde el principio de los tiempos, la gente utilizaba las plantas para curar las diferentes enfermedades que padecían...</p>
            </div>
        </article>
    </div>

    <div class="hero__col-2 hero__cols">
        <h3 class="sub-heading">Destacados</h3>

    <?php if($featured_posts)?>

        <?php foreach ($featured_posts as $post) : setup_postdata($post); ?>

            <article class="entry smArt">
                <div class="entry-image">
                    <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"></a>
                </div>
                <div class="entry-content">
                    <div class="entry-category"><?=the_category();?></div>
                    <h3 class="entry-title">
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </h3>
                    <div class="entry-date"><?=get_the_date();?></div>
                </div>
            </article>

        <?php endforeach; ?>

    </div>


</section>