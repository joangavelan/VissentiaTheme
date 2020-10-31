<section class="posts-bc">
        <div class="posts-bc__col">
        
            <h3>Superalimentos</h3>
                
            <?php
            $cat_superalimentos = array(
                'category' => 10,
                'numberposts' => 3
            );
            $superalimentos = get_category_link(10);
            $plantas_medicinales = get_category_link(11);
                
                $posts = get_posts($cat_superalimentos);    
                foreach ($posts as $post) :  setup_postdata($post); 
                ?>
                    <article>  
                        <h3 class="entry-title title-sm"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                        <div class="entry-date"><?= get_the_date(); ?></div> 
                    </article>
                <?php endforeach; 
               
            ?>
            
            <a href="<?=esc_url($superalimentos);?>" class="posts-bc__btn">Ver más<i class="fas fa-long-arrow-alt-right"></i></a>
        
        </div>

        <div class="posts-bc__col">
            <h3>Plantas</h3>

            <?php
            $cat_plantas_medicinales = array(
                'category' => 11,
                'numberposts' => 3
            );
                
                $posts = get_posts($cat_plantas_medicinales);    
                foreach ($posts as $post) :  setup_postdata($post); 
                ?>
                    <article>  
                        <h3 class="entry-title title-sm"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                        <div class="entry-date"><?= get_the_date(); ?></div> 
                    </article>
                <?php endforeach;?>
                
            <a href="<?=esc_url($plantas_medicinales);?>" class="posts-bc__btn">Ver más<i class="fas fa-long-arrow-alt-right"></i></a>
        
        </div>
        <div class="posts-bc__col">
            <h3>Cultiva</h3>
            
            <?php
            $cat_superalimentos = array(
                'category' => 10,
                'numberposts' => 3
            );
                
                $posts = get_posts($cat_superalimentos);    
                foreach ($posts as $post) :  setup_postdata($post); 
                ?>
                    <article>  
                        <h3 class="entry-title title-sm"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                        <div class="entry-date"><?= get_the_date(); ?></div> 
                    </article>
                    
                <?php endforeach;?>

            <a href="<?=esc_url($superalimentos)?>" class="posts-bc__btn">Ver más<i class="fas fa-long-arrow-alt-right"></i></a>
        
        </div>

        <div class="posts-bc__col">
            <h3>Tecnología</h3>
            
            <?php
            $cat_plantasMedicinales = array(
                'category' => 11,
                'numberposts' => 3
            );
                
                $posts = get_posts($cat_plantasMedicinales);    
                foreach ($posts as $post) :  setup_postdata($post); 
                ?>
                    <article>  
                        <h3 class="entry-title title-sm"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                        <div class="entry-date"><?= get_the_date(); ?></div> 
                    </article>
                <?php endforeach; 
            ?> 

            <a href="<?=esc_url($plantas_medicinales);?>" class="posts-bc__btn">Ver más<i class="fas fa-long-arrow-alt-right"></i></a>

        </div>

        
</section>