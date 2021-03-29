<?php get_header() ;?>
    <div class="contents" style="width: 90%;margin:auto;word-wrap: break-word;">
    <?php while(have_posts()):the_post()?>
    <?php setPostViews(get_the_ID());?>
        <h2 class="title"><?php the_title() ?></h2>
        <div class="img">
            <img src="<?php the_post_thumbnail_url() ?>" alt="">
        </div>
        <p>
            <?php the_content()?>
        </p>
    <?php endwhile ?>
    </div>
<?php  get_footer() ;?>