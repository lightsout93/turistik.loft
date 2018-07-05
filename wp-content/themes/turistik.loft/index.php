<?php get_header(); ?>
    <div class="content">
        <h1 class="title-page">Последние новости и акции из мира туризма</h1>
        <div class="posts-list">
            <?php
            $args = array(
                'post_type' => array('post', 'news', 'promotions'),
                'publish' => true,
                'paged' => get_query_var('paged'),
            );
            query_posts($args);
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post-wrap">
                    <div class="post-thumbnail"><img
                                src="<?php the_post_thumbnail_url() ?>"
                                alt="Image поста"
                                class="post-thumbnail__image"></div>
                    <div class="post-content">
                        <div class="post-content__post-info">
                            <div class="post-date"><?php echo get_the_date(); ?></div>
                        </div>
                        <div class="post-content__post-text">
                            <div class="post-title">
                                <?php the_title(); ?>
                            </div>
                            <div>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <div class="post-content__post-control"><a href="<?php the_permalink(); ?>"
                                                                   class="btn-read-post">Читать далее >></a></div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="pagenavi-post-wrap"><?php the_posts_pagination([
                'end_size' => 1,
                'mid_size' => 1,
                'prev_next' => True,
                'prev_text' => __("<i class='icon icon-angle-double-left'></i>"),
                'next_text' => __("<i class='icon icon-angle-double-right'></i>")]); ?>
        </div>
    </div>
<?php get_footer(); ?>