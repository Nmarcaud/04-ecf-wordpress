<?php get_header(); ?>

<div class="container">

    <?php if (have_posts()){ ?>
        <h1><?php echo wp_title(''); ?></h1>
        <div class="blog-grid">

            <?php while (have_posts()) { ?>
                <?php the_post(); ?>

                <article class="card">

                    <?php the_post_thumbnail('card-illustration', ['class' => 'card-illustration']); ?>

					<ul class="card-terms-list">
                        <li class="card-terms-item">
                            <?php the_category(' - '); ?>
                        </li>
					</ul>
                    
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>" class="card-link">Lire l'article</a>

                </article>

            <?php } ?>
        </div>
    <?php } ?>

</div>

<?php get_footer(); ?>