<section id="video">
    <div class="container">
        <div class="video-content">
            <h2><?php bloginfo('name');?></h2>
            <span><?php the_field('video_subtitle');?></span>

        </div>
        <div class="video-banner">
            <a data-fancybox href="<?php the_field('video_url');?>">
                <img src="<?php the_field('video_thumbnail');?>" alt="video">
            </a>
        </div>
    </div>
</section>