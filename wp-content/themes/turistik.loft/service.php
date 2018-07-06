<?php
/*
 * Template Name: О сервисе
 */
get_header();
$args = array(
    'post_type' => array('post', 'news', 'promotions'),
    'publish' => true,
    'paged' => get_query_var('paged'),
);
query_posts($args);
the_post(); ?>
<div class="content">
    <h1 class="title-page"><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
