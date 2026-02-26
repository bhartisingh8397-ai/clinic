<?php
/**
 * Template Name: Services Page
 */
get_header(); ?>

<main>
    <!-- Services Hero -->
    <section class="services-hero"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/services-hero.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="hero-overlay"></div>
        <div class="container hero-content" data-aos="fade-up">
            <span class="badge">WHAT WE
                OFFER</span>
            <h1 class="hero-title" style="color: var(--white);">Our <span class="accent-text">Services</span></h1>
            <p style="font-size: 1.3rem; opacity: 0.95; max-width: 750px; margin: 0 auto; color: var(--white);">
                Comprehensive dermatological
                solutions combining advanced medical science with aesthetic excellence.</p>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section style="padding: 120px 0; background: #fdfdfd;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 80px;" data-aos="fade-up">
                <span class="badge" style="color: var(--accent);">EXPERTISE</span>
                <h2 style="font-family: 'Playfair Display', serif; font-size: 3rem;">Specialized <span
                        class="accent-text">Treatments</span></h2>
                <div style="width: 60px; height: 3px; background: var(--accent); margin: 30px auto;"></div>
                <p style="max-width: 600px; margin: 0 auto; color: #666; font-size: 1.1rem; line-height: 1.8;">
                    Dr. Praveen Lakra offers a wide range of advanced dermatological treatments tailored to your unique
                    needs.
                </p>
            </div>

            <div class="services-page-grid">
                <!-- 1. Cosmetic Dermatology -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-wand-sparkles"></i>
                    </div>
                    <h3>Cosmetic Dermatology</h3>
                    <p>Subtle enhancements with Botox, Fillers, Chemical Peels, and anti-aging treatments tailored for
                        your unique features.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> Botox & Fillers</li>
                        <li><i class="fa-solid fa-check"></i> Chemical Peels</li>
                        <li><i class="fa-solid fa-check"></i> Microdermabrasion</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="service-link">Book Consultation <span
                            class="arrow">&rarr;</span></a>
                </div>

                <!-- 2. Clinical Dermatology -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-microscope"></i>
                    </div>
                    <h3>Clinical Dermatology</h3>
                    <p>Evidence-based treatments for complex conditions like Acne, Eczema, and Psoriasis with a
                        patient-first approach.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> Acne Treatment</li>
                        <li><i class="fa-solid fa-check"></i> Eczema & Psoriasis</li>
                        <li><i class="fa-solid fa-check"></i> Skin Allergy Care</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="service-link">Book Consultation <span
                            class="arrow">&rarr;</span></a>
                </div>

                <!-- 3. Laser Treatments -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-bolt-lightning"></i>
                    </div>
                    <h3>Laser Treatments</h3>
                    <p>State-of-the-art laser technology for flawless skin texture, hair removal, and scar reduction.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> Laser Hair Removal</li>
                        <li><i class="fa-solid fa-check"></i> Scar Reduction</li>
                        <li><i class="fa-solid fa-check"></i> Skin Resurfacing</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="service-link">Book Consultation <span
                            class="arrow">&rarr;</span></a>
                </div>

                <!-- 4. Hair Restoration -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <h3>Hair Restoration</h3>
                    <p>Holistic hair restoration protocols including PRP therapy and advanced solutions for hair
                        thinning and loss.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> PRP Therapy</li>
                        <li><i class="fa-solid fa-check"></i> Hair Transplant</li>
                        <li><i class="fa-solid fa-check"></i> Scalp Treatments</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="service-link">Book Consultation <span
                            class="arrow">&rarr;</span></a>
                </div>

                <!-- 5. Anti-Aging Treatments -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <h3>Anti-Aging Treatments</h3>
                    <p>Turn back the clock with advanced anti-aging procedures that restore youthful radiance and
                        firmness to your skin.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> Wrinkle Reduction</li>
                        <li><i class="fa-solid fa-check"></i> Collagen Boosting</li>
                        <li><i class="fa-solid fa-check"></i> Skin Tightening</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="service-link">Book Consultation <span
                            class="arrow">&rarr;</span></a>
                </div>

                <!-- 6. Skin Rejuvenation -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-spa"></i>
                    </div>
                    <h3>Skin Rejuvenation</h3>
                    <p>Revitalize dull, tired skin with our premium rejuvenation treatments for a fresh, glowing
                        complexion.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> HydraFacial</li>
                        <li><i class="fa-solid fa-check"></i> Microneedling</li>
                        <li><i class="fa-solid fa-check"></i> LED Light Therapy</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="service-link">Book Consultation <span
                            class="arrow">&rarr;</span></a>
                </div>

                <!-- 7. Pigmentation Treatment -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-sun"></i>
                    </div>
                    <h3>Pigmentation Treatment</h3>
                    <p>Targeted solutions for dark spots, melasma, and uneven skin tone to reveal your natural, even
                        complexion.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> Melasma Treatment</li>
                        <li><i class="fa-solid fa-check"></i> Dark Spot Removal</li>
                        <li><i class="fa-solid fa-check"></i> Skin Brightening</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="service-link">Book Consultation <span
                            class="arrow">&rarr;</span></a>
                </div>

                <!-- 8. Mole & Wart Removal -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-hand-dots"></i>
                    </div>
                    <h3>Mole & Wart Removal</h3>
                    <p>Safe and effective removal of moles, warts, and skin tags using advanced medical techniques with
                        minimal scarring.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> Mole Removal</li>
                        <li><i class="fa-solid fa-check"></i> Wart Treatment</li>
                        <li><i class="fa-solid fa-check"></i> Skin Tag Removal</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="service-link">Book Consultation <span
                            class="arrow">&rarr;</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section style="padding: 120px 0; background: var(--bg-light);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;" data-aos="fade-up">
                <span class="badge" style="color: var(--accent);">WHY DR. LAKRA</span>
                <h2 style="font-family: 'Playfair Display', serif; font-size: 3rem;">Why Choose <span
                        class="accent-text">Us</span></h2>
                <div style="width: 60px; height: 3px; background: var(--accent); margin: 30px auto;"></div>
            </div>
            <div class="why-choose-grid">
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-choose-icon">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <h3>Expert Doctor</h3>
                    <p>15+ years of distinguished practice in medical & aesthetic dermatology with thousands of
                        successful treatments.</p>
                </div>
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-choose-icon">
                        <i class="fa-solid fa-medal"></i>
                    </div>
                    <h3>Proven Results</h3>
                    <p>Evidence-based treatments with a track record of exceptional outcomes and satisfied patients.</p>
                </div>
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-choose-icon">
                        <i class="fa-solid fa-microscope"></i>
                    </div>
                    <h3>Advanced Technology</h3>
                    <p>State-of-the-art equipment and the latest dermatological innovations for superior treatment
                        quality.</p>
                </div>
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="why-choose-icon">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h3>Personalized Care</h3>
                    <p>Every treatment is customized to your unique skin type, concerns, and aesthetic goals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-banner"
        style="padding: 100px 0; background: var(--primary); color: var(--white); text-align: center;">
        <div class="container" data-aos="zoom-in">
            <h2 class="section-heading" style="color: var(--white);">Ready to Transform Your <span
                    class="accent-text">Skin?</span></h2>
            <p
                style="margin: 30px 0 50px; opacity: 0.8; font-size: 1.2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                Book your private consultation with Dr. Praveen Lakra today and take the first step towards healthier,
                radiant skin.</p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn">Schedule Consultation</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>