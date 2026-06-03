<?php

$query = new WP_Query(array(
    'post_type'      => 'practice_area',
    'posts_per_page' => 6,
));

if ($query->have_posts()) :
?>

    <div class="row g-4">

        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <div class="col-md-6 col-lg-4">

                <div class="practice-item h-100 p-4 border-bottom border-end">

                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(
                            'medium',
                            array(
                                'class' => 'img-fluid mb-4'
                            )
                        ); ?>
                    <?php endif; ?>

                    <h4><?php echo esc_html(get_the_title()); ?></h4>

                    <p><?php echo esc_html(get_the_excerpt()); ?></p>

                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        Read More
                    </a>

                </div>

            </div>

        <?php endwhile; ?>

    </div>

<?php
endif;

wp_reset_postdata();
