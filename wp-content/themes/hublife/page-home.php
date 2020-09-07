<?php
// Template Name: Home
?>

<?php get_header();?>
    <?php if(have_posts()): while(have_posts()) : the_post();?>

    <?php include('src/inc/spotlight.php');?>
    <?php include('src/inc/services.php');?>
    <?php include('src/inc/about.php');?>
    <?php include('src/inc/video.php');?>

    <?endwhile; endif;?>
<?php get_footer();?>

