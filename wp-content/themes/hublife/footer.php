<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-adress">
                <span>
                    
                    <?php the_field('footer_adress');?><br/>
                    <?php the_field('footer_city');?>, <?php the_field('footer_cep');?>
                </span>            
            </div>
            <div class="footer-contact">
                <span>
                    Contato <br/>
                    <?php the_field('footer_number');?>
                </span>
            </div>
            <div class="footer-social-media">
                <ul>
                    <li>
                        <a href="<?php the_field('footer_facebook');?>" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('footer_instagram');?>" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="footer-logo">
            <img src="<?php bloginfo('template_url');?>/src/assets/img/white-logo.png" alt="logo branca">
            <img src="<?php bloginfo('template_url');?>/src/assets/img/logo-min.png" alt="logo min">
        </div>
    </div>
</footer>



<?php wp_footer();?>
</body>
<script src="<?php bloginfo('template_url') ?>/src/dist/plugins/plugins.js"></script>
<script src="<?php bloginfo('template_url') ?>/src/dist/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>


</html>