<section id="blog">
    <div class="container">
        <div class="blog-header">
            <h2>Blog</h2>
        </div>
        <div class="blog-posts">
            <?php
                $args = array(
                    'posts_per_page' => '3',
                );
                query_posts( $args );
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                    <article>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="blog-posts-thumb" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                    <?php endif; ?>
                        <div class="blog-posts-content">
                            <h3><?php the_title();?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read">Saiba mais</a>
                            <hr>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php endif; wp_reset_query(); ?>
        </div>
        <div class="blog-link">
            <a href="#">Ver todos</a>
        </div>                
    </div>
</section>