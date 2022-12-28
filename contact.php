<?php get_header();
//Template name: Contact
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb; ?>')"></div>

<!-- Affiche le Gutemberg de la page Accueil -->
<h1>Contact</h1>
<div class="contact">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>