<div class="section reviews">
    <h2>Patient Reviews</h2>
    <?php
    $args = array('post_type' => 'reviews', 'posts_per_page' => 3);
    $reviews = new WP_Query($args);
    if ($reviews->have_posts()) : while ($reviews->have_posts()) : $reviews->the_post(); ?>
        <div>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>