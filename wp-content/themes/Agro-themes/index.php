<?php get_header(); ?>

<section id="revista">
    <?php
    $query_revistas = new WP_Query(array(
        'post_type'      => 'revista',
        'posts_per_page' => 3
    ));

    if ( $query_revistas->have_posts() ) :
        while ( $query_revistas->have_posts() ) : $query_revistas->the_post(); ?>
            <div class="border p-4">
                <?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?>
                <h2><?php the_title(); ?></h2>
            </div>
        <?php endwhile;
        wp_reset_postdata(); // ¡IMPORTANTE! Siempre resetear después de una query
    endif;
    ?>
</section>

<?php get_footer(); ?>