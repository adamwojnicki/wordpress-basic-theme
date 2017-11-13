<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><?php bloginfo('name') ?></h1>
        <span><?php bloginfo('description') ?></span>
    </header>
    <div class="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
        <?php endwhile; ?>
        <?php else: ?>
            <?php echo wpautop('Sorry, no posts here!'); ?>
        <?php endif; ?>
    </div>
</body>
</html>