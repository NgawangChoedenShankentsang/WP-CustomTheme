<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?> -->

        <!-- <?php the_content(); ?> -->


        <section class="intro wrapper">
            <div class="wrapper__content">
                <h1 class="has-underline"><?php echo esc_html(get_field('homepage_title')); ?></h1>



                <?php
                $image = get_field('homepage_image');
                if (!empty($image)): ?>
                    <img class="profile"
                        src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>"
                        width="<?php echo esc_attr($image['width']); ?>"
                        height="<?php echo esc_attr($image['height']); ?>" />
                <?php endif; ?>
                <?php the_content(); ?>

                <div class="intro__socials socials has-divider">
                    <a href="" class="socials-item button">
                        <img src="/wp-content/themes/customtheme/assets/images/logo-x.svg" width="18" height="16" alt="Twitter/X">
                    </a>
                    <a href="" class="socials-item button">
                        <img src="/wp-content/themes/customtheme/assets/images/logo-github.svg" width="18" height="17" alt="GitHub">
                    </a>
                    <a href="" class="socials-item button">
                        <img src="/wp-content/themes/customtheme/assets/images/logo-linkedin.svg" width="16" height="16" alt="LinkedIn">
                    </a>
                    <a href="" class="socials-item button">
                        <img src="/wp-content/themes/customtheme/assets/images/logo-frontend-mentor.svg" width="18" height="16" alt="Frontend Mentor">
                    </a>
                </div>

            </div>

        </section>

        <section class="articles wrapper">
            <div class="wrapper__content">

                <h2 class="large has-accent-line">Latest Articles</h2>

                <div class="articles__links has-divider">
                    <?php

                    $posts = get_posts(array(
                        'numberposts'    => 5,
                        'post_type'         => 'post'
                    ));

                    if ($posts): ?>


                        <?php foreach ($posts as $post):

                            setup_postdata($post);

                        ?>

                            <article>
                                <a href="<?php the_permalink(); ?>" class="article__link">
                                    <div class="article__title"><?php the_title(); ?></div>
                                </a>
                                <p class="article__date"><?php echo get_the_date(); ?></p>
                            </article>

                        <?php endforeach; ?>

                        <?php wp_reset_postdata(); ?>

                    <?php endif; ?>



                    <a class="view-all" href="/articles">View all articles</a>
                </div>

            </div>
        </section>


<?php endwhile;
endif; ?>
<?php get_footer(); ?>