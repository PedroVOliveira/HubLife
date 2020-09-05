<?php get_header();?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <?php the_title(); ?>
        <?php the_content(); ?>

    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
<?php get_footer();?>



<main>
	<section id="blogheader"></section>
	
	<!-- <section id="container">
		<div class="wrapper">
			<div class="posts">
				<?php
					$args = array(
						'posts_per_page' => '5',
						'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
					);
					query_posts( $args );
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
						<article>
							<div class="data">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="date"><?php the_date(); ?></div>
							</div>
						<?php if ( has_post_thumbnail() ) : ?>
						    <div class="posthumb" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
							    <a href="<?php the_permalink(); ?>"></a>
						    </div>
						<?php endif; ?>
							<div class="exc">
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="leia">Leia mais</a>
							</div>
						</article>
					<?php endwhile; ?>
						<?php wp_pagenavi(); ?>
					<?php endif; wp_reset_query(); ?>
			</div>
		</div>
	</section>
</main> -->