<?php
/* Template Name: Category - Museums */
get_header(); ?>

<main>
    <h2>Top Museums to Visit in Barcelona</h2>
    <div class="places-list">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="place">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium', ['class' => 'place-img']); ?>
                    <?php endif; ?>
                    <div class="place-info">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="cta-button">Read More</a>
                    </div>
                </div>
            <?php endwhile; else: ?>
            <p>No museums to display</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>