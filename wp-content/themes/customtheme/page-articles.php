<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <section class="articles wrapper">
            <div class="wrapper__content">

                <h1 class="has-accent-line"><?php the_title(); ?></h1>
                <p> <?php the_content(); ?> </p>

                <?php
                $posts = get_posts(array(
                    'numberposts'    => -1,
                    'post_type'         => 'post'
                ));

                if ($posts): ?>

                    <div class="articles__links">
                        <?php foreach ($posts as $post):
                            setup_postdata($post);
                        ?>

                            <article class="has-divider-small">
                                <a href="<?php the_permalink(); ?>" class="article__link">
                                    <div class="article__title"><?php the_title(); ?></div>
                                </a>


                                <p class="small article__blurb"> <?php the_excerpt(); ?></p>


                                <p class="small article__date"><?php echo get_the_date(); ?></p>
                            </article>

                        <?php endforeach; ?>
 
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>

            </div>
        </section>


<?php endwhile;
endif; ?>
<?php get_footer(); ?>