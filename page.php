<?php get_header(); ?>
    <div class="container">
        <div class="main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h3>
                <?php the_title(); ?>
                </h3>
                <article class="post">
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="thumbnail">
                            <?php the_post_thumbnail() ?>
                        </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
            <?php else: ?>
                <?php echo wpautop('Sorry, no posts here!'); ?>
            <?php endif; ?>
        </div>
    
    
<?php get_footer(); ?>