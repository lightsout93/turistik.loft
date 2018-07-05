<?php
/*
 * Template Name: Акция
 * Template Post Type: promotions
 */
get_header(); ?>
    <div class="content">
        <?php
        if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="title-page"><?php the_title(); ?></h1>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="alignleft">
            <div>
                <?php the_content();
                if (get_field('img_content')): ?>
                    <img src="<?php echo get_field('img_content')['url']; ?>">
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="page-navigation">
            <div class="page-navigation-wrap"><?php previous_post_link('%link', "<i
                            class=\"icon icon-angle-double-left\"></i>Предыдущая статья"); ?>
            </div>
            <div class="page-navigation-wrap"><?php next_post_link('%link', "Сдедующая статья<i
                            class=\"icon icon-angle-double-right\"></i>"); ?></div>
        </div>
    </div>
<?php get_footer(); ?>