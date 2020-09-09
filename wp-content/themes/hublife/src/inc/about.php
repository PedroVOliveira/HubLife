<section id="about">
    <div class="container">
        <div class="about-content js">
            <h2><?php the_field('about_differentials');?></h2>
            <p>
               <?php the_field('about_content');?>
            </p>
            <ul>
                <?php if(have_rows('about_diferentials_items')): while(have_rows('about_diferentials_items')): the_row();?>
                    <li>
                        <i class="fas fa-check"></i> <?php the_sub_field('about_items');?>
                    </li>
                <?php endwhile; endif;?>
            </ul>
            <a href="#map"><?php the_field('about_link_label');?></a>
        </div>
        <div class="about-img">
            <img src="<?php the_field('about_image');?>" alt="Diferenciais"/>
        </div>
        <div class="about-excelent-services js">
            <h2><?php the_field('about_excelent_title');?></h2>
            <p>
                <?php the_field('about_excelent_content');?>
            </p>
            <a href="#map"><?php the_field('about_link_label');?></a>
        </div>
        <div class="about-excelent-img">
            <img src="<?php bloginfo('template_url');?>/src/assets/img/sessao3-2-borda.png" alt="Execelencia"/>
        </div>
    </div>
</section>

