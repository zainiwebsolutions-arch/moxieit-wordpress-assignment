<?php get_header(); ?>

<div class="container py-5">

    <?php while (have_posts()) : the_post(); ?>

        <h1 class="mb-4">
            <?php echo esc_html(get_the_title()); ?>
        </h1>

        <?php if (has_post_thumbnail()) : ?>
            <div class="mb-4">
                <?php the_post_thumbnail('large', array(
                    'class' => 'img-fluid'
                )); ?>
            </div>
        <?php endif; ?>

        <div class="content">
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>