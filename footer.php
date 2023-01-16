<footer>
    <div class="footerNav">
        <img src="<?php echo get_template_directory_uri() . '/assets/nba.png' ?>" alt="Logo du site" class="logo" />
        <?php
        wp_nav_menu(
            array(
                'menu' => 'Menu principal',
                'container' => 'nav'
            )
        );
        ?>
    </div>
    <div class="policies">
        <ul>
            <p>Copyright 2022 NBA, All right reserved</p>
            <li><a href="<?php echo get_permalink(16) ?>">Mentions légales</a></li>
            <li><a href="<?php echo get_permalink(3) ?>">Politique de confidentialité</a></li>
        </ul>
    </div>
</footer>