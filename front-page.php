<?php get_header(); ?>

<section class="about">
    <div class="container">
        <h1>Un blog de recettes simples</h1>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
        <a href="recipe-list.html" class="btn">Voir les recettes</a>
    </div>
</section>

<?php

// 1 - Définition d'une nouvelle requete
$args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 3,
    'orderby'           => 'title',
    'order'             => 'ASC'
);
$query = new WP_Query($args);

// 2 - Boucle sur cette nouvelle requete
if($query->have_posts()){ ?>

    <section class="latest-news">
        <div class="container">

        <?php while ($query->have_posts()) { ?>
            <?php $query->the_post(); ?>
            <article class="card">
                <?php the_post_thumbnail('card-illustration', ['class' => 'card-illustration']); ?>
                <ul class="card-terms-list">
                    <li class="card-terms-item">
                        <?php the_category(' - '); ?>
                    </li>
                </ul>
                <h2 class="card-title"><?php the_title(); ?></h2>
                <p class="card-excerpt"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="card-link">Lire l'article</a>
            </article>
        <?php } ?>
            <!--
            <article class="card">
                <img src="img/perfect_peach_card.jpg" alt="Des abricots et de la menthe" class="card-illustration">
                <ul class="card-terms-list">
                    <li class="card-terms-item">
                        <a href="category.html" class="card-terms-link">Tips</a>
                    </li>
                </ul>
                <h2 class="card-title">Choisir les abricots</h2>
                <p class="card-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam accusantium quos quae iusto totam velit [...]</p>
                <a href="article.html" class="card-link">Lire l'article</a>
            </article>
            <article class="card">
                <img src="img/perfect_peach_card.jpg" alt="Des abricots et de la menthe" class="card-illustration">
                <ul class="card-terms-list">
                    <li class="card-terms-item">
                        <a href="category.html" class="card-terms-link">Tips</a>
                    </li>
                </ul>
                <h2 class="card-title">Choisir les abricots</h2>
                <p class="card-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam accusantium quos quae iusto totam velit [...]</p>
                <a href="article.html" class="card-link">Lire l'article</a>
            </article>
        -->
        </div>

    </section>

<?php } ?>

<?php get_footer(); ?>