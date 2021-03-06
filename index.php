<?php get_header(); ?>
    <div class="container">    
        <div class="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <article class="post">
                    <div class="meta">
                        Created by 
                        <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?php the_author(); ?> 
                        </a>
                        on <?php the_date(); ?>
                    </div>
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="thumbnail">
                            <?php the_post_thumbnail() ?>
                        </div>
                    <?php endif; ?>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="button">Read more</a>
                </article>
            <?php endwhile; ?>
            <?php else: ?>
                <?php echo wpautop('Sorry, no posts here!'); ?>
            <?php endif; ?>
        </div>
        
    
<?php get_footer(); ?>