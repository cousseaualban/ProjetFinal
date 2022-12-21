<?php get_header();
//Template name: A propos
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb; ?>')"></div>

<!-- Affiche le Gutemberg de la page A propos -->
<h1>L'histoire de la NBA !</h1>
<div class="apropos">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>