<?php get_header(); ?>

<div class="container">
    <div class="section">
        <h2><?php the_archive_title(); ?></h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>