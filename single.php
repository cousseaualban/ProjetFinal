<?php get_header();
?>
<main id="actu">
    <!-- boucle wordpress -->
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>

            <h1>
                <?php the_title() ?>
            </h1>
            <article>
                <!-- affiche le contenu -->
                <?php the_content(); ?>
                <!-- fin affiche le contenu -->
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- fin boucle wordpress -->
</main>

<?php get_footer(); ?>