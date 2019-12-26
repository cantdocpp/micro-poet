<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $term = get_queried_object();
    $data = array( 'posts_per_page' => 10, 
        'category_name' => $term->slug, 
        'paged'=>$paged,
    );

    $get_category_post = new WP_Query( $data );
?>

<div class="post__list-title">
    <a href="<?php the_permalink() ?>">
        <?php the_title(); ?>
    </a>
</div>
<div class="post__date">
    <span> <?php echo get_the_date(); ?> </span>
</div>



