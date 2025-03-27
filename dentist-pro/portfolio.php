<div class="section portfolio">
    <h2>Our Work</h2>
    <?php
    $args = array('post_type' => 'portfolio', 'posts_per_page' => 3);
    $portfolio = new WP_Query($args);
    if ($portfolio->have_posts()) : while ($portfolio->have_posts()) : $portfolio->the_post(); ?>
        <div>
            <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
        </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>