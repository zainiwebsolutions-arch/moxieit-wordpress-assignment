<?php

$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 4,
));

if ($query->have_posts()) :
?>

    <div class="row g-4">

        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <div class="col-md-6 col-lg-3">

                <div class="border p-3 h-100">

                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(
                            'medium',
                            array(
                                'class' => 'img-fluid mb-3'
                            )
                        ); ?>
                    <?php endif; ?>

                    <h5><?php echo esc_html(get_the_title()); ?></h5>

                    <p>
                        <?php echo esc_html(
                            wp_trim_words(
                                get_the_excerpt(),
                                15
                            )
                        ); ?>
                    </p>

                    <small>
                        <?php echo esc_html(get_the_author()); ?>
                        |
                        <?php echo esc_html(get_the_date()); ?>
                    </small>

                </div>

            </div>

        <?php endwhile; ?>

    </div>

<?php
endif;

wp_reset_postdata();
?>