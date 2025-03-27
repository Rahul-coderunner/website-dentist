<?php get_header(); ?>

<div class="container">
    <div class="section">
        <h2>Welcome to Our Dental Clinic</h2>
        <p>Book an appointment today for world-class dental care!</p>
    </div>

    <?php get_template_part('template-parts/services'); ?>
    <?php get_template_part('template-parts/portfolio'); ?>
    <?php get_template_part('template-parts/reviews'); ?>
    <?php get_template_part('template-parts/education'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>