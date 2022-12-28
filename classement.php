<?php get_header();
//Template name: Classement
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb; ?>')"></div>

<!-- Affiche le Gutemberg de la page Classement -->
<h1><?php the_title() ?></h1>
<div class="classement">
    <?php if (have_rows('conference_ouest')): ?>
    <?php while (have_rows('conference_ouest')):
            the_row(); ?>

    <div class="conferenceOuest">
        <h2>Conférence Ouest</h2>

        <div id="propertiesClassement">
            <?php the_sub_field('premier'); ?>
            <?php $logo_premier = get_sub_field('logo_premier'); ?>
            <?php if ($logo_premier): ?>
            <img src="<?php echo esc_url($logo_premier['url']); ?>"
                alt="<?php echo esc_attr($logo_premier['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('deuxieme'); ?>
            <?php $logo_deuxieme = get_sub_field('logo_deuxieme'); ?>
            <?php if ($logo_deuxieme): ?>
            <img src="<?php echo esc_url($logo_deuxieme['url']); ?>"
                alt="<?php echo esc_attr($logo_deuxieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('troisieme'); ?>
            <?php $logo_troisieme = get_sub_field('logo_troisieme'); ?>
            <?php if ($logo_troisieme): ?>
            <img src="<?php echo esc_url($logo_troisieme['url']); ?>"
                alt="<?php echo esc_attr($logo_troisieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('quatrieme'); ?>
            <?php $logo_quatri_me = get_sub_field('logo_quatrième'); ?>
            <?php if ($logo_quatri_me): ?>
            <img src="<?php echo esc_url($logo_quatri_me['url']); ?>"
                alt="<?php echo esc_attr($logo_quatri_me['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('cinquieme'); ?>
            <?php $logo_cinqui_me = get_sub_field('logo_cinquième'); ?>
            <?php if ($logo_cinqui_me): ?>
            <img src="<?php echo esc_url($logo_cinqui_me['url']); ?>"
                alt="<?php echo esc_attr($logo_cinqui_me['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('sixieme'); ?>
            <?php $logo_sixieme = get_sub_field('logo_sixieme'); ?>
            <?php if ($logo_sixieme): ?>
            <img src="<?php echo esc_url($logo_sixieme['url']); ?>"
                alt="<?php echo esc_attr($logo_sixieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('septieme'); ?>
            <?php $logo_septieme = get_sub_field('logo_septieme'); ?>
            <?php if ($logo_septieme): ?>
            <img src="<?php echo esc_url($logo_septieme['url']); ?>"
                alt="<?php echo esc_attr($logo_septieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('huitieme'); ?>
            <?php $logo_huitieme = get_sub_field('logo_huitieme'); ?>
            <?php if ($logo_huitieme): ?>
            <img src="<?php echo esc_url($logo_huitieme['url']); ?>"
                alt="<?php echo esc_attr($logo_huitieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('neuvieme'); ?>
            <?php $logo_neuvieme = get_sub_field('logo_neuvieme'); ?>
            <?php if ($logo_neuvieme): ?>
            <img src="<?php echo esc_url($logo_neuvieme['url']); ?>"
                alt="<?php echo esc_attr($logo_neuvieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('dixieme'); ?>
            <?php $logo_dixieme = get_sub_field('logo_dixieme'); ?>
            <?php if ($logo_dixieme): ?>
            <img src="<?php echo esc_url($logo_dixieme['url']); ?>"
                alt="<?php echo esc_attr($logo_dixieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('onzieme'); ?>
            <?php $logo_onzieme = get_sub_field('logo_onzieme'); ?>
            <?php if ($logo_onzieme): ?>
            <img src="<?php echo esc_url($logo_onzieme['url']); ?>"
                alt="<?php echo esc_attr($logo_onzieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('douzieme'); ?>
            <?php $logo_douzieme = get_sub_field('logo_douzieme'); ?>
            <?php if ($logo_douzieme): ?>
            <img src="<?php echo esc_url($logo_douzieme['url']); ?>"
                alt="<?php echo esc_attr($logo_douzieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('treizieme'); ?>
            <?php $logo_treizieme = get_sub_field('logo_treizieme'); ?>
            <?php if ($logo_treizieme): ?>
            <img src="<?php echo esc_url($logo_treizieme['url']); ?>"
                alt="<?php echo esc_attr($logo_treizieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('quatorzieme'); ?>
            <?php $logo_quatorzieme = get_sub_field('logo_quatorzieme'); ?>
            <?php if ($logo_quatorzieme): ?>
            <img src="<?php echo esc_url($logo_quatorzieme['url']); ?>"
                alt="<?php echo esc_attr($logo_quatorzieme['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div id="propertiesClassement">
            <?php the_sub_field('quinzieme'); ?>
            <?php $logo_quinzieme = get_sub_field('logo_quinzieme'); ?>
            <?php if ($logo_quinzieme): ?>
            <img src="<?php echo esc_url($logo_quinzieme['url']); ?>"
                alt="<?php echo esc_attr($logo_quinzieme['alt']); ?>" />
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php if (have_rows('conference_est')): ?>
    <?php while (have_rows('conference_est')):
            the_row(); ?>

    <div class="conferenceEst">
        <h2>Conférence Est</h2>

        <div id="propertiesClassement">
        <?php the_sub_field('premier'); ?>
        <?php $logo_premier = get_sub_field('logo_premier'); ?>
        <?php if ($logo_premier): ?>
        <img src="<?php echo esc_url($logo_premier['url']); ?>" alt="<?php echo esc_attr($logo_premier['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('deuxieme'); ?>
        <?php $logo_deuxieme = get_sub_field('logo_deuxieme'); ?>
        <?php if ($logo_deuxieme): ?>
        <img src="<?php echo esc_url($logo_deuxieme['url']); ?>" alt="<?php echo esc_attr($logo_deuxieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('troisieme'); ?>
        <?php $logo_troisieme = get_sub_field('logo_troisieme'); ?>
        <?php if ($logo_troisieme): ?>
        <img src="<?php echo esc_url($logo_troisieme['url']); ?>"
            alt="<?php echo esc_attr($logo_troisieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('quatrieme'); ?>
        <?php $logo_quatrieme = get_sub_field('logo_quatrieme'); ?>
        <?php if ($logo_quatrieme): ?>
        <img src="<?php echo esc_url($logo_quatrieme['url']); ?>"
            alt="<?php echo esc_attr($logo_quatrieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('cinquieme'); ?>
        <?php $logo_cinquieme = get_sub_field('logo_cinquieme'); ?>
        <?php if ($logo_cinquieme): ?>
        <img src="<?php echo esc_url($logo_cinquieme['url']); ?>"
            alt="<?php echo esc_attr($logo_cinquieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('sixieme'); ?>
        <?php $logo_sixieme = get_sub_field('logo_sixieme'); ?>
        <?php if ($logo_sixieme): ?>
        <img src="<?php echo esc_url($logo_sixieme['url']); ?>" alt="<?php echo esc_attr($logo_sixieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('septieme'); ?>
        <?php $logo_septieme = get_sub_field('logo_septieme'); ?>
        <?php if ($logo_septieme): ?>
        <img src="<?php echo esc_url($logo_septieme['url']); ?>" alt="<?php echo esc_attr($logo_septieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('huitieme'); ?>
        <?php $logo_huitieme = get_sub_field('logo_huitieme'); ?>
        <?php if ($logo_huitieme): ?>
        <img src="<?php echo esc_url($logo_huitieme['url']); ?>" alt="<?php echo esc_attr($logo_huitieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('neuvieme'); ?>
        <?php $logo_neuvieme = get_sub_field('logo_neuvieme'); ?>
        <?php if ($logo_neuvieme): ?>
        <img src="<?php echo esc_url($logo_neuvieme['url']); ?>" alt="<?php echo esc_attr($logo_neuvieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('dixieme'); ?>
        <?php $logo_dixieme = get_sub_field('logo_dixieme'); ?>
        <?php if ($logo_dixieme): ?>
        <img src="<?php echo esc_url($logo_dixieme['url']); ?>" alt="<?php echo esc_attr($logo_dixieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('onzieme'); ?>
        <?php $logo_onzieme = get_sub_field('logo_onzieme'); ?>
        <?php if ($logo_onzieme): ?>
        <img src="<?php echo esc_url($logo_onzieme['url']); ?>" alt="<?php echo esc_attr($logo_onzieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('douzieme'); ?>
        <?php $logo_douzieme = get_sub_field('logo_douzieme'); ?>
        <?php if ($logo_douzieme): ?>
        <img src="<?php echo esc_url($logo_douzieme['url']); ?>" alt="<?php echo esc_attr($logo_douzieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('treizieme'); ?>
        <?php $logo_treizieme = get_sub_field('logo_treizieme'); ?>
        <?php if ($logo_treizieme): ?>
        <img src="<?php echo esc_url($logo_treizieme['url']); ?>"
            alt="<?php echo esc_attr($logo_treizieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('quatorzieme'); ?>
        <?php $logo_quatorzieme = get_sub_field('logo_quatorzieme'); ?>
        <?php if ($logo_quatorzieme): ?>
        <img src="<?php echo esc_url($logo_quatorzieme['url']); ?>"
            alt="<?php echo esc_attr($logo_quatorzieme['alt']); ?>" />
        <?php endif; ?>
        </div>

        <div id="propertiesClassement">
        <?php the_sub_field('quinzieme'); ?>
        <?php $logo_quinzieme = get_sub_field('logo_quinzieme'); ?>
        <?php if ($logo_quinzieme): ?>
        <img src="<?php echo esc_url($logo_quinzieme['url']); ?>"
            alt="<?php echo esc_attr($logo_quinzieme['alt']); ?>" />
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer() ?>