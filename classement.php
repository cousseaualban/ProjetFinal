<?php get_header();
//Template name: Classement
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb; ?>')"></div>

<!-- Affiche le Gutemberg de la page Classement -->
<h1><?php the_title() ?></h1>
<div class="classement">
    <?php the_content(); ?>
</div>  

<?php get_footer(); ?>