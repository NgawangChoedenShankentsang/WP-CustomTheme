<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>

        <?php the_content(); ?>


<?php endwhile;
endif; ?>
<?php get_footer(); ?>