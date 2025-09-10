<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <section class="article wrapper">
            <div class="wrapper__content">

                <?php the_post_thumbnail('post-thumbnail', ['class' => 'blog__featured-image']); ?>

                <div class="blog__content has-divider">
                    <h1 class="blog__title"><?php the_title(); ?></h1>
                    <div class="blog__date"><?php the_date(); ?></div>

                    <?php the_content(); ?>
                </div>

            </div>
        </section>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>