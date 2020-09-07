<section id="services">
    <div class="container">
        <div class="services-title">
            <h2><?php the_field('services_title');?></h2>
            <span><?php the_field('services_subtitle');?></span>
        </div>
        <div class="services-items">
            <ul>
                <?php if(have_rows('services_items')) : while(have_rows('services_items')) : the_row();?>
                    <li>
                        <img src="<?php the_sub_field('services_item_image');?>" alt="consultoria">
                        <h3><?php the_sub_field('services_item_title');?></h3>
                        <p><?php the_sub_field('services_item_content');?></p>
                        <a href="#">Saiba mais</a>
                    </li>
                <?php endwhile; endif;?>
            </ul>
        </div>
    </div>
</section>