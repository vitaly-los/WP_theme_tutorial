<?php get_header(); ?>

<main  class="clearfix">
    <div class="postsFlow-item clearfix">
        <?php the_post(); ?>
        <article class="postItem">
            <a href= "<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?>" </a>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
    </div>
    <?php the_posts_navigation() ?>
</main>
<?php get_sidebar(); ?>

<?php get_footer(); ?>

