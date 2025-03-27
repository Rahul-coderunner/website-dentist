<div class="section services">
    <h2>Our Services</h2>
    <?php
    $args = array('post_type' => 'services', 'posts_per_page' => 3);
    $services = new WP_Query($args);
    if ($services->have_posts()) : while ($services->have_posts()) : $services->the_post(); ?>
        <div>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>