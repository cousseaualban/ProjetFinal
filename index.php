<?php get_header();
//Template name: Index
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb; ?>')"></div>

<!-- Affiche le Gutemberg de la page Accueil -->
<h1>Bienvenue sur mon site consacré à la NBA !</h1>
<div class="accueil">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>