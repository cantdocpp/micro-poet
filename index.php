<?php get_header() ?>

        <div class="home__heading">
            <span class="heading">A collection of beautiful, inpiring, and short words from this mundane world</span>
        </div>

        <div class="haiku__section section">
            <span class="title">haiku</span>
            <div class="section__index">
                <?php
                    $args = array( 'posts_per_page' => 3, 'category_name' => 'haiku' );

                    $get_haiku_post = new WP_Query( $args );
                ?>
                <?php if ( $get_haiku_post->have_posts() ) : while ( $get_haiku_post->have_posts() ) : $get_haiku_post->the_post(); ?>
                    <div class="section__index-content">
                        <span><?php the_content() ?></span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="section__footer">
                <span> <a href="<?php echo get_site_url() ?>/haiku">See all Haiku Poem</a> </span>
            </div>
        </div>

        <div class="tanka__section section">
            <span class="title">tanka</span>
            <div class="section__index">
                <?php
                    $args = array( 'posts_per_page' => 3, 'category_name' => 'tanka' );

                    $get_analect_post = new WP_Query( $args );
                ?>
                <?php if ( $get_analect_post->have_posts() ) : while ( $get_analect_post->have_posts() ) : $get_analect_post->the_post(); ?>
                    <div class="section__index-content">
                        <span><?php the_content() ?></span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="section__footer">
                <span> <a href="<?php echo get_site_url() ?>/tanka">See all Tanka Poem</a> </span>
            </div>
        </div>

        <div class="analect__section section">
            <span class="title">Analect</span>
            <div class="section__index">
                <?php
                    $args = array( 'posts_per_page' => 3, 'category_name' => 'analect' );

                    $get_analect_post = new WP_Query( $args );
                ?>
                <?php if ( $get_analect_post->have_posts() ) : while ( $get_analect_post->have_posts() ) : $get_analect_post->the_post(); ?>
                    <div class="section__index-content analect__content">
                        <span> <a href="<?php the_permalink() ?>"><?php the_title() ?></a> </span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="section__footer">
                <span> <a href="<?php echo get_site_url() ?>/analect">See all Analects</a> </span>
            </div>
        </div>

        <div class="collection__section section">
            <span class="title">collection</span>
            <div class="section__index">
                <?php
                    $args = array( 'posts_per_page' => 3, 'category_name' => 'collection' );

                    $get_collection_post = new WP_Query( $args );
                ?>
                <?php if ( $get_collection_post->have_posts() ) : while ( $get_collection_post->have_posts() ) : $get_collection_post->the_post(); ?>
                    <div class="section__index-content collection__content">
                        <span> <a href="<?php the_permalink() ?>"><?php the_title() ?></a> </span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="section__footer">
                <span> <a href="<?php echo get_site_url() ?>/collection">See all Collection</a> </span>
            </div>
        </div>




<?php get_footer() ?>