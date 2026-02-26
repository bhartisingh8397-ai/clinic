<?php
/**
 * Template Name: Blog Page
 */

get_header(); ?>

<section class="blog-hero"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-hero.jpg');">
    <div class="hero-overlay"></div>
    <div class="container hero-content" data-aos="fade-up">
        <span class="badge"
            style="background: var(--accent); color: var(--primary); font-weight: 700; border: none;">LATEST
            INSIGHTS</span>
        <h1 class="hero-title" style="color: var(--white);">Health & <span class="accent-text">Wellness Blog</span></h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">Expert advice and clinical
            insights for your skin and hair care journey.</p>
    </div>
</section>

<section class="blog-listing" style="padding: 120px 0;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 80px;">
            <span class="badge">Healthcare Insights</span>
            <h2 style="font-size: 3rem;">Latest from the Clinic</h2>
            <div style="width: 60px; height: 3px; background: var(--accent); margin: 25px auto;"></div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(360px, 1fr)); gap: 50px;">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'paged' => $paged
            );
            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()):
                while ($blog_query->have_posts()):
                    $blog_query->the_post(); ?>
                    <article class="premium-post-card">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="post-featured-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                                <span class="post-category">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo esc_html($categories[0]->name);
                                    }
                                    ?>
                                </span>
                            </div>
                        <?php endif; ?>

                        <div class="post-details">
                            <span class="post-date">
                                <?php echo get_the_date('M d, Y'); ?>
                            </span>
                            <h3><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a></h3>
                            <p>
                                <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="read-more-link">Read Story <span
                                    class="arrow">&rarr;</span></a>
                        </div>
                    </article>
                <?php endwhile;

                // Pagination
                echo '<div class="premium-pagination">';
                echo paginate_links(array(
                    'total' => $blog_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                ));
                echo '</div>';

                wp_reset_postdata();
            else: ?>
                <p style="grid-column: 1/-1; text-align: center; font-size: 1.2rem; color: var(--text-muted);">No stories
                    found yet. Check back soon.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>