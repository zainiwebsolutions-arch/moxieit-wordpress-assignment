<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-6 text-center text-lg-start">
                    <p class="text-white mb-0"><i class="fa fa-map-marker-alt"></i><?php echo esc_html(get_theme_mod('topbar_address')); ?></p>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <p class="text-white mb-0">Call Us for Inquiry: <span class="text-primary"><?php echo esc_html(get_theme_mod('topbar_phone')); ?></span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <header>
        <!-- Navbar Start -->
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand bg-primary py-3 px-4">
                        <h2 class="text-secondary mb-0"><i class="fas fa-balance-scale me-1"></i>Lawfice</h2>
                    </a>
                <?php endif; ?>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse p-3" id="navbarCollapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'navbar-nav ms-auto',
                    ));
                    ?>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->
    </header>
    <main>