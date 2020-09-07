
<section id="spotlight">
    <div class="container">
        <div class="owl-carousel owl-theme spot">
                <div class="item">
                    <?php if(have_rows('carrosel')): while(have_rows('carrosel')) : the_row();?>
                    <div class="spotlight-content">
                        <h2><?php the_sub_field('spotlight_title');?></h2>
                        <p><?php the_sub_field('spotlight_content');?></p>
                        <a href="#">Saiba mais</a>
                    </div>
                    <div class="spotilight-img">
                        <img src="<?php the_sub_field('spotlight_image');?>" alt="mulher">
                    </div>
                    <?php endwhile; endif;?>
                </div>
        </div>
    </div>
</section>