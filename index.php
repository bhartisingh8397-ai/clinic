<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(135deg, #1a3313 0%, #bdccb7ff 50%, #92b486ff 100%);">
        <div class="container hero-content" data-aos="fade-up">
            <span class="badge" style="background: var(--accent); color: var(--primary); font-weight: 700;">PREMIUM
                DERMATOLOGY</span>
            <h1 class="hero-title">Artistry in <span class="accent-text" style="font-style: italic;">Dermatology</span>
            </h1>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 30px 0; opacity: 0.9;">
                <center>Dr. Praveen Lakra offers a
                    bespoke approach to skin health, combining cutting-edge medical science with a refined aesthetic
                    eye.</center>
            </p>
            <div class="hero-btns">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn">Schedule Consultation</a>
                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn"
                    style="background: transparent; border: 1px solid var(--white); color: var(--white); margin-left: 20px;">Experience
                    Excellence</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-premium" style="background: #fdfdfd; padding: 120px 0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 80px;" data-aos="fade-up">
                <span class="badge" style="color: var(--accent);">OUR PHILOSOPHY</span>
                <h2 style="font-family: 'Playfair Display', serif; font-size: 3rem;">Dedicated to Your <span
                        class="accent-text">Self-Care</span></h2>
                <div style="width: 60px; height: 3px; background: var(--accent); margin: 30px auto;"></div>
            </div>
            <div class="services-grid">
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="100"
                    style="padding: 50px; background: var(--white); box-shadow: 0 20px 40px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                    <span class="icon"
                        style="font-size: 2.5rem; color: var(--accent); margin-bottom: 25px; display: block;"><i
                            class="fa-solid fa-wand-sparkles"></i></span>
                    <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px;">Cosmetic Artistry</h3>
                    <p style="color: #666; line-height: 1.7;">Subtle enhancements and rejuvenating treatments tailored
                        specifically for your unique features.</p>
                </div>
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="200"
                    style="padding: 50px; background: var(--white); box-shadow: 0 20px 40px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                    <span class="icon"
                        style="font-size: 2.5rem; color: var(--accent); margin-bottom: 25px; display: block;"><i
                            class="fa-solid fa-microscope"></i></span>
                    <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px;">Clinical Precision</h3>
                    <p style="color: #666; line-height: 1.7;">Evidence-based treatments for complex dermatological
                        conditions with a patient-first approach.</p>
                </div>
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="300"
                    style="padding: 50px; background: var(--white); box-shadow: 0 20px 40px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                    <span class="icon"
                        style="font-size: 2.5rem; color: var(--accent); margin-bottom: 25px; display: block;"><i
                            class="fa-solid fa-bolt-lightning"></i></span>
                    <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px;">Advanced Laser</h3>
                    <p style="color: #666; line-height: 1.7;">Harnessing the power of state-of-the-art laser technology
                        for flawless, radiated skin texture.</p>
                </div>
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="400"
                    style="padding: 50px; background: var(--white); box-shadow: 0 20px 40px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                    <span class="icon"
                        style="font-size: 2.5rem; color: var(--accent); margin-bottom: 25px; display: block;"><i
                            class="fa-solid fa-droplet"></i></span>
                    <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px;">Total Restoration</h3>
                    <p style="color: #666; line-height: 1.7;">Holistic hair and skin restoration protocols designed to
                        bring back your natural confidence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Snippet -->
    <section class="about-snippet-luxury" style="background: var(--white);">
        <div class="container about-snippet-flex">
            <div style="flex: 1; min-width: 300px;" data-aos>
                <span class="badge">The Doctor</span>
                <h2>Meet Dr. <span class="accent-text">Praveen Lakra</span></h2>
                <p class="bio" style="margin-top: 25px; line-height: 2;">With over 15 years of distinguished practice,
                    Dr. Lakra has become a trusted name in Gurgaon. His commitment to clinical excellence and patient
                    safety defines the ethos of our clinic.</p>
                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="read-more-link"
                    style="margin-top: 30px;">Discover the Journey <span class="arrow">&rarr;</span></a>
            </div>
            <div style="flex: 0 0 auto;" data-aos>
                <div class="premium-img-wrapper" style="position: relative;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/larka.jpg"
                        alt="Dr. Praveen Lakra" class="premium-img"
                        style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-listing" style="padding: 100px 0; background: var(--bg-light);">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 60px;" data-aos="fade-up">
                <span class="badge" style="color: var(--accent);">LATEST INSIGHTS</span>
                <h2 style="font-family: 'Playfair Display', serif; font-size: 3rem;">From Our <span
                        class="accent-text">Blog</span></h2>
                <div style="width: 60px; height: 3px; background: var(--accent); margin: 30px auto;"></div>
            </div>
            <div class="blog-grid">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                        <article class="post-card"
                            style="background: var(--white); border-radius: 15px; overflow: hidden; box-shadow: var(--card-shadow); transition: var(--transition);">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 200px; object-fit: cover;')); ?>
                                </div>
                            <?php else: ?>
                                <div
                                    style="width: 100%; height: 200px; background: #eee; display: flex; align-items: center; justify-content: center; color: #aaa;">
                                    No Image</div>
                            <?php endif; ?>

                            <div style="padding: 30px;">
                                <h2 style="font-size: 1.3rem; margin-bottom: 15px; color: var(--primary);">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 20px;">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>"
                                    style="color: var(--accent); font-weight: 600; font-size: 0.9rem;">Read More &rarr;</a>
                            </div>
                        </article>
                    <?php endwhile; else: ?>
                    <p>No posts found.</p>
                <?php endif; ?>
            </div>

            <div class="pagination" style="margin-top: 50px; text-align: center;">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </section>

    <!-- Get in Touch Section -->
    <section class="get-in-touch" style="padding: 120px 0; background: var(--bg-light);">
        <div class="container">
            <div class="contact-card-v2">
                <div class="contact-info-side">
                    <div class="contact-header">
                        <h2 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: var(--white);">Get
                            in <span class="accent-text">Touch</span></h2>
                        <p style="color: rgba(255,255,255,0.8); margin-bottom: 40px;">Schedule your consultation today
                            for glowing, healthy skin.</p>
                    </div>
                    <div class="contact-grid-v2" style="display: grid; gap: 25px;">
                        <div class="contact-item-v2">
                            <span class="icon"><i class="fa-solid fa-phone" style="color: var(--accent);"></i></span>
                            <div>
                                <h4 style="color: var(--white);">Phone</h4>
                                <p style="color: rgba(255,255,255,0.7);">+91 98765 43210</p>
                            </div>
                        </div>
                        <div class="contact-item-v2">
                            <span class="icon"><i class="fa-solid fa-location-dot"
                                    style="color: var(--accent);"></i></span>
                            <div>
                                <h4 style="color: var(--white);">Location</h4>
                                <p style="color: rgba(255,255,255,0.7);">3rd Floor, Building B, Sector 14, MG Road,
                                    Gurgaon</p>
                            </div>
                        </div>
                        <div class="contact-item-v2">
                            <span class="icon"><i class="fa-solid fa-envelope" style="color: var(--accent);"></i></span>
                            <div>
                                <h4 style="color: var(--white);">Email</h4>
                                <p style="color: rgba(255,255,255,0.7);">info@drpraveenlakra.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form-side"
                    style="background: var(--white); padding: 40px; border-radius: 15px; color: var(--text-main);">
                    <h3 style="color: var(--primary); font-family: 'Playfair Display', serif; margin-bottom: 25px;">Send
                        Us a <span class="accent-text">Message</span></h3>
                    <form action="#" method="POST" class="contact-form-premium">
                        <div class="form-row">
                            <input type="text" name="your-name" placeholder="Full Name" required>
                        </div>
                        <div class="form-row">
                            <input type="email" name="your-email" placeholder="Email Address" required>
                        </div>
                        <div class="form-row">
                            <input type="tel" name="your-phone" placeholder="Phone Number">
                        </div>
                        <div class="form-row">
                            <textarea name="your-message" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn" style="width: 100%;">Submit Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>