<?php get_header(); ?>
    <div class="main">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <div class="meta">
                    Created by: <?php the_author(); ?> on <?php the_date(); ?>
                </div>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else: ?>
                <?php echo wpautop('Sorry, no posts here!'); ?>
            <?php endif; ?>
        </div>
    </div>
    
<?php get_footer(); ?>