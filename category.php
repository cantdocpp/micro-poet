<?php get_header() ?>

<div class="category-page partial__container">
    <?php if (is_category('haiku')) : ?>
        <?php get_template_part( 'template-parts/haiku-head' ); ?>
        <?php elseif (is_category('tanka')) : ?>
        <?php get_template_part( 'template-parts/tanka-head' ); ?>
        <?php elseif (is_category('collection')) : ?>
        <?php get_template_part( 'template-parts/collection-head' ); ?>
        <?php elseif (is_category('analect')) : ?>
        <?php get_template_part( 'template-parts/analect-head' ); ?>
    <?php endif; ?>

    <div class="categoty__content">
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $term = get_queried_object();
            $data = array( 'posts_per_page' => 10, 
            'category_name' => $term->slug, 
            'paged'=>$paged,
        );

            $get_category_post = new WP_Query( $data );
        ?>
        <?php if ( $get_category_post->have_posts() ) : while ( $get_category_post->have_posts() ) : $get_category_post->the_post(); ?>
        <div class="post__list">
            <?php if($term->slug === 'analect' || $term->slug === 'collection') { ?>
                <?php get_template_part( 'template-parts/analect-collection' ); ?>
            <?php } else {?>
                <span> <?php the_content(); ?> </span>
            <?php } ?>
        </div>

        <?php endwhile; ?>
            <?php 
                next_posts_link(); 
                echo '<br />';
                previous_posts_link();  
            ?>
        <?php endif; ?>
        
    </div>
</div>

<?php get_footer(); ?>
