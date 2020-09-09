
<section id="spotlight">
    <div class="container">
        <div class="owl-carousel owl-theme spot">
            <?php if(have_rows('carrosel')): while(have_rows('carrosel')) : the_row();?>
                <div class="item">
                    <div class="spotlight-content js">
                        <h2><?php the_sub_field('spotlight_title');?></h2>
                        <p><?php the_sub_field('spotlight_content');?></p>
                        <a href="#about"><?php the_field('about_link_label');?></a>
                    </div>
                    <div class="spotilight-img">
                        <img src="<?php the_sub_field('spotlight_image');?>" alt="mulher">
                    </div>
                </div>
                <?php endwhile; endif;?>
        </div>
    </div>
</section>