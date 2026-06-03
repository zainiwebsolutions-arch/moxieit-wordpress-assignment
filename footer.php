</main>

<!-- Footer Start -->
<footer>
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo esc_html(get_theme_mod('footer_address', '123 Street, New York, USA')); ?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo esc_html(get_theme_mod('footer_phone', '+012 345 6789')); ?></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo esc_html(get_theme_mod('footer_email', 'info@example.com')); ?></p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary me-2" href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>"><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Quick Links</h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'list-group list-group-flush footer-menu',
                        'menu_id' => 'footer-menu',
                    ));
                    ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Latest News</h4>
                    <ul class="list-group list-group-flush">
                        <?php

                        $latest_posts = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                        ));

                        if ($latest_posts->have_posts()) :
                            while ($latest_posts->have_posts()) :
                                $latest_posts->the_post();
                        ?>
                                <li class="list-group-item px-0">
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="d-block mb-1"><?php echo esc_html(get_the_title()); ?></a>
                                    <div class="d-flex">
                                        <small class="mb-0 me-3"><i class="fa fa-user me-1"></i><?php echo esc_html(get_the_author()); ?></small>
                                        <small class="mb-0 me-3"><i class="fa fa-calendar me-1"></i><?php echo esc_html(get_the_date('d, M, Y')); ?></small>
                                    </div>
                                </li>
                            <?php endwhile;
                            wp_reset_postdata();
                        else:
                            ?>
                            <li class="list-group-item px-0">
                                No posts found.
                            </li>

                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-body"><?php echo esc_html(get_theme_mod('business_hours_weekdays', '09:00 am - 07:00 pm')); ?></h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-body"><?php echo esc_html(get_theme_mod('business_hours_saturday', '09:00 am - 12:00 pm')); ?></h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-body"><?php echo esc_html(get_theme_mod('business_hours_sunday', 'Closed')); ?></h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

</footer>
<?php wp_footer(); ?>
</body>

</html>