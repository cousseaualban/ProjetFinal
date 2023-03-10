<!DOCTYPE html>

<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="https://albancousseau-arinfo.fr/projetfinal/wp-content/uploads/2023/01/nba.png" sizes="64x64">
    <title><?php the_title(); ?> </title>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <!-- Top Navigation Menu -->
        <div class="topnav">
        <img src="<?php echo get_template_directory_uri() . '/assets/nba.png' ?>" alt="Logo du site" class="logo"/>
        
        <!-- Navigation links (hidden by default) -->
            <div id="myLinks">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Menu principal',
                        'container' => 'nav'
                    )
                );
                ?>
            </div>
            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <script>
            /* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
            function myFunction() {
                var x = document.getElementById("myLinks");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>
    </header>