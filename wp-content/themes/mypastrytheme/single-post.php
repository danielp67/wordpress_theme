<?php get_header() ?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        <h1><?php the_title() ?></h1>



        <p>
            <img src="<?php the_post_thumbnail_url() ?>" alt="" style="width:200px; height:auto;">
        </p>

        <?php the_content() ?>


        <h2>Dans le même thème</h2>
        <div class="row">
        <?php
        $query = new WP_Query([
            'post_not_in' => [get_the_ID()],
            'post_type' => 'post',
            'posts_per_page' => 3
        ]);
        while($query->have_posts()): $query->the_post();
        ?>
        <div class="col-sm-4 my-3">
            <?php get_template_part('parts/card', 'post'); ?>
            <div class="card">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height:150px; width:auto;'])?>
                        

                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                            <?php
                            the_terms(get_the_ID(), 'cooking');
                            ?>
                            

                            <a href="<?php the_permalink()?>" class="card-link">Voir plus</a>
                            
                        </div>

                    </div>
           
        </div>
         

<?php endwhile; wp_reset_postdata(); ?>
</div>

<?php endwhile; endif; ?>

<?php get_footer() ?>