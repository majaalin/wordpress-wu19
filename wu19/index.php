<?php get_header(); ?>

<div class="row mt-5 mb-5">
        <div class="col">
        <?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?> 
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_post_thumbnail(); ?>
    <?php the_excerpt(); ?>
    <?php endwhile; ?>

    <?php endif; ?>
        </div>
    </div> 

<?php get_footer(); ?>