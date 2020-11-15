<section class="hero">

    <?php
        
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
                <a href="<?php the_permalink();?>"><img id="featured-hero-img" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"></a>
            </div>
            <div >
                <div class="entry-category"><a href="https://vissentia.com/superalimentos/"><?=the_category();?></a></div>
                <h3 class="entry-title">
                    <a href="https://vissentia.com/plantas-medicinales-y-sus-propiedades-curativas/"><?php the_title();?></a>
                </h3>
            </div>
            <div class="entry-date"><?=get_the_date();?></div>
            <div class="entry-description">
                <p><?php the_excerpt();?></p>
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
                    <div class="entry-category"><?= the_category(); ?></div>
                    <h3 class="entry-title">
                        <a href="https://vissentia.com/beneficios-de-la-curcuma-y-curcumina/"><?php the_title();?></a>
                    </h3>
                    <div class="entry-date"><?=get_the_date();?></div>
                </div>
            </article>

        <?php endforeach; ?>

    </div>


</section>