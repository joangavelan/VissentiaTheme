<?php

    $counter = 1;
    $recommended_posts = get_posts(
        array(
            'include' => '447, 357, 232, 315, 147',
            'post_type' => 'post',
            'orderby' => 'post_in'
        )
    );

?>

<aside class="sidebar">
    <h3 class="sub-heading">Recomendados</h3>
    <ul class="sidebar__posts">

    <?php if($recommended_posts);?>

        <?php foreach($recommended_posts as $post) : setup_postdata($post);?>

            <li class="sidebar__post">
                <span class="sidebar__post-counter">
                    <?= '0' . $counter++ . '.' ?>
                </span>
                <div class="sidebar__post-meta">
                    <h4 class="entry-title">
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </h4>
                    <div class="entry-date"><?=get_the_date();?></div>
                </div>
            </li>

        <?php endforeach;?>

    </ul>
    
    <h3 class="sub-heading m3">Ad</h3>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- s - ad -->
    <ins class="adsbygoogle"
        style="display:inline-block;width:360px;height:360px"
        data-ad-client="ca-pub-7997794586711401"
        data-ad-slot="4859761664"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</aside>