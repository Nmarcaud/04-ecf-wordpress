<?php get_header(); ?>
<h1>Page</h1>

<?php if (have_posts()){ ?>
    <?php while (have_posts()) { ?>
        <?php the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <a href="<?php the_permalink(); ?>">Lien</a>

    <?php } ?>
<?php } ?>

<?php get_footer(); ?>