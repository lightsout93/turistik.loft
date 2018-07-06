<?php get_header() ?>
    <div id="content">
    <div id="center">
        <h1><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h1>
        <?php
        if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div id="posts">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <p><?php the_excerpt() ?></p>
                    <span>Категория: <?php the_category(', ') ?></span>
                </div>
            <?php endwhile; ?>
        <?php
        else :
            echo "Извините по Вашему результату ничего не найдено";
        endif;
        ?>
    </div>
<?php get_footer() ?>