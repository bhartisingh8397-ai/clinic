<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <div class="container header-flex">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link"
                    style="display: flex; align-items: center; gap: 12px;">


                    <span class="logo-text">DR. PRAVEEN <span class="accent-text">LAKRA</span></span>
                </a>
            </div>
            <button class="menu-toggle" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                    'container' => false,
                    'fallback_cb' => 'lakra_clinic_fallback_menu',
                ));

                function lakra_clinic_fallback_menu()
                {
                    echo '<ul>';
                    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/about/')) . '">About Us</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/blog/')) . '">Blog</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
                    echo '</ul>';
                }
                ?>
            </nav>
        </div>
    </header>