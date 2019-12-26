<?php get_header(); ?>

<div class="single__page partial__container">
    <div class="single__page-container">
        <div class="post__title">
            <p class="article__title"> <?php the_title(); ?> </p>
        </div>
        <div class="post__content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>