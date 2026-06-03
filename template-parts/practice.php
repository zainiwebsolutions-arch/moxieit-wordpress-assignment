<section>
    <!-- Practice Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title text-primary">Practice Areas</h6>
                <h1 class="display-5 mb-5">Comprehensive Legal Solutions</h1>
            </div>
            <div class="row g-4 g-md-0 text-center">
                <?php
                $practice_areas = new WP_Query(array(
                    'post_type' => 'practice_area',
                    'posts_per_page' => 6,
                ));

                if ($practice_areas->have_posts()):
                    while ($practice_areas->have_posts()):
                        $practice_areas->the_post(); ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="practice-item h-100 p-4 border-bottom border-end wow fadeIn" data-wow-delay="0.1s">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(
                                        'medium',
                                        array(
                                            'class' => 'img-fluid mb-4'
                                        )
                                    );
                                    ?>
                                <?php endif; ?>
                                <h4 class="mb-3">
                                    <a href="<?php echo esc_url(get_permalink()); ?>">
                                        <?php echo esc_html(get_the_title()); ?>
                                    </a>
                                </h4>
                                <p><?php echo esc_html(get_the_excerpt()); ?></p>
                                <a href="<?php echo esc_url(get_permalink()); ?>"><i class="fa fa-arrow-right fa-2x text-primary"></i></a>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
        </div>
    </div>
    <!-- Practice End -->
</section>