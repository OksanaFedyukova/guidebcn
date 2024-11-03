<?php
/* Template Name: Category - Places */
get_header(); ?>

<main>
    <h2>Top Places to Visit in Barcelona</h2>
    <div class="places-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="place">
                <?php if ( has_post_thumbnail() ) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="place-img" />
                <?php endif; ?>
                <div class="place-info">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="cta-button">Read More</a>
                </div>
            </div>
        <?php endwhile; else: ?>
            <p>No places to display</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
