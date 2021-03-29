<?php get_header(); ?>

<div class="top-rated-posts">

    <div class="brand">
        <h2 class="title">top rated posts</h2>
        <div class="action">
            <a href="#">view all</a>
        </div>
    </div>

    <div class="contents-items">
        <div class="big-one">
            <div class="img">
                <img src="img/client1.jpg" alt="">
            </div>
            <div class="text">
                <h2 class="title">How to identify a good client</h2>
                <p class="desc_exemple">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, fugiat deleniti corrupti voluptatibus numquam nemo magni saepe architecto voluptas quos officia cum vitae. Numquam voluptas quae placeat. Quia veniam, hic quidem dolores reprehenderit animi est iste vitae eaque magnam possimus!
                </p>
            </div>
        </div>
        <div class="scnd-and-third-one">

            <?php
            query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=2');
            if (have_posts()) : while (have_posts()) : the_post();
            ?>
                    <div class="item">
                        <div class="img">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="">
                        </div>
                        <div class="text" style="word-wrap:break-word;">
                            <h2><?php the_title() ?></h2>
                            <a href="<?php the_permalink() ?>"><?= substr(the_content(), 0, 10) ?></a>
                        </div>
                        <div class="stats">
                            <!-- mettre en absolut pour les stats et l'action au hover -->
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>
<div class="contents">
    <div class="brand">
        <h2 class="title">The cuttest toy for child</h2>
        <div class="action">
            <a href="#">view all</a>
        </div>
    </div>
    <dv class="items">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
                <div class="item">
                    <div class="img">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="">
                    </div>
                    <div class="text">
                        <h2 class="title"><?php the_title() ?></h2>
                        <div class="action">
                            <a href="<?php the_permalink() ?>">View</a>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        <?php endif ?>
    </dv>
</div>


<?php get_footer(); ?>