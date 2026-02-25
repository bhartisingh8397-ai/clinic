<?php get_header(); ?>

<main>
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <section class="blog-hero"
                    style="background: <?php echo has_post_thumbnail() ? 'linear-gradient(rgba(26, 51, 19, 0.7), rgba(45, 74, 34, 0.75)), url(\'' . get_the_post_thumbnail_url(null, 'full') . '\') no-repeat center center; background-size: cover;' : 'linear-gradient(135deg, #1a3313 0%, #2d4a22 50%, #3d6b2e 100%);'; ?> height: 60vh; display: flex; align-items: center;">
                    <div class="container" style="text-align: center;" data-aos>
                        <span class="badge"
                            style="background: rgba(255,255,255,0.1); color: var(--white);"><?php echo get_the_category()[0]->name; ?></span>
                        <h1 class="hero-title" style="color: var(--white); margin: 20px 0;"><?php the_title(); ?></h1>
                        <div
                            style="color: rgba(255,255,255,0.7); font-weight: 600; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem;">
                            Published <?php echo get_the_date(); ?> &mdash; By <?php the_author(); ?>
                        </div>
                    </div>
                </section>

                <section class="post-content" style="padding: 120px 0; background: var(--white);">
                    <div class="container" style="max-width: 800px; line-height: 2;">
                        <div class="reading-area" data-aos>
                            <div style="font-size: 1.25rem; color: var(--primary);">
                                <?php the_content(); ?>
                            </div>

                            <div
                                style="margin-top: 80px; padding-top: 40px; border-top: 1px solid rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center;">
                                <div class="post-tags">
                                    <?php the_tags('<span class="badge">', '</span><span class="badge">', '</span>'); ?>
                                </div>
                                <div class="share-box">
                                    <span
                                        style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--text-muted);">Share
                                        Story</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>