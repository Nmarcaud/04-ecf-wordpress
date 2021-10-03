<?php get_header(); ?>


<?php get_header(); ?>

<div class="container">

    <?php if (have_posts()){ ?>
        <article class="post">

            <?php while (have_posts()) { ?>
                <?php the_post(); ?>

                <header class="post-header">
				    <div class="container">
                        <figure class="post-header-illustration">
                            <?php the_post_thumbnail('full', ['class' => 'post-header-img']); ?>
                        </figure>
                        <div class="post-header-content">
                            <h1 class="post-title"><?php the_title(); ?></h1>
                            <ul class="post-meta-list">
                                <li class="post-meta-item date">Article publié le <?php the_date(); ?></li>
                                <li class="post-meta-item quantity">dans <a href="category.html"><?php the_category(); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <section class="post-content">
                    <div class="container container-narrow">
                        <?php the_content(); ?>
                    </div>
                </section>

            <?php } ?>
            </article>
    <?php } ?>

</div>

<?php get_footer(); ?>
<?php get_footer(); ?>